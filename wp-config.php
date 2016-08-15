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
define('DB_NAME', 'yra');

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
define('AUTH_KEY',         'a8ie`cwK{!6:maO)cr.&HnI%Di28D5ZO ,K7W_`;9_Hj$wdlm2sY,Zxd0VM!FC#5');
define('SECURE_AUTH_KEY',  '_:3t0S~]BiWxx*U%uFj.Vuj?zI bz<77loG.S9#&1Ueth@uY>cGN&fBuk,q,othv');
define('LOGGED_IN_KEY',    '3aQN|Cl1n1M2%.~bR/g13fFMjK3&J6#%~-W} tA_E?CF1_8Fiq[3eD1L,l}!xfU?');
define('NONCE_KEY',        '`u_WASx_oA-,kxnl.9w`4ZcY2/.E6^xlK (l$x{0+<HQccZRo8PM<fVe}g|e+{b4');
define('AUTH_SALT',        'g5Y:1z+8XAdfa5KRn/9%|?f0vRs;Qmo~A{n:,QD%wSd:7]lsqUTi~C#q8vc0vxRy');
define('SECURE_AUTH_SALT', '<1#0(I4R0u)l Q6epHK+CSdqe^ZFT8_r|C~C;q)$(^Z&Nu8IY/hBvNFNepJqcIDr');
define('LOGGED_IN_SALT',   '(<spP8D%RRw[7k6Vh0T.M/*3_Z)q#kCy*vYMTSb!5~iU|Pl>v1I}xJ|L}z`|gP6?');
define('NONCE_SALT',       'o5v5Uwv>b:l:,TRGmw<Nl4<7{Nl(|PZa6t!QZH pShRGJ&X@G3bP2USDqxoNJ.5%');

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
