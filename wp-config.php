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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '(iVSz:[~^J:lzNi;:[Q4p2uVy#3M~]9vi/.Uj@ldBH6y4H}$HW;!&Q@&ch VQhWj');
define('SECURE_AUTH_KEY',  'FfL-CCJYB K(?a*AoXxsc6+6!@xFeA_!V%39{GEacT4Dh}rn:TZ?{Ir2ph+;c|7Q');
define('LOGGED_IN_KEY',    '0QZ4/Y3@XJPG.QxP!NhWMo} 9t~y|NyjNo^vzCtjgH. =)uQ*GY9/xG[/J%__!%d');
define('NONCE_KEY',        'cW.x0]oZxjF;0l,g(MK=ZrBD[ZoS2P+lPB`x7O%X!fx3(gydP^`*,Kc!_S%O=sY^');
define('AUTH_SALT',        'X>($R&b}>%;<ZL>zc7sX/+T;[@&fC7^nz^:x<?o4jA`.(LmI4*p~!>h0u7].7p&h');
define('SECURE_AUTH_SALT', 'c@&,3<());kF*8JUa86bye9T35B+y?:/$RZer-Tm8fh%yKYyp/eI&UYg;w<LHZAV');
define('LOGGED_IN_SALT',   '-&JA]XlePwpRtZ)WK6t:/XxB-ly(#]TjP]@X9 wsNp^OH?UDvsbXcBs-41cfvbo1');
define('NONCE_SALT',       'ozjsuYT|U$Q~:+ybSXL]>7ZL85u&6KfEY#f+h%=L`-r}(*Gg4#oVhXjJ v.B3AIT');

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
