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
define('DB_NAME', 'musicfromklaudia');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RHRa1j.,n%cQ{LJ-sRr[Q8^Di.!y+=eqvf= (K:+25y#~?vfwa>/n]FBd|lO/eV`');
define('SECURE_AUTH_KEY',  'g*_ =H7If1P[].Tn<n5$XL5Q4L6.*gxxHk)c7zYkpcqD]Vh_gj veD0g2!i.LEjx');
define('LOGGED_IN_KEY',    '&MKM8,ZpmZL(V:DnFx;OM:M1K98-DfQ^i1H+mh+H<veTOD6!i1)3uSV8p&G$(_.?');
define('NONCE_KEY',        '#&C2GicpDz]#FnWWmVRPTBb*TgyBRu9|+p3Qw=5xWu}5AhFVh$@0UiIzH12|W, k');
define('AUTH_SALT',        'g*X-0zoar,-7_|4f|8Ry~whDI%8!1Z 6fcT}WCxL{,-NaDUv;H9[:J;6*O{rbqM|');
define('SECURE_AUTH_SALT', ',}CZ_pf M-L$V<xk?1YIAgRhN8pK:2{RI(^P,[rrw$}$a06- [KZAV5nbv$hv:p]');
define('LOGGED_IN_SALT',   'sjv#6wA7!%1M5)lT*B5F1UYvCl3 XG/#Ydfo`&kZ$p+XPIuj^{YFQ];=3WETyI@0');
define('NONCE_SALT',       'v2]e|T`q!`<-t/K%-xXh/!+zChS/jWTNX.v4@D5|`ImA5+ba0SdC<f#abgueq<JW');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

