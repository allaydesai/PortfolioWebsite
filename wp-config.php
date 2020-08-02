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
define( 'DB_NAME', 'my_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '62`?!~jqO?FNNx0KLML|[{U890U`Jmt>w)aVfv7[Xo_<[>aVww#f1l`w)f%lp28~' );
define( 'SECURE_AUTH_KEY',  '*,];>TysXk:WHyE1UO)p)7%!~EnQ`{>.k@<A`gXs:x2FFyy$y>DymgBo|v~1f?)6' );
define( 'LOGGED_IN_KEY',    'u0h[)n<xS:S!l} fa(:vaZ~yOV_DHD6~5QRj+lh=WzS#1j*@W7b1Jki-RUCBf}^U' );
define( 'NONCE_KEY',        'rsQeLCD`%w3k?QsX^o/rw8$j{7,v?x|jA:wLb~,nB#}{o8qju[e)I+aiV:2<qjho' );
define( 'AUTH_SALT',        'Qo&}cdr)2+J.1H1|#7%N9sk:bCL N@R?iY*d084PimP7!,U/Z`:lE1hB 4f)[37/' );
define( 'SECURE_AUTH_SALT', '_YkNIu40rOcY@/-so5[(j;taC`Aq+9<$@6KiOd9m9iNy83(y6H9,^9q0qFht2JSq' );
define( 'LOGGED_IN_SALT',   '44>D)H$z(K}I*Eh6 ^Y-{e$un&:~?EIVis-@Bl}!I0uS%%d$R){s^hes)V#Zs.Wk' );
define( 'NONCE_SALT',       'I_t^[,G9FjA&{SL6^!z}}X<`G;Ufk~@>TgIia>^Wv6)pe:O~R`c/`-N=0Ce,^Z/3' );

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
