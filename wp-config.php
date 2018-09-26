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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cmsdev-db');

/** MySQL database username */
define('DB_USER', 'cmsdev-user');

/** MySQL database password */
define('DB_PASSWORD', 'cmsdev-pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&S!kR|kb uyzEO^soh#dlw&NuZy^FmR}Xm~sb/tqM-^@c^eQJz3mm{%Rg-+W(&3W');
define('SECURE_AUTH_KEY',  ')dj;,iA&d)X-YhBy3`70S*-W{sEtbUs+Z)exy(%]Ij^-=L/P,v <87v?0`Ns|QQH');
define('LOGGED_IN_KEY',    'i6l;#XN=~Z Vc+@ts=t4 uBxauRAPPRf;2Vu[0iH4CeF]_~61[KG<alp-Y?pJ,&/');
define('NONCE_KEY',        ']f_+(!odPLO7)MNJ[[4K935;m@u7s^C1xhC[_[j5oD8t2gU(L9OJaFro~UXm(~2?');
define('AUTH_SALT',        'Al`T~(kmT1m>&z()Ei~lvcUhi>PLZGHV[{w|JlA@iu:B2#-*P~GOO@82~u9W1]{{');
define('SECURE_AUTH_SALT', 'wEW!Qa^V8`fnK2GP<<M5./)*nC$ L]C hIYB@F-jyVA2u[ 6^YYa~(hL6l(YFA~%');
define('LOGGED_IN_SALT',   'Dn^f~We1:;~<Ox;Rc%l?hXKT!w#IO}:e hJ6ng`=+og}0.!P*Tdzfw+KPfcETi{I');
define('NONCE_SALT',       'G&=o!2J&O50Qd{za]}XW- 9c~gJ=61O./Y1>|P/,+;cRWaL[[,:cVt-On6qb-cLa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
