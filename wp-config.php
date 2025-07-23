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
define( 'DB_NAME', 'wp_smithsons' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Th4if00d' );

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
define( 'AUTH_KEY',         '/NL(VQ3SOz (=u[^{9AhlA%XpnbTH=U@$g7Sh)qMW4U0?^)AGhzmD5x}02y4L3yd' );
define( 'SECURE_AUTH_KEY',  '$ga`[]7$=ZwtTfd X.iSeAlCdsQWM</[ksm4EXQF)nCn;oA]@R%>-BAJgsL8$Ys1' );
define( 'LOGGED_IN_KEY',    '=fQ>jVIS`T15!6Dc>q5.D>83+qUSKj[r`:1.DI13]pyo$ry+XvSDiCush4CkG6_d' );
define( 'NONCE_KEY',        '[+Y0b^V#Ih1Izdi~DJy/kc>Y[AJn&fk$ot<GqL~x8v%%On*=05Ub3wf2}v%q;lW2' );
define( 'AUTH_SALT',        'wb4yvDq8qdQ_^#&S]&;(`5b*@1`*(b]N3H82<|LKd n-oW:f%|xEeb,!r`rRMiKE' );
define( 'SECURE_AUTH_SALT', 'Rh 5:/x8<Mc;1]NOWHv$f30g^%m*O&E>>*6g`78kS$u,+#[B/ci%3oHGrS[sc,.c' );
define( 'LOGGED_IN_SALT',   'S/W*;Fu Xen3}Ag_AfQ~L9M+M`YE;|;s<VqIyp^YL;^_#8kUgAWx<le| @tbDQ5Q' );
define( 'NONCE_SALT',       'f>@wp@Q pzGIBVL6%YrBmuINg ?l5|Kiwmgv;d7MKZfc88t:<Xnndy[}f~I(OHrI' );

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
