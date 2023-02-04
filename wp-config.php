<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'it_idol_new' );

/** Database username */
define( 'DB_USER', 'itidol_live' );

/** Database password */
define( 'DB_PASSWORD', '#cySPZb)%9YV' );

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
define( 'AUTH_KEY',         '.h<=rfn;uXg6#`V,UR0PKu[(@_jG}<,6eW]X5%Pddf19i]5T5y2~C9(6!a)a~~ G' );
define( 'SECURE_AUTH_KEY',  'bp{G9h#@(@l1ILr+JBNniq<:,ru[yV@G`06`~24@[uF4S>4illb7@^OeI[^E$Kce' );
define( 'LOGGED_IN_KEY',    '.pLbZ9tl,C{02=si+~aR6[9^e:~,b34R5n*.BTr|+;9l?rQmTH8$#8uBUFN)DH>I' );
define( 'NONCE_KEY',        '|YlD`,_oWT9%pfpF|Quwlq=yngd}@0eUW![YYAjN|Q?|^nIT@_;urokfA>,cm:[=' );
define( 'AUTH_SALT',        '!y<J*AWE7M>FEGq!j9J:A6vA44Z$?j|I}!v_P`)()(5<-{!B;;WDJTt)1%Yt-GCE' );
define( 'SECURE_AUTH_SALT', 'AL0UIX^0yw=rIKo%]z,DE~z[<H~KlHid;;OL?3`zy=<3K*sfPu_@YQVjSQS=(E}/' );
define( 'LOGGED_IN_SALT',   '7Ia?F$wd@6_05gSD@/Z1Q{0G`KpY v*-6,XPnxL=G{e29+<r4x$S!]eZY^`#y?3C' );
define( 'NONCE_SALT',       '<y:wD!%(-SXCULZ]stBLnzgIoO7]?`,Z6+cq@JN!]HSYQw>(jtY!,!k),FW4Xl7x' );

/**#@-*/

/**
 * WordPress database table prefix.
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
//define( 'WP_DEBUG', true );
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
