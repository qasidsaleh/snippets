<?php

define( 'WP_HOME', 'http://192.168.60.122/snippets/' );
define( 'WP_SITEURL', 'http://192.168.60.122/snippets/' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'snippets' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0)npwVbKYsjYDa50?y4(0}jhe}<hjn.%(Igd(YwvwW-dPX1c_4d9T8:T65Rj.iH.' );
define( 'SECURE_AUTH_KEY',  'lJT(:}YoHW+SM2kEg@7LBTg:]w,}<h&uwk_V!!kMM[Q}zm34Xig|E&<^;6HFZ*W7' );
define( 'LOGGED_IN_KEY',    'n{m?u<=;0C0|Pg1P7il0y1B*4CngpRSfQnoR]|~:/KG]..e[#{_q YQ}K@|B@89,' );
define( 'NONCE_KEY',        '2Rtag(2}WA,YY]4a6/va|6[CoEr[0X[*;h58k|/t8eyjta$o+CmY_>p@cjl5[V5>' );
define( 'AUTH_SALT',        'g|$8k>q6cPg~meBl868?{6q.Uh]ct%sM(1+BFW+tgA8{@9Fz*:{|32}L8/9yXI[I' );
define( 'SECURE_AUTH_SALT', '%U7YMZuF_{BCzW&AY/:(oM_)D@Y_i/):ZNyl?Aj~!?1%UJ.`)u5Q.%q2YUka`o#G' );
define( 'LOGGED_IN_SALT',   '2W5vRO2d-lMe{(Li2^b0v5{/`}i!;u4<?cd2k~[q/WbG{OK$9.n?$=GJUq)N*7VG' );
define( 'NONCE_SALT',       'o&f5K*$cJ#A+C4UTag3hM:tpDkXmq-)#RGmwNOGp{=nA|H1Mbkk9=|N4k{#*bB! ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sn_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
