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
define('DB_NAME', 'coldencullen_com');

/** MySQL database username */
define('DB_USER', 'coldencullencom');

/** MySQL database password */
define('DB_PASSWORD', 'dr!t4DGX');

/** MySQL hostname */
define('DB_HOST', 'mysql.coldencullen.com');

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
define('AUTH_KEY',         '7&s4&fh_xYq5R^rjC8D?4j^SD3E+?45_VAu;6c)!MFflaOKQM6a0$NVP6I5R7ME$');
define('SECURE_AUTH_KEY',  'JxWY~&ISGj%yUGlx@I#W`tDGL)gKGuLHVLF)SUQ5lC~E21qrb5JN(|Q!j0HruT/T');
define('LOGGED_IN_KEY',    '#Pn|b*rwd+7`zc8wQ*iW4md1HaPGcLn5^#:3cf~j2"MJiZs?thp`pA5MB8eZa%q1');
define('NONCE_KEY',        'H~buo*ccYBsyx1OC"Zz)xV`c6z~6u)EYjgzpjn4Y2|K;k9QuA_EC&Qbh3/JjCq(G');
define('AUTH_SALT',        'YjRjhBfKF;qIJo@n#eT+S!d@)P;z3i6gk&E;|:ZUs~lXMeI;E4egA6:FQ%Pjo8C5');
define('SECURE_AUTH_SALT', '_$q&XwqApLC@s1n"Q9Ayaq7iXgx3MJF+1TE/Ap5F9g|YhnrdlU!/d2ru^zG&p+ar');
define('LOGGED_IN_SALT',   '7z~TWzqoSe/TcNshaTR0)a5J:+;hcMjLr0g:DvtbN^Xo1"g4|INv8d|(eLh64Ys1');
define('NONCE_SALT',       'Zv4fruwWJHHL;6#cKi~qWQjUsBT`081_N)zfvN(sv@BZ;y;b0*wigs2Lhqzmf4cS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_eqqg6s_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

