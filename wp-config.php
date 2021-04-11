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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0GeBnJt.AL;hq-+.Sjl2$#sH@.oOHBm33IXDN_E4Cust%QL}%izx1wg]l#3#h!(&' );
define( 'SECURE_AUTH_KEY',  '}Oj=5+5{xba{K+!Ey+j!6MJvl2.ocw4Zq%MrqofCf~<]fFvf]I$o1)b9AIZR.]zU' );
define( 'LOGGED_IN_KEY',    '%u4i5ooz6V!V/5St:4;9ER`Lnv,_zGiaV[}66J8EMd0,kZmo/96C;0*^Gj},#Moy' );
define( 'NONCE_KEY',        '[#[UMR|la`l.@:H.0T<a4uySvt)J|4I^4biJ_#6H.P4/nj5yxN=#`<Yop(/fX.h|' );
define( 'AUTH_SALT',        'R/76CBw_i[3(2>rWp3$R5{c-8Efeco4;[$$=~>ij23XxzmXdP9@Q~DR+-2$;gPP4' );
define( 'SECURE_AUTH_SALT', ')E[h/Bu><|k/RTcS]{0*iHf>Yrt9?Dyr!Of5f#>Jq5OL{Vb^0#CY4X8,~~HFv8^q' );
define( 'LOGGED_IN_SALT',   'YqjlA-|7VE`IgSb=j7<]7(XG^(d5nQ18W?R}_0,&EL}5o4cB,3g+uK=c$8dfGBjy' );
define( 'NONCE_SALT',       '/&88j@eD7/,o(WVsem<_.B4TnA0wG%NB$Y6qA$/fz-|bT$MhHhtb$1%j4yH|jj#.' );

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
