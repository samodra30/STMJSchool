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
define('DB_NAME', 'stmj_school');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'KJp=dJ$LQJ#j$#CFY<<,wTB{HAWa#Z3CgnXyz5dlc6yr.Y K12Hw@Q8 2]x-Oo[<');
define('SECURE_AUTH_KEY',  'un$D%)k]dr3W$iH{CA3}@;Jj6mG3YA.F=jt-LS7=^71EnGkz3;7kEY0&,+5kv(%I');
define('LOGGED_IN_KEY',    '*?>;GBZF!+;oyhA6F<)snE__X;-108AyteWhK|Pc6F9>bS#i;MaDST5}q{}NUs:y');
define('NONCE_KEY',        'bwj~&HWL&jm@aP]SFD=q$c9i^u!^|%ti,,R;,~L:q!xE)K4`x9R$Pg;`c@Ch8/E$');
define('AUTH_SALT',        '(]EmO;.gAGtp>ni p<;*9/G<GF`5}axK+@%H8OD%g3mE([HY2$V(S m%!~)^F=wq');
define('SECURE_AUTH_SALT', '%`hii(YXsVvKV(])XwU3 KeiWtr`%LFnz>`tV+V?*/,gdFc_%z H=evTgMnxH<:H');
define('LOGGED_IN_SALT',   '/EwiQ6ZTWkuTXZNBA8E|}?P3|KCA^Tf@9K=cHCnpGV@Z~t$}Jom=oX=NTlT{e+XT');
define('NONCE_SALT',       ':!RGycV@v~Igk|3pr<{#56z0y`uxT1d44_n>NxByU&3=_~?V0Pq[uDCai%X|~:&`');

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
