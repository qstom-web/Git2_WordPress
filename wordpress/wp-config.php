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
define('DB_NAME', 'git1_qstomeu');

/** MySQL database username */
define('DB_USER', 'git1_qstomeu');

/** MySQL database password */
define('DB_PASSWORD', 'git1!qstom');

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
define('AUTH_KEY',         'tkHn6&F+wH-B-/!.8kwK`c*.|!z5]Rqa>kAy*j=c-3;H:X#G3G4I:R0h^owp;E=1');
define('SECURE_AUTH_KEY',  '}RwAS&$!6z&MpER,]cyodKTGfP#c10 #ic?n9t~B:=. cF4w:P6WCo,+6m/otACL');
define('LOGGED_IN_KEY',    'Ch?jquM&g)eqa]*MD]YizocO98A#E2$lHf3fR dhVR4bx)ft[/l(%te^9++1Y#,D');
define('NONCE_KEY',        'DP*9JoqDIlWR/3o#ireg</8(<56M#aM9G=I[c}2-DpUxGVz;v^HEL?;edFzJubkO');
define('AUTH_SALT',        '-gO#*@@C3B{8+f-rbWA}QK_3:(r#&=TZO9tL45D!#PmDhIGhMFMP$n:GP|ts]P,,');
define('SECURE_AUTH_SALT', 'pQc:x0g;G>z6JM08.b9u/N3.U7!4GRa;>YachN9{j sLL]dj[.!=(C-;_],MIm[6');
define('LOGGED_IN_SALT',   'KFlQw y2r5T!; kwC#0Q$>Fuie*4#_V#<g?RILn?jlW:v!s-ra99Y(Cr$$e^~GA*');
define('NONCE_SALT',       '{%=Sau8PjDT&yI`pgl/Ra9}UR6Gp(kqqE?W<to$m%>!XS!tm?sI7,ds1ZCI{s-~J');

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
