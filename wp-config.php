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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cacatsupport' );

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
define( 'AUTH_KEY',         '-s9vnZ/Hz=EfQ$=vJ5Sj2|e,!h:wY[?lzl1x`[<aBGkRXS@7k2j>7#}RRl:4F<tA' );
define( 'SECURE_AUTH_KEY',  '`weHf/j6MG1nK69_;=5eDy,$Ms>EXXHH K@_4p_<GI9@-c|]H$Nd&c4-n`<93)yU' );
define( 'LOGGED_IN_KEY',    'rWq#K)1d1^g; K?E1{hDWAAx<?D=Ut2~0TzI)lW&R/]- GUfLiXgl4bN8j!W%sd_' );
define( 'NONCE_KEY',        'm2vXm]!_^2O$N){ A??A.43ky+<K1_kNV-MPNlI(kL5K]ZHey`;h~;qG-*q|9lZH' );
define( 'AUTH_SALT',        '?aQ_[H22qvy@F^jv@(wM8gARzUYMyb$Pk0b8^Q_i{v^_n*|bqGN(:637Q??Nqew7' );
define( 'SECURE_AUTH_SALT', 'A&PG$H4j|X<-97X,U/j*Sh~vJ&zpj@f(u(@.-PYd9on&H$hcutt7@`V*R:sQTW*J' );
define( 'LOGGED_IN_SALT',   '89W~[3@cH4V?]=Ws10^IFO$i#O>W#dusytZ|nQB3 kNS990I4,m+lZzY~oldY| q' );
define( 'NONCE_SALT',       '-2:,nR68/[(OvfBAE[Qsm8ce}#k&iTzLPn)Kjn!rGp,y[0g^oFTET(ABJu},Hb+H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cacat_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
