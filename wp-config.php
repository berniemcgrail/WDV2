<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WDV2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6=pWTa3C:SzafF}l,RvlWd Js-(Q]RJDDA2EWW%`DZ)}n:5LKpSYUZ2C9_pMN*)}');
define('SECURE_AUTH_KEY',  'Mt`[BegGa2J7sF=?;C53A`9z4%;w&~id[@kfc]qgP+tA|JU9yy0f3K-*v|Lr-Cw)');
define('LOGGED_IN_KEY',    '9oo+:(f6?*q8q@Qc|{U2iw;eI?3csi4b6kF?;9O_/E_@ /DZ;]3bf&xpqWOiA[2H');
define('NONCE_KEY',        'Y34Z#9utv[~] :^4as+,bVrA[/[VPoV{bM#``^i8PZRdmL8Z-uVu8[3B+Qfcoh0R');
define('AUTH_SALT',        'Iah$QK38ON#|-$`iw&+s2>SsU!{p*4riKJ_d+5O@_@)O>Zkb00Ek[<t&Q3JNX66I');
define('SECURE_AUTH_SALT', '|G`Xc{f0T*w>,^ACi71:AOaY+tXZ.u)A#EH*%a7V+y-%1xSZ=.t:Yuca.x$PYqfU');
define('LOGGED_IN_SALT',   'XMHMm1-?`CXJHp,]H40X>=|YzbwM+zvXx@|UO&JL<IhM0R)o>0:KwA1d{Jb_5o0,');
define('NONCE_SALT',       ',63a]C1S}l+Q@.g+e,*39@6C-N7@b|_G-uUW|- Kc 9bU@fApO-mk!k_%4(bl<?<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
