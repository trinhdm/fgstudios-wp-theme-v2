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
define('DB_NAME', 'fgstudios');

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
define('AUTH_KEY',         ',`S[=:h(,[Nz#w1_L}P=Qvsi!Z+SbS2v1-|oC-BO*F$.hKIcF^7uokC*EjQ&+8-$');
define('SECURE_AUTH_KEY',  'L2ELK=4cpW$XbXan@o]+;,5$ZZl#K~^SiCWCkHZ-)dTrt7f=%bWTBdM9kaIHoW!g');
define('LOGGED_IN_KEY',    'xVGFG9tAJ-w-dQ:VcqUg9F*yP|.F,F*dY=+4;$6cgLUBI-cZiJP|3~l+?/7Gti{|');
define('NONCE_KEY',        '+X[xK{9s,EN,|+osNFhLI$`oUUS:;AbBk&kSqoj}49,;XppukyElX)wS;DbtW]-t');
define('AUTH_SALT',        'zX;b+c21_99)Agj0p9GE||PKyp!Sd!1KbIQHa9maD)1 -XNb$<ID{a6gE Q;-4Hw');
define('SECURE_AUTH_SALT', '~juy7TX]}/!m3f8(:*8?H+vX2R.HOv/uO)}[.MFJzZpq<]G%0H*!:-W(5PagTr@k');
define('LOGGED_IN_SALT',   '6WU z)1( -.ME+b3>~?|wX?g`:<+|JlBuz|tF2@3E+A)Ra,6Yyokrud5Uy[)|km-');
define('NONCE_SALT',       'y-6S[mAaiue`9#=Et|F0TPQ8NQoSE-~3=#fC{Jp0-oe_Q[+[|P.au!D9mjq=h;d#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
