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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'gv|O<R?B-/|p>#ikx128B]x[6$1LaB0<O/@.Y-+^@]0L1MWuI=DPu:&3UY_i7dcB' );
define( 'SECURE_AUTH_KEY',  '<vB_co4SdT6G&!9Qa7lrFwC+({6|iF:d|lt6f8bbZ5>6/lz^hc^[3C;~6rH9uS_c' );
define( 'LOGGED_IN_KEY',    'M<n=D8s?2tLn}7_.A8|eZ^E57EH1f.>`dt)QY~BA0G>hl<18A{G^66UY4!t>AK*p' );
define( 'NONCE_KEY',        '0Z`UCRf#B#A_WBT(s4|9|IW[@,|B!yc3@;HF)#dhRmb2d:Y3KR3Q$},1t^Yeiy&[' );
define( 'AUTH_SALT',        'gz:&L Z<c ps{KvibiygqjE 1Rw]PvsobZ/I;uQxD8i+uq1I#MrzeX,jrj#tJvT*' );
define( 'SECURE_AUTH_SALT', '~exkiAjb*v?8?zx{oH<ic}n!s7)Y+-VtIrU1BB4 IB, P8u0hv[Y{A)^wez|ug}Z' );
define( 'LOGGED_IN_SALT',   'hR@h#J04+pg|yFE5K[4t|(.knfqIC}4AJ!6Z|sxPmDI;n1yIW|62h`8ZHA!nu}C]' );
define( 'NONCE_SALT',       '~)<28GhsxhU%uT3`[=teHA(pDieX_5^PH^B&+=mBv?/]g pXIV>UN(*blKbsReb[' );

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
