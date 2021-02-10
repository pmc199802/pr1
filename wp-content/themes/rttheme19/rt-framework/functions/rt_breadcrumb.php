<?php
#-----------------------------------------
#	RT-Theme rt_breadcrumb.php
#-----------------------------------------

add_action("rt_breadcrumb_menu", "rt_breadcrumb", 10, 1 );

/* RT-Breadcrumb Function */ 
if( ! function_exists('rt_breadcrumb') ){
	function rt_breadcrumb( $args = array() ){
		global $rt_taxonomy, $post, $rt_delimiter, $rt_item_position, $wp_query, $rt_global_variables;

		//the breadcrumb text before the menu
		$breadcrumb_text = "";

		//default values
		$defaults =  array(
			'rt_delimiter'   => ' <span class="icon-angle-right"></span> ',
			'wrap_before' => '',
			'wrap_after'  => '',
			'breadcrumb_text' => $breadcrumb_text,
			'home'        => esc_html_x( 'Home','Frontend Text','rt_theme' ),
		);

		$args = wp_parse_args( $args, $defaults );

		//extract variables
		extract( $args );

		//define variables
		$rt_is_bbpress = $breadcrumb = ""; 
	 
		/*  WooCommerce Breadcrumb */ 
		if ( function_exists( 'woocommerce_breadcrumb' ) && ! $rt_global_variables['rt_shopstartpage'] ) {
			if( is_woocommerce() ){
				$defaults = array(
					'delimiter'  => $rt_delimiter,
					'wrap_before'  => $wrap_before. '<ol vocab="http://schema.org/" typeof="BreadcrumbList">' . '<li property="itemListElement" typeof="ListItem"><a class="icon-home" property="item" typeof="WebPage" href="'. RT_BLOGURL .'"><span property="name">'.$home.'</span></a><meta content="1" property="position"></li>' .$rt_delimiter,
					'wrap_after' => '</ol>'.$wrap_after,
					'before'   => '<li property="itemListElement" typeof="ListItem">',
					'after'   => '</li>',
					'home'    => false,
				);
			
				ob_start();
				woocommerce_breadcrumb($defaults);
				$breadcrumb = ob_get_contents();
				ob_end_clean();
				return $breadcrumb; 
			}
		} 

		/*  YOAST Breadcrumb */ 
		if ( function_exists( 'yoast_breadcrumb' ) ) {
			
			$yoast_options = get_option( 'wpseo_titles' );
			if ($yoast_options===false){
				$yoast_options = get_option( 'wpseo_internallinks' );	
			} 

			if(isset($yoast_options['breadcrumbs-enable'])  && !empty($yoast_options['breadcrumbs-enable'])){
				ob_start();
				yoast_breadcrumb($wrap_before ,$wrap_after);
				$breadcrumb = ob_get_contents();
				ob_end_clean();		
				return $breadcrumb; 		
			}
		} 

		$breadcrumb .= $wrap_before;
		$breadcrumb .= ! empty( $breadcrumb_text ) ? $breadcrumb_text." " : "";

		/*
		  BBPRESS Breadcrumb
		  use BBpress Breadcrumb if for bbpress pages
		*/ 
		if ( function_exists( 'bbp_breadcrumb' ) ) {
			global $rt_bb_breadcrumb, $rt_wrap_before,$rt_wrap_after,$rt_breadcrumb_text;

			$rt_wrap_before = $wrap_before;
			$rt_wrap_after = $wrap_after;
			$rt_breadcrumb_text = $breadcrumb_text;

			//check the current page is if it is part of bbpress
			if ( is_bbpress() ){  
				$breadcrumb .= $rt_bb_breadcrumb;
				$rt_is_bbpress = true; 
			}  
		} 

		//if its not a bbpress page run default breadcrumb
		if( ! $rt_is_bbpress ){

				

				$breadcrumb .= '<ol vocab="http://schema.org/" typeof="BreadcrumbList">'."\n";


				//Home Page
				if( ! is_front_page() ){
					$breadcrumb .= rt_create_breadcrumb_item( array( "class" => "icon-home", "sublink" => false, "url"=> RT_BLOGURL, "title"=> get_bloginfo('name'), "link_name" => $home ) );
				}

				//Pages
				if ( is_page() && ! is_front_page() && $post ){
					$breadcrumb .= rt_page_parents( $post, "" ) . rt_create_breadcrumb_item( array( "rt_delimiter" => "", "title" => get_the_title( rt_wpml_translated_page_id( $post->ID ) ) ) );
				}

				//Single posts
				elseif ( is_single() && !is_attachment() ){ 

				
					// Get post type
					$post_type = get_post_type();

					//regular single posts 
					if($post_type == 'post'){ 

						//get base page
			 			$breadcrumb .= rt_get_base_page("blog");

						$this_category = get_the_category();  

						if( isset( $this_category[0] ) ){
							$breadcrumb .= rt_get_category_parents( $this_category[0] );
						}

						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );

					}

					//woo product single posts 
					elseif($post_type == 'product'){ 
			 
			 			//get base page
			 			$breadcrumb .= rt_get_base_page("woo_product");

						//categories of post
						$terms = wp_get_post_terms( $post->ID, "product_cat",  array( 'orderby' => 'parent', 'order' => 'DESC' ) );

						//select only 1st one and create breadcrumb link
						if( isset( $terms[0] ) ){

							$term_link = get_term_link( $terms[0]->slug, $terms[0]->taxonomy );
							$term_name = $terms[0]->name;

							//check term has parents
							if( $terms[0]->parent ){
								$breadcrumb .= rt_get_term_parents( $terms[0]->term_id, $terms[0]->taxonomy );
							}

							//breadcrumb link of the term
							$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> esc_attr( sprintf( esc_html_x( "View all products in %s",'Frontend Text','rt_theme' ), $term_name ) ), "link_name"=> esc_attr( $term_name ), "url" =>  esc_url( $term_link ) ) );

						}
						
						//breadcrumb link of current post
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );

					}

					//product single posts 
					elseif($post_type == 'products'){ 
			 
			 			//get base page
			 			$breadcrumb .= rt_get_base_page("products");

						//categories of post
						$terms = wp_get_post_terms( $post->ID, "product_categories",  array( 'orderby' => 'parent', 'order' => 'DESC' ) );

						//select only 1st one and create breadcrumb link
						if( isset( $terms[0] ) ){

							$term_link = get_term_link( $terms[0]->slug, $terms[0]->taxonomy );
							$term_name = $terms[0]->name;

							//check term has parents
							if( $terms[0]->parent ){
								$breadcrumb .= rt_get_term_parents( $terms[0]->term_id, $terms[0]->taxonomy );
							}

							//breadcrumb link of the term
							$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> esc_attr( sprintf( esc_html_x( "View all products in %s",'Frontend Text','rt_theme' ), $term_name ) ), "link_name"=> esc_attr( $term_name ), "url" =>  esc_url( $term_link ) ) );

						}
						
						//breadcrumb link of current post
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );

					}

					//portfolio single posts 
					elseif($post_type == 'portfolio'){ 
			 
			 			//get base page
			 			$breadcrumb .= rt_get_base_page("portfolio");

						//categories of post
						$terms = wp_get_post_terms( $post->ID, "portfolio_categories",  array( 'orderby' => 'parent', 'order' => 'DESC' ) );

						//select only 1st one and create breadcrumb link
						if( isset( $terms[0] ) ){

							$term_link = get_term_link( $terms[0]->slug, $terms[0]->taxonomy );
							$term_name = $terms[0]->name;

							//check term has parents
							if( $terms[0]->parent ){
								$breadcrumb .= rt_get_term_parents( $terms[0]->term_id, $terms[0]->taxonomy );
							}

							//breadcrumb link of the term
							$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> esc_attr( sprintf( esc_html_x( "View all works in %s",'Frontend Text','rt_theme' ), $term_name ) ), "link_name"=> esc_attr( $term_name ), "url" =>  esc_url( $term_link ) ) );

						}
						
						//breadcrumb link of current post
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );

					}		

					//staff single posts 
					elseif($post_type == 'staff'){ 
			 
			 			//get base page
			 			$breadcrumb .= rt_get_base_page("staff"); 
			 			
						//breadcrumb link of current post
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );

					}		

					//other single custom posts
					else{ 						
						
						//breadcrumb link of current post
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );

					}	

				}

				//Taxonomies
				elseif ( is_tax() ){

						//get base page for woo products
						if( get_query_var( 'taxonomy' ) == "product_cat" || get_query_var( 'taxonomy' ) == "product_tag" ){
						 	$breadcrumb .= rt_get_base_page("woo_product");
						}

						//get base page for products
						if( get_query_var( 'taxonomy' ) == "product_categories" ){
						 	$breadcrumb .= rt_get_base_page("products");
						}

						//get base page for portfolio
						if( get_query_var( 'taxonomy' ) == "portfolio_categories" ){
						 	$breadcrumb .= rt_get_base_page("portfolio");
						}			

						$this_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 

						$breadcrumb .= rt_get_term_parents( $this_term->term_id, $this_term->taxonomy );			 
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> esc_attr( $this_term->name ), "rt_delimiter"=>""  ) );

				}

				//categories
				elseif ( is_category() ){

			 			//get base page
			 			$breadcrumb .= rt_get_base_page("blog");

						$this_category_obj = $wp_query->get_queried_object();
						$this_category = get_category( $this_category_obj->term_id ); 

						if( $this_category->parent ){
							$breadcrumb .= rt_get_category_parents( $this_category->parent );
						}

						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> esc_attr( $this_category->name ), "rt_delimiter"=>""  ) );
			 

				//404
				} elseif ( is_404() ) {

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> esc_html_x( 'Error 404','Frontend Text','rt_theme' ),  "rt_delimiter"=>""  ) );


				//search
				} elseif ( is_search() ) {

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> sprintf( esc_html_x( 'Search results for: %s','Frontend Text','rt_theme' ), get_search_query() ),  "rt_delimiter"=>""  ) );

				//tag
				} elseif ( is_tag() ) {

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> sprintf( esc_html_x( 'Posts tagged: %s','Frontend Text','rt_theme' ), single_tag_title('', false) ),  "rt_delimiter"=>""  ) );

				//author
				} elseif ( is_author() ) {

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> sprintf( esc_html_x( 'Author: %s','Frontend Text','rt_theme' ), get_the_author() ),  "rt_delimiter"=>""  ) );

				//attachment
				} elseif ( is_attachment() ) {


					$this_category = get_the_category();  

					if( $this_category ){
						$breadcrumb .= rt_get_category_parents( $this_category );
					}

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> $post->post_title, "rt_delimiter" => "" ) );
 
				//archive
				}elseif ( is_archive() ) { 

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> rt_get_title(), "rt_delimiter" => "" ) );

				//posts page
				}elseif ( is_home() ) { 

					$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> get_the_title( get_option( 'page_for_posts' ) ), "rt_delimiter" => "" ) );
		
				}else {

					if( ! is_front_page() ){
						$breadcrumb .= rt_create_breadcrumb_item( array( "title"=> wp_title('|',false), "link_name"=> wp_title('|',false), "rt_delimiter"=>""  ) );
					}
				}
				

			//close
			$breadcrumb .= "</ol>"."\n"; 
		}

		$breadcrumb .= $wrap_after;

		$breadcrumb_menu = $breadcrumb;
	 
		//echo breadcrumb
		return $breadcrumb_menu;
	}
}

// page category parents function
if( ! function_exists('rt_get_term_parents') ){
	function rt_get_term_parents( $term_id, $rt_taxonomy) {
	 		
	 		$item = "";
			$the_term = get_term_by( 'id', $term_id , $rt_taxonomy );		 
			$get_ancestors = array_reverse( get_ancestors( $the_term->term_id, $rt_taxonomy ) );
	 
			foreach ( $get_ancestors as $ancestor ) {
				$ancestor = get_term( $ancestor, $rt_taxonomy );
				$link = get_term_link( $ancestor->slug, $rt_taxonomy ) ;
				$name = esc_html( $ancestor->name ) ;
				$item .= rt_create_breadcrumb_item( array( "title"=> esc_attr( $name ), "link_name"=> $name, "url" =>  esc_url( $link ) ) );
			} 

			return $item;
	}
}

// page category parents function
if( ! function_exists('rt_get_category_parents') ){	
	function rt_get_category_parents( $id, $visited = array() ) {
		$chain = '';
		$parent = get_term( $id, 'category' );

		if ( is_wp_error( $parent ) )
			return $parent; 
	 
		$name = $parent->name;

		if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
			$visited[] = $parent->parent;
			$chain .= rt_get_category_parents( $parent->parent, $visited );
		}

		$chain .= rt_create_breadcrumb_item( array( "title"=> esc_attr( sprintf( esc_html_x( "View all posts in %s",'Frontend Text','rt_theme' ), $parent->name ) ), "link_name"=> esc_attr( $parent->name ), "url" =>  esc_url( get_category_link( $parent->term_id ) ) ) );

		return $chain;
	}
}

// page parents function
if( ! function_exists('rt_create_breadcrumb_item') ){	

	function rt_create_breadcrumb_item( $atts = array() ){
		global $rt_delimiter, $rt_item_position;

		//defaults
		extract(shortcode_atts(array(
			"sublink" => "true",
			"url"     => "",
			"title"   => "",
			"link_name"=> "",
			"rt_delimiter" => $rt_delimiter,
			"class" => ""
		), $atts));

		$link_name = ! empty( $link_name ) ? $link_name : $title;

		if ( empty( $link_name ) ){
			return;
		}

		if ( ! isset( $rt_item_position ) || empty( $rt_item_position ) ){
			$rt_item_position = 1;
		}else{
			$rt_item_position++;
		}

		$item = "";

		if( ! empty( $url ) ){
			$item .= '<li property="itemListElement" typeof="ListItem">'."\n";
			$item .= '<a property="item" typeof="WebPage" class="'.$class.'" href="'.$url.'"><span property="name">' . $link_name . '</span></a>'."\n";
			$item .= '<meta property="position" content="'.$rt_item_position.'">' ;
			$item .= '</li>'."\n";
		}else{
			$item .= '<li>'."\n";
			$item .= '<span>' . $link_name . '</span>'."\n";
			$item .= '</li>'."\n";
		}

		$item .= $rt_delimiter; 

		return $item;
	}



}

// page parents function
if( ! function_exists('rt_page_parents') ){	
	function rt_page_parents( $post, $items ){
 

		//parent pages
		if ( $post->post_parent ){		

				//find parent page of this page
				$parent_page = get_page( $post->post_parent );

				//create breadcrum item for this page
				$items = rt_create_breadcrumb_item( array( "url"=> get_permalink( rt_wpml_translated_page_id( $parent_page->ID ) ), "title"=> get_the_title( rt_wpml_translated_page_id( $parent_page->ID ) ) ) ) . $items;

				//find parent page of the parent page			
				return rt_page_parents( $parent_page, $items );

		}else{
			return $items; 
		}
		
	}
}

//get base page
if( ! function_exists('rt_get_base_page') ){	
	function rt_get_base_page( $for = "" ){

		global $rt_global_variables;

		$page = "";

		if( $for == "woo_product" && $rt_global_variables['rt_shopstartpage'] ){ 

			$page = rt_create_breadcrumb_item( array( "url"=> get_permalink( rt_wpml_translated_page_id( $rt_global_variables['rt_shopstartpage'] ) ), "title"=> get_the_title( rt_wpml_translated_page_id( $rt_global_variables['rt_shopstartpage'] ) ) ) ) ;

		}elseif( $for == "products" && $rt_global_variables['rt_productpage'] ){ 

			$page = rt_create_breadcrumb_item( array( "url"=> get_permalink( rt_wpml_translated_page_id( $rt_global_variables['rt_productpage'] ) ), "title"=> get_the_title( rt_wpml_translated_page_id( $rt_global_variables['rt_productpage'] ) ) ) ) ;

		}elseif( $for == "portfolio" && $rt_global_variables['rt_portfoliopage'] ){ 
			
			$page = rt_create_breadcrumb_item( array( "url"=> get_permalink( rt_wpml_translated_page_id( $rt_global_variables['rt_portfoliopage'] ) ), "title"=> get_the_title( rt_wpml_translated_page_id( $rt_global_variables['rt_portfoliopage'] ) ) ) ) ;

		}elseif( $for == "blog" && $rt_global_variables['rt_blogpage'] ){ 

			$page = rt_create_breadcrumb_item( array( "url"=> get_permalink( rt_wpml_translated_page_id( $rt_global_variables['rt_blogpage'] ) ), "title"=> get_the_title( rt_wpml_translated_page_id( $rt_global_variables['rt_blogpage'] ) ) ) ) ;

		}elseif( $for == "staff" && $rt_global_variables['rt_staffpage']){ 

			$page = rt_create_breadcrumb_item( array( "url"=> get_permalink( rt_wpml_translated_page_id( $rt_global_variables['rt_staffpage'] ) ), "title"=> get_the_title( rt_wpml_translated_page_id( $rt_global_variables['rt_staffpage'] ) ) ) ) ;			

		}

		return $page;
	}
}
?>