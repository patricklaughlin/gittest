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
define('DB_NAME', 'gittest_db');

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

// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://gittest.dev');
define('WP_SITEURL','http://gittest.dev');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/w-tOEUR6;<:Xp *p5`EtgUu8/Sw+7^svkJ:*L]]5Ximcq,$s3P^Er|9+.hiF^4i');
define('SECURE_AUTH_KEY',  '&--TYRM>08vBo;HwNMKYzBu9MLzjM[w~/l*#,K+LR)acfq:Pw>Mp#IVI5]rR~8;h');
define('LOGGED_IN_KEY',    'xSzg-cQpS9cQt+b^PgVe$/$;aR2NiL9C7[.o3b^p{Q@&PZe)0/QYQRc1t4n*&+?[');
define('NONCE_KEY',        'H}>p]d^z-VM%19/GM!]-[]C|nIb@~c!/ ouzn?^3R{-NAE@h&uL]4o`?3whtR|aP');
define('AUTH_SALT',        'AH`&F,bAjms);IU<_F%?9<p|8,ZM?b#!B)MN3j^w&g]9qM[EW45RM#FejS61Z+eR');
define('SECURE_AUTH_SALT', '^Md+9]g:]*i9Hlk1h-GI34hf |1-nO?!!^6hnl,0q]w{A!|g{b|/!mLolZr[+v(.');
define('LOGGED_IN_SALT',   'r{[.b9KLNZ8p^ihR>476,P.C,h7>G:?PC)//ulu>f$5wb+a?aZS}zB8@)^k:I!C)');
define('NONCE_SALT',       '%P+L+HW-9XDF66My,c?i@pU+|fnH=SuIu*S8b<W&shX0vurFn+)NkdC|.?)JAg /');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
