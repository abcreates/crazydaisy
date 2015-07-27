<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'crazy_daisy');

/** MySQL database username */
define('DB_USER', 'crazy_daisy');

/** MySQL database password */
define('DB_PASSWORD', 'dRXbsBF8sucyE4U8');

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
define('AUTH_KEY',         'cc+D9!%+n}yH+@b@.FDt]?f;5r|K|^6M8k0EyRlPB;Zk&CGMv&@oaG<^*R6J_<4_');
define('SECURE_AUTH_KEY',  ';;thiIDSU*[|Ft3V-Hq0K$&Z:>P-SZ2+5p 0k?+>vOaSZU{3I_RJ-9RC|n~-K-6)');
define('LOGGED_IN_KEY',    'B|h.Z;js2DBtH/zUj@|tRg Kg5cgki3XpZKn&Z &J?6-7Bcli9-%]R5DP|^m-Z/ ');
define('NONCE_KEY',        ',2>bClDR/|F$f;T*jq) VSCnPk5Z,5{q4nIij}ZGXJtw*$-;.Gm|B4e9)OCPmWjO');
define('AUTH_SALT',        'CjQiAY>E<L||ysvk/(Oyb)A{-oN7xE-1S9$QB%&!XydP{!#A?uPeqsUM y#Hu6Dl');
define('SECURE_AUTH_SALT', 'RC5x-j>WhU,~Fpi/~R|CV`H;3W^--39|C8lEe/_FNjWi;gDIVtp61JSc2p9SP {2');
define('LOGGED_IN_SALT',   'I Vk6a>Xh|n>yu$]%Ns7VZa~3Xk!@qN3LAWtX91{B^.-P3e}g#HT-7J88itt<Gj0');
define('NONCE_SALT',       'q@|/k7[+FP^4pxYMiw3!#h%U_Tw/HjB*s,?thW,XpC<$3!pJLVxkK`_xP^bYudf3');

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
