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
define('DB_NAME', 'learning');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Np:bh;@^@sGj!Hp|{Z(&*QI&#OFC@tS{r5);PI|Lg{Ke|R61bwroo^?V/S$ 1(V4');
define('SECURE_AUTH_KEY',  'F3)u5{idVgR=k}+QmbIB*K$A@|?z7H99xcqkqW#YwBs@bQEEa3f$$]@;9,ivtIA(');
define('LOGGED_IN_KEY',    '1N0KRH]q-W9N>g2H2ALgS9e.&dH&y^PMfbUG$vjnAc=i 9[p1fc6JE;Lj.d1?fLp');
define('NONCE_KEY',        'filLzoexy?:}s@WAFo.1,#jz?Xl1F:U<?z^:TIP@)gN5!ed>`*b5bRoQbu;<<:jV');
define('AUTH_SALT',        'o4[H?i:(8lS)fOC* OQ(+Tl?KEa]. m+HX}>#;7YG{9s!7.Qesl_wC?xh&7_@[4c');
define('SECURE_AUTH_SALT', 'Jau57G<SKs;%9-q%%]q|a}+;4DgpLl$dd9U(TZ~tQNdjdInn=w3mf?.&7&BCul-`');
define('LOGGED_IN_SALT',   '/!xA;tU .kdrI5$2Ib1z(]NBY? s?> Sn}Rh<j[=z1KgS$d?ERc5[@w{m(&U9yj`');
define('NONCE_SALT',       'R4#S_bAm|@|;WT?XY$seTN82ydN{2)mrPa@kN8nnJ}Srx0ccrhy+D*=&w|}RheJL');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
