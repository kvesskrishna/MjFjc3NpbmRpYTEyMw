<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'a21csabs_newDB');

/** MySQL database username */
define('DB_USER', 'a21csabs_www21cs');

/** MySQL database password */
define('DB_PASSWORD', 'dharani@123');

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
define('AUTH_KEY',         '(Ew;+ZL<Tu}-z1<(gomx{3c)93=sJAEnn^N:`BFqs-]f]y}b.u[qmOk;7GS)3X|0');
define('SECURE_AUTH_KEY',  'a>)%Y-cNR>-,l:$ 6n[|X c0-ZOTj;*N3uC5Oo@Xov1T@#26/e}5b%JYOfAvHAjX');
define('LOGGED_IN_KEY',    '?bS~jS,$!LDUZ?~)7r|WK_J|YG2B_JtrB9m+@# ty<lR&OLyTy-$LP<|/2|9(JIM');
define('NONCE_KEY',        ';U]}&ZP6h6IEQ-F?F|h4MA:SUlB$y$$W#(3IrfY]7-;U[B3 [GilM}CU]_>>BL=O');
define('AUTH_SALT',        'YW9S 0b}]>,u-B9MNP@s]5_!;:+%RJF(./e:%4>AC0/NFA~@$n!wk|?:I&iuzcy7');
define('SECURE_AUTH_SALT', ' ]#a(7-OSt(bCOvZq/ZV=3H~e|>L/3ZFg(#/l?Fh(&]M3K 3jYTdH-C|u,2]Ovj6');
define('LOGGED_IN_SALT',   '8i=VjT#9 FxYO3b!*(?Jw0#^q3W!M:qrA;xXpJVdLb4&U4&2RAbu8-O-F* Dk?Z/');
define('NONCE_SALT',       '@U#+WZTTnHa_RNFA4Np2JirTa9,2;[-_3k4eokQvn/8#C1CYq|NqHVWhINaX#ks+');

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
