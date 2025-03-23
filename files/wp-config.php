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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '(Sw@#pc%ZxcuBxN5mw.(;m2^hDZsc,(ILk-&B%Ok)=}%;napni:ZHjckBkE1]u5 ' );
define( 'SECURE_AUTH_KEY',  '3JN*)FG4a[D{D(9NHfj8en2$#t02+*?k%{$rufI9+RU+H!hI)vg[5HaPhWGV_o{5' );
define( 'LOGGED_IN_KEY',    'KDEq*hw,ww-|FzE!adkxq;~<JgK@<MhIZNhCWD`)%#` q-HH_9[!6.9+F+Q)C}`w' );
define( 'NONCE_KEY',        'eN/QeM[ aEOS.yok= (&SmsQy.-r-RwyxG1d>e<LQQth``SdJ/6M%4.OvnWb)x{6' );
define( 'AUTH_SALT',        'xoho f(PV+*7])/Hu|:{7u<h F)$<+5:?nk:AQX,B^#(=C X:QvTsq(PsK;i:4r|' );
define( 'SECURE_AUTH_SALT', 'v)86HgQ?UZ[,-V^>5jzaA y*%@(58u{?15J~Bk/O0RHe7eED=3;F:!q?d;>DUw{:' );
define( 'LOGGED_IN_SALT',   '|<eXYHe.7u~NANctJ-`1 M3v)9+5CUA37)C,]k$R.06 38?VgoI:34%$n)S9~-VY' );
define( 'NONCE_SALT',       '8~y`(-^_&g}_Uu1w)@+;U3Cx-+g& BH[.t02<y$h^x#Ey+0W~$&]/+(TM!QPg&+h' );

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
