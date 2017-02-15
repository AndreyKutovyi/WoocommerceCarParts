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
define('DB_NAME', 'wildwo00_text');

/** MySQL database username */
define('DB_USER', 'wildwo00_text');

/** MySQL database password */
define('DB_PASSWORD', '6103');

/** MySQL hostname */
define('DB_HOST', 'wildwo00.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         '8dZti8C2q6zgl.3~-GfrN_:oo<iE%AnY}EU -PPvOzUF}l?+J3myw=*/iR CO9?Q');
define('SECURE_AUTH_KEY',  'h0!|}bEm.2_na!ZZec69IXEjDgbUo{!Ir!P.0lVxcI[Q,Lo{2@tCJ{;eEwC2R]9d');
define('LOGGED_IN_KEY',    '|BTSj2 OBQ]T`sA|9N<GD,z@fx6Cwho/q(@prU6aj+D(&/*A,}iY:TDo/I12fc5i');
define('NONCE_KEY',        '(f&7%:$9CGd*~|nRz<&Ogik1Fz|+|+*DW0I/z;Avw_7Y!rG]YJLF<cv*5{,!6;qr');
define('AUTH_SALT',        'Fv)~*Pz:x|4kA;BaQgE{,uYazQ>i)4{h(O?+({sk;+GsS_p[`f(|1_(01=%U&c9+');
define('SECURE_AUTH_SALT', '+Q1L( 0o3D{V&M+y+^7dn;x3D:f;6j$+-[nvIcXLI~f1oSN+az6_I7$qIc)bst[U');
define('LOGGED_IN_SALT',   's3VGn>K|c^P4Z2qX1*{=PT__ <&Ay94Rwv8xHKwQ1(V[Bx%#g/(g:/m/[v}8<?uF');
define('NONCE_SALT',       'aazkqL3}%dp|6y];;vIiau6.$^u.UgaV~oC&QV//v#yEOoj~/YsHMEzKJPVD&~27');

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
