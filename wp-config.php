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
define('DB_NAME', 'weducate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'q4ni.[]{t|Z?2!*tVct;jCW 0roS%.u]Jb|T&=x72X&Y9u8Ivf^3R+=^qhK{0}UV');
define('SECURE_AUTH_KEY',  '$w?n| |_U|nakLbMea%*Z@Zr+xX%L3aO:U2>=D3tLXk7lAf1@T^^:5<2xbSu{7(O');
define('LOGGED_IN_KEY',    ' zxu^S!Mu)D+[/8(({hjZYZfK7|8-HVq;V#}:k]|+6=!%*K9t{GT-$?9|l|l_*yS');
define('NONCE_KEY',        'E|Tmdbwt4t:&2%T9ncy*O8V|p2A)ea2+G#4(;9}a|T~E{l9J45fLJUC<&yU?bUA{');
define('AUTH_SALT',        'XT%:S>f1EJ,eWxG>5sZKH&& l!whWCoSC7mO8Fqsvmq+@J3bNzH)*XBt06vpU[Qb');
define('SECURE_AUTH_SALT', 'J7iNlm?Bex?j..M9$]D_T|J57|-S:b$~tH|S9RSK9tK8Rc&#S]%?{fc:xp$H3[|5');
define('LOGGED_IN_SALT',   'T3>mIbYgP & ;Q*0DLba-@BT3`_jD=041`7]Y+<c/U|/s9r$7h@E#`/>zXfUh6&(');
define('NONCE_SALT',       'h.u2,M4k4#JaMJ%X36uym{h/YH/ax.~8YE<3.}NGr_|WP[xM2BKif@?SKPBa&9p ');

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
