<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pr1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '){!.b$=MA*5]+&XvQB>r0NDF:iqx(fX9s[YjEDr}=bmR_VD^74BAL0Zyb~+`Wr%$' );
define( 'SECURE_AUTH_KEY',  'S|nH5qC>jkFpX_>$^naZ>%-zz&Bts|UxMigM?7(HPlEJ#x6z|Su=pD8_ew!k9MST' );
define( 'LOGGED_IN_KEY',    ':xF/@DBt@>=9*ft=<uv)a+D4b]|e3r(;b2F~}8RbwKScU0zMe!fIk)3wMS;f~aJ>' );
define( 'NONCE_KEY',        'RdQR5><#^~jrhrPnm>_|kM#+%5GM6g`?^&>aRw}2&J{Nmwc&/M}VY`*6n]}>p`NS' );
define( 'AUTH_SALT',        '^Q_]ZR]MK>I.Q*(&eH`0{e(:)78VQsB%%OOHs6$H@jVy0eA|Sa+6R(S@(s`Ju>2v' );
define( 'SECURE_AUTH_SALT', '6ac5/%Z,KTR}YQ$yvHxiZ@YC2W$cDCaK9+w`,GFPzA*[zD0(HEy~I|zRtFx6gxD=' );
define( 'LOGGED_IN_SALT',   'xFqRpC;sh:i2HmsEQTs8L:5tH:*(W|d )3w/H/(~L,] :XN}==QQA|_bykmk4WVc' );
define( 'NONCE_SALT',       ')0<OvEf>^]n7zJG4DsfZ:&m4O|LV5NW{``NeL;&F3Mw}5lL2G|78Vge!_8B @s:a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
