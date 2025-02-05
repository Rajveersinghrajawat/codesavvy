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
define( 'DB_NAME', 'u518446178_blog' );

/** Database username */
define( 'DB_USER', 'u518446178_blog' );

/** Database password */
define( 'DB_PASSWORD', '|ry;q3vM' );

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
define( 'AUTH_KEY',         '|U<r{nzlR}%fu~tbYrAT${hO9NglT2[i]Z]M#.07M%D`QP^uvGA<pBCqw:E6qv|S' );
define( 'SECURE_AUTH_KEY',  '%S4##!)e3$@?{[8u%-THM>3lkyYzw;n:oq`h10Cx*5%xP0C&Ihcc$)gh~fXB7?]3' );
define( 'LOGGED_IN_KEY',    'ASe@~M`LN+O~ok74VACve.>#!_6u*~M3`$mL{iq[_J1!=ix]bR4a.H<>Pd#?ZWYe' );
define( 'NONCE_KEY',        'e-rqC{Y!v5gA{L$lv3^}cRe]NA*y_ i3&byaSb=Cv#Ul5@_hR]ol,-fTmy.pltI~' );
define( 'AUTH_SALT',        'H;~@:-1yh$v:rv9sq}+#u@Kw5KD1]8^z6vq!=~[iZjePu]]k T)7cHjxVKbwgDPX' );
define( 'SECURE_AUTH_SALT', '=AFfZ4Zwv=e(6R2TguSHbf]o#`mh|$Z}GuG(H#cchQz)$lf(_~!:0#xP#Vf1c0!L' );
define( 'LOGGED_IN_SALT',   'ELgi%l=+Pg{<>oVAx~dm.kK;u;([GMF3^Q}opjUQepPQ65O5y/[yd<ym/|t]JG=o' );
define( 'NONCE_SALT',       'Yw}0EA0oQI^KH&zJ@cB4T_SA9@Y`wOaJXc^?0k&vp%6kg=BntK0:CupA$07JC#RQ' );

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
