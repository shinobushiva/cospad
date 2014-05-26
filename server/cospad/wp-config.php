<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cospad');

/** MySQL database username */
define('DB_USER', 'cospad');

/** MySQL database password */
define('DB_PASSWORD', 'cospad');

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
define('AUTH_KEY',         '++RP5,8+<XPyu4/{wm[L(9N8((-yS,zkD?ppevF19)f|1Bl/0)|MIE,+b&8/_0r<');
define('SECURE_AUTH_KEY',  '%07Q`lD)M,7hV-o_l+ZQC.T|bFEpr7@J0yrjjuXoJFbH+`O`tV>gt24/=;:Xl`KD');
define('LOGGED_IN_KEY',    'CMzSDPC]PVfR)r[Tt4HH{P-3nuEu=GR(D>;b0Sg{=0UZuKclqZ4TVkS|J2}R#,#|');
define('NONCE_KEY',        '&L8~Hd-dc[KL1_]b=Zht|b`;hTc>k>1J}k60VNRQ^-+KmuU$CK!jlm3n~$DZ60XE');
define('AUTH_SALT',        '|+==tmr_m.<iae<}BTD~7w]RwP;mqYyFS>@=M.ph,-u,^6$AWE?Pi<(j0z<dfBN!');
define('SECURE_AUTH_SALT', 'UH?-lG,~LK<PB*|8^@ZU7I}{F;J&>[-$>?-silP6;=ScUp9PjXJ1gbFq4~O_7[%B');
define('LOGGED_IN_SALT',   'J`hDP;,rCs*!my!-~$}pMH#2<%BXyT!r3S KWM9l{ `;:|Q4lJCkmd?QFQ$Ez/B3');
define('NONCE_SALT',       'xEc0jqaRH71n?D~Z=KXHgf${X@0rGVI- +GLq->+&?n1lo1X<dU-}{O^xG!,:et5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
