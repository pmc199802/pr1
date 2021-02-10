<?php
#-----------------------------------------
#	RT-Theme loading.php
#	version: 1.0
#-----------------------------------------

#
# 	Load the theme
#

class RTTheme{
 
	//Available Social Media Icons
	public $rt_social_media_icons=array(  
			"RSS"             => "rss", 
			"Email"           => "mail", 
			"Twitter"         => "twitter", 
			"Facebook"        => "facebook", 
			"Flickr"          => "flickr", 
			"Google +"        => "gplus", 
			"Pinterest"       => "pinterest", 
			"Tumblr"          => "tumblr", 
			"Linkedin"        => "linkedin", 
			"Dribbble"        => "dribbble", 
			"Skype"           => "skype", 
			"Behance"         => "behance", 
			"Github"          => "github", 
			"Vimeo"           => "vimeo", 
			"StumbleUpon"     => "stumbleupon", 
			"Lastfm"          => "lastfm", 
			"Spotify"         => "spotify", 
			"Instagram"       => "instagram", 
			"Dropbox"         => "dropbox", 
			"Evernote"        => "evernote", 
			"Flattr"          => "flattr", 
			"Paypal"          => "paypal", 
			"Picasa"          => "picasa", 
			"Vkontakte"       => "vkontakte", 
			"YouTube"         => "youtube-play", 
			"SoundCloud"      => "soundcloud",
			"Foursquare"      => "foursquare",
			"Delicious"       => "delicious",
			"Forrst"          => "forrst",
			"eBay"            => "ebay",
			"Android"         => "android", 
			"Xing"            => "xing",
			"Reddit"          => "reddit",
			"Digg"            => "digg",
			"Apple App Store" => "macstore",
			"MySpace"         => "myspace",
			"Stack Overflow"  => "stackoverflow",
			"Slide Share"     => "slideshare",
			"Weibo"           => "sina-weibo",
			"Odnoklassniki"   => "odnoklassniki",
			"Telegram"        => "telegram",
			"WhatsApp"        => "whatsapp"			
	);
				
 
	#
	# Start
	#    
	function start($v){

		global $rt_social_media_icons;
		$rt_social_media_icons 	= apply_filters("rt_social_media_list", $this->rt_social_media_icons ); 
 
		//global constants
		add_action('registered_taxonomy', array(&$this,'global_constants'));

		// Load text domain
		if( ! is_admin() ){	
			load_theme_textdomain('rt_theme', get_template_directory().'/languages' );
		}

		//Call Theme Constants
		$this->theme_constants($v);	  

		//Load Classes
		$this->load_classes($v);
		
		//Load Functions
		$this->load_functions($v);

		//Create Menus 
		add_action('init', array(&$this,'rt_create_menus'));
				
		//Theme Supports
		$this->theme_supports();


		//check woocommerce
		if ( class_exists( 'Woocommerce' ) ) {
			include(RT_THEMEFRAMEWORKDIR . "/functions/woo-integration.php");
		}
	}
 

	#
	#	Global Constants
	#
	function global_constants($v) {
		if( ! defined( 'RT_FRAMEWOK' ) ) define('RT_FRAMEWOK', TRUE);		
	}   
		
	#
	#	Theme Constants
	#
	
	function theme_constants($v) {
		if( ! defined( 'RT_THEMENAME' ) ) define('RT_THEMENAME', $v['theme']);
		if( ! defined( 'RT_THEMESLUG' ) ) define('RT_THEMESLUG', $v['slug']); // a unique slugname for this theme
		if( ! defined( 'RT_COMMON_THEMESLUG' ) ) define('RT_COMMON_THEMESLUG', "rttheme"); // a common slugnam for all rt-themes
		if( ! defined( 'RT_THEMEVERSION' ) ) define('RT_THEMEVERSION', $v['version']); 
		if( ! defined( 'RT_THEMEDIR' ) ) define('RT_THEMEDIR', get_template_directory());
		if( ! defined( 'RT_THEMEURI' ) ) define('RT_THEMEURI', get_template_directory_uri());
		if( ! defined( 'RT_FRAMEWORKSLUG' ) ) define('RT_FRAMEWORKSLUG', 'rt-framework'); 
		if( ! defined( 'RT_THEMEFRAMEWORKDIR' ) ) define('RT_THEMEFRAMEWORKDIR', get_template_directory().'/rt-framework'); 
		if( ! defined( 'RT_THEMEADMINDIR' ) ) define('RT_THEMEADMINDIR', get_template_directory().'/rt-framework/admin');
		if( ! defined( 'RT_THEMEADMINURI' ) ) define('RT_THEMEADMINURI', get_template_directory_uri().'/rt-framework/admin');
		if( ! defined( 'RT_WPADMINURI' ) ) define('RT_WPADMINURI', get_admin_url());
		if( ! defined( 'RT_THEMESTYLE' ) ) define('RT_THEMESTYLE', get_option(RT_THEMESLUG."_style")); 
		if( ! defined( 'RT_EXTENSIONS_PLUGIN' ) ) define('RT_EXTENSIONS_PLUGIN', "RT19_Extensions"); //CLASS NAME
		if( ! defined( 'RT_EXTENSIONS_PLUGIN_NAME' ) ) define('RT_EXTENSIONS_PLUGIN_NAME', "RT-Theme 19 | Extensions Plugin");

		

		// Constants for notifier
		if( ! defined( 'RT_NOTIFIER_THEME_FOLDER_NAME' ) ) define('RT_NOTIFIER_THEME_FOLDER_NAME', 'rttheme19' );  
		if( ! defined( 'RT_NOTIFIER_XML_FILE' ) ) define('RT_NOTIFIER_XML_FILE', 'http://templatemints.com/theme_updates/rttheme19/notifier.xml' ); 
		if( ! defined( 'RT_NOTIFIER_CACHE_INTERVAL' ) ) define('RT_NOTIFIER_CACHE_INTERVAL', 21600 );
		
		//unique theme name for default settings
		if( ! defined( 'RT_UTHEME_NAME' ) ) define('RT_UTHEME_NAME', "RTTHEME19");

		if( ! defined( 'RT_BLOGURL' ) ) define('RT_BLOGURL', apply_filters( 'wpml_home_url', home_url() ) ); 

	}    
	
	#
	#	Load Functions
	#
	
	function load_functions($v) {
		include(RT_THEMEFRAMEWORKDIR . "/functions/common_functions.php");		
		include(RT_THEMEFRAMEWORKDIR . "/functions/rt_comments.php");		
		include(RT_THEMEFRAMEWORKDIR . "/functions/theme_functions.php");
		include(RT_THEMEFRAMEWORKDIR . "/functions/rt_breadcrumb.php");
		include(RT_THEMEFRAMEWORKDIR . "/functions/wpml_functions.php");
		include(RT_THEMEFRAMEWORKDIR . "/functions/custom_styling.php");
		include(RT_THEMEFRAMEWORKDIR . "/functions/rt_resize.php");		
	}

	#
	#	Load Classes
	#
	
	function load_classes($v) {
		global $rt_sidebars_class, $wp_customize;

		//Backend only jobs
		if(is_admin()){		
			require_once (RT_THEMEFRAMEWORKDIR.'/classes/admin.php'); 
			$RTadmin = new RTThemeAdmin();
			$RTadmin->admin_init(); 
 
			//activate plugins
			include(RT_THEMEFRAMEWORKDIR . "/plugins/class-tgm-plugin-activation.php");	 
			add_action( 'tgmpa_register', array(&$this,'activate_plugins'));		
		}

		//Customize Panel
		if( is_admin() || $wp_customize ){			
			include(RT_THEMEFRAMEWORKDIR . "/classes/rt_customize_panel.php");  	 	
		}

		//Create Sidebars
		include(RT_THEMEFRAMEWORKDIR . "/classes/sidebar.php");  
		$rt_sidebars_class = new RTThemeSidebar(); 

		//is login or register page		
		$is_login = in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ));

		//Frontend only jobs
		if(!is_admin() && !$is_login){
			require_once (RT_THEMEFRAMEWORKDIR.'/classes/theme.php'); 
			$RTThemeSite = new RTThemeSite();
			$RTThemeSite -> theme_init();
		} 
	
		//Navigation Walker
		include(RT_THEMEFRAMEWORKDIR . "/classes/navigation_walker.php");		
	
		//Common Classes
		include(RT_THEMEFRAMEWORKDIR . "/classes/common_classes.php");   
		
	}    	 

	#
	#	Create WP Menus
	#

	function rt_create_menus() {
		global $wp_customize;

		$layout = get_theme_mod(RT_THEMESLUG.'_layout');
		$layout = empty( $layout ) ? "layout1" : $layout;

		register_nav_menu( 'rt-theme-main-navigation', esc_html__('Main Navigation','rt_theme') ); 
		register_nav_menu( 'rt-theme-footer-navigation', esc_html__('Footer Navigation','rt_theme') );  

		wp_create_nav_menu( esc_html__('Main Navigation','rt_theme'), array( 'slug' => 'rt-theme-main-navigation') );
		wp_create_nav_menu( esc_html__('Footer Navigation','rt_theme'), array( 'slug' => 'rt-theme-footer-navigation') );

		if( $layout != "layout1" || $layout != "layout2" && ! isset( $wp_customize ) ){
			register_nav_menu( 'rt-theme-mobile-navigation', esc_html__('Mobile Navigation','rt_theme') );
			register_nav_menu( 'rt-theme-side-navigation', esc_html__('Side Panel Navigation','rt_theme') ); 
			wp_create_nav_menu( esc_html__('Side Panel Navigation','rt_theme'), array( 'slug' => 'rt-theme-side-navigation') );
		}
		
		if( $layout == "layout4" || isset( $wp_customize) ){
			register_nav_menu( 'rt-theme-second-main-navigation', esc_html__('Second Main Navigation','rt_theme') ); 
			wp_create_nav_menu( esc_html__('Second Main Navigation','rt_theme'), array( 'slug' => 'rt-theme-second-main-navigation') );
		}		
	}

	#
	#	Theme Supports
	#
	 
	function theme_supports(){
 
		//Automatic Feed Links
		add_theme_support( 'automatic-feed-links' );
		
		//Let WordPress manage the document title.
		add_theme_support( 'title-tag' );		
		
		//post thumbnails
		add_theme_support( 'post-thumbnails' ); 

		//Supported Post Formats         
		global $wp_version;
		if (version_compare($wp_version,"3.5.1","<")){
			add_filter( 'enable_post_format_ui', '__return_false' );
		}
				
		//woocommerce support
		add_theme_support( 'woocommerce' );

		//gutenberg
		add_theme_support(
			'gutenberg',
			array( 'wide-images' => true )
		);				

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );		
	}	


	#
	#	Get Pages as array
	#

	public static function rt_get_pages(){
		  
		// Pages		
		$pages = query_posts('posts_per_page=-1&post_type=page&orderby=title&order=ASC');
		$rt_getpages = array();
		
		if(is_array($pages)){
			foreach ($pages as $page_list ) {
				$rt_getpages[$page_list->ID] = $page_list ->post_title;
			}
		}
		
		wp_reset_query();
		return $rt_getpages;
		
	}


	#
	#	Get Blog Categories - only post categories
	#

	public static function rt_get_categories(){

		if( ! taxonomy_exists("category") ){
			return array();
		}

		// Categories
		$args = array(
			'type'                     => 'post',
			'child_of'                 => 0, 
			'orderby'                  => 'name',
			'order'                    => 'ASC',
			'hide_empty'               => 1,
			'hierarchical'             => 1,  
			'taxonomy'                 => 'category',
			'pad_counts'               => false
			);
		
		
		$categories = get_categories($args);
		$rt_getcat = array();
		
		if(is_array($categories)){
			foreach ($categories as $category_list ) {
				$rt_getcat[$category_list->cat_ID] = $category_list->cat_name;
			}
		}
	
		return $rt_getcat;
	}	


	#
	#	Include plugins
	#
	
	function activate_plugins() { 
 
		//activate revslider 
				$plugins = array(

					array(
						'name'                  => 'RT-Theme 19 | Extensions Plugin', // The plugin name
						'slug'                  => 'rt19-extentions', // The plugin slug (typically the folder name)
						'source'                => RT_THEMEFRAMEWORKDIR . '/plugins/packages/rt19-extentions.zip', // The plugin source
						'required'              => true, // If false, the plugin is only 'recommended' instead of required
						'version'               => '2.9.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
						'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
						'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
						'external_url'          => '', // If set, overrides default API URL and points to an external URL
					), 

					array(
						'name'                  => 'Visual Composer', // The plugin name
						'slug'                  => 'js_composer', // The plugin slug (typically the folder name)
						'source'                => RT_THEMEFRAMEWORKDIR . '/plugins/packages/js_composer.zip', // The plugin source
						'required'              => true, // If false, the plugin is only 'recommended' instead of required
						'version'               => '6.5.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
						'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
						'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
						'external_url'          => '', // If set, overrides default API URL and points to an external URL
					), 

					array(
						'name'                  => 'Slider Revolution', // The plugin name
						'slug'                  => 'revslider', // The plugin slug (typically the folder name)
						'source'                => RT_THEMEFRAMEWORKDIR . '/plugins/packages/revslider.zip', // The plugin source
						'required'              => false, // If false, the plugin is only 'recommended' instead of required
						'version'               => '6.3.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
						'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
						'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
						'external_url'          => '', // If set, overrides default API URL and points to an external URL
					), 
			 
				);
			 
				// Change this to your theme text domain, used for internationalising strings
				$theme_text_domain = 'rt_theme';
			 
				/**
				 * Array of configuration settings. Amend each line as needed.
				 * If you want the default strings to be available under your own theme domain,
				 * leave the strings uncommented.
				 * Some of the strings are added into a sprintf, so see the comments at the
				 * end of each line for what each argument will be.
				 */

				$config = array(
					'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
					'default_path' => '',                      // Default absolute path to bundled plugins.
					'menu'         => 'tgmpa-install-plugins', // Menu slug.
					'parent_slug'  => 'themes.php',            // Parent menu slug.
					'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
					'has_notices'  => true,                    // Show admin notices or not.
					'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
					'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
					'is_automatic' => false,                   // Automatically activate plugins after installation or not.
					'message'      => '',                      // Message to output right before the plugins table.
					'strings'           => array(
						'page_title'                                => esc_html__( 'Install Required Plugins', 'rt_theme' ),
						'menu_title'                                => esc_html__( 'Install Plugins', 'rt_theme' ),
						'installing'                                => esc_html__( 'Installing Plugin: %s', 'rt_theme' ), // %1$s = plugin name
						'oops'                                      => esc_html__( 'Something went wrong with the plugin API.', 'rt_theme' ),
						'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.  <br /> Please check <a href="http://docs.rtthemes.com/rt-theme-19-documentation/">Online Documentation</a> / Bundled Plugins section to learn how to do it.', 'rt_theme' ), // %1$s = plugin name(s)
						'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'rt_theme' ), // %1$s = plugin name(s)
						'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'rt_theme' ),
						'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'rt_theme' ),
						'return'                                    => esc_html__( 'Return to Required Plugins Installer', 'rt_theme' ),
						'plugin_activated'                          => esc_html__( 'Plugin activated successfully.', 'rt_theme' ),
						'complete'                                  => esc_html__( 'All plugins installed and activated successfully. %s', 'rt_theme' ) // %1$s = dashboard link
					)
				);
			 
				tgmpa( $plugins, $config );
	}

 
}


?>