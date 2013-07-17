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

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gittest_kc');

/** MySQL database username */
define('DB_USER', 'gittest');

/** MySQL database password */
define('DB_PASSWORD', '8YX8oWZgyZdG');

/** MySQL hostname */
define('DB_HOST', 'mysql.work.kirkpatrickcreative.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wz|^$Jhv#;6K7A^}(voB?XO=5|*0-@ry.}[oI-`bH3AshHah35,58K2shE$&p!rH');
define('SECURE_AUTH_KEY',  'Y+nQK&c Q^IFY{g]bC}k[FnogEjKb-fTBlLdyd}Lz.2vgwv&,TbC%g:3~y:|[`-@');
define('LOGGED_IN_KEY',    'c3J4+(5vhCqc=r[MBY~|r73c4<!|+(ZQkO_62B+vhYt]dT0y71CC+@0 %Anud+ch');
define('NONCE_KEY',        'y{m**Wi(R$~3`$}-k*d5L!(]4JuaAs=-wP,d:ve%ncA]TjVVp,K5EH+v]/f5v3,~');
define('AUTH_SALT',        'Hyo=N;M6W?wFkk=W&}ib~/-IFUW7H#bIEbJld/+**Y9.[mAC)b7D9GH#,-t8DMz2');
define('SECURE_AUTH_SALT', '8rRIA ]]izC=<+}+ 3=J0DVZ{^ioMV/z+mo~Mc1W[+jQwQ@+sr:Z*p{km.dd:p<(');
define('LOGGED_IN_SALT',   '#W8GEy4!7jzDV[)w5jVN+h(n}{A|iD;++y(Ng;,s5e2q?ZyYxXr7=ZqnKq2oN+CB');
define('NONCE_SALT',       'xq|>M->*/u7kF 20Z#j^*<+XGh;[G`C>DaGYL:7xZ8xVWB^+l/x8-B5/x3./;;VM');

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



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
