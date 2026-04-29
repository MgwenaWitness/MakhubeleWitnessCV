<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MakhubeleWitnessCV' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{z{uuwt}iHIzVd:&4w/`8L T65~fy&p|!CjZfe8B$WVA* NSxXNs-)5P:sEc;a.A' );
define( 'SECURE_AUTH_KEY',  's5ib:Lz</z4GqxEn3B?,E628MH[h<n>VLDvy{d7GeLr@$>rvURqBXQ.J#<Y@u+q(' );
define( 'LOGGED_IN_KEY',    '~HdRj^/&:<5R!kU#XZ>Lh*lZE]^Ff]-?INU}<E^6}4jaSW({<ZG-%f<%rVIO{Iw1' );
define( 'NONCE_KEY',        '=&$UN%bw4 8s&iB4d_Ea7rvF-_=lJPEPOO~A2FBMIvzNK3hrV!0{#RQjg`9;417Q' );
define( 'AUTH_SALT',        'to,$H@pqgw.{~;Zg0sQx|WQ`uj3l#{4?GssMu~Rphy+;W[nf9]JqBKve#3:--.TN' );
define( 'SECURE_AUTH_SALT', 'kyDtud3x$N7qdCk])}[YzEaQMD;i{dx<ax3-!7,oD|CP[8>_ y-~hp@:h/jx*2TP' );
define( 'LOGGED_IN_SALT',   '<gTyL*.{Z{PJh&>#gZ3/tld6)fd?e:k<f%Yi2re?2N,Hx$[mWtHZWZ>y.A-Q|{8T' );
define( 'NONCE_SALT',       '+-,#Q:yGHIoe+7D^m:>gRui2E-JH]T;Z9y:M*>qwz.:%P{,2t2qhnb^K?6rYs|EW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('UPLOADS', 'wp-content/uploads');
set_time_limit(0);