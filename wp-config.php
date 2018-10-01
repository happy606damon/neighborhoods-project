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
define('DB_NAME', 'joshubg0_neighborhoods');

/** MySQL database username */
define('DB_USER', 'joshubg0_coffee');

/** MySQL database password */
define('DB_PASSWORD', 'Neighborhoods2014*()');

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
define('AUTH_KEY',         'ml8Q||i}UF~v08BCbvYE,d4Rc|0K==W@h_QCioAI Vv~s4i)!&XEpuw/_`K]jOW2');
define('SECURE_AUTH_KEY',  '(;A?UxnG;<t5pi9h^MJ;uenucBwq8{fs`|DsOO~Xgf45nQhn$jG|D=!Y;aLFDojI');
define('LOGGED_IN_KEY',    '.!UXH+v-9VKjLzHO|)in+P7@K^WwF_if0v[*gSJw[567sL^]lDW*{+;bF!%g5|8_');
define('NONCE_KEY',        'd?;4EL,=5Z/DwzlMlRf@myr1k^LqeBP[B=6]Ma:46(bDZqLMH Vgamfx:|F5@9%q');
define('AUTH_SALT',        'D_mJ3QH~T<?yTYU-r8FEA8=2MyN+{o[Vxv)OBVu`?,Zr1]6yVfbx*Dg&I>V]MAUw');
define('SECURE_AUTH_SALT', 'svUWVfk%T71|hDia2?TvLDD(^FgHaojb1%M?go]3^B?KnbYcFiFyCWD]o7!Xu~l|');
define('LOGGED_IN_SALT',   'Z:i[),MeRkG$qM0QHx?y#a]1rwN,O]K1!#0eh3es%J*H1_kmRWb~&N?t =IG.#tx');
define('NONCE_SALT',       'jGP i$_ *&lh6IKW>;((=BITFQEz8c.-}y1Sj,*lsE-U&l?&&umW$Ih|/XGjY;_t');

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
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
