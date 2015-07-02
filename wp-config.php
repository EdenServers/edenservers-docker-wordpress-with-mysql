<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpress'));
/** MySQL database password */
define('DB_PASSWORD', 'wordpress');
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
define('AUTH_KEY',         '{,z32F0%V6T~i)jE``nN8450E7[2{B:x^"$M!{592626#8,7nV8Q%k9H,|nt8P1');
define('SECURE_AUTH_KEY',  '&_N@s54mN4^0=5h<8YJlu:yQWktAwHjsq4s!8}2E&1xf{0:1HK%N*qK)4So~l!q');
define('LOGGED_IN_KEY',    '8mwK^"mTmM;2VHzfCvYk3~@8`S0?%WipFXlW3;KDS@7k(B411;335,)*uTNi_N');
define('NONCE_KEY',        '%>6$#C0lw6b3eU$tD06o53R54sQn)R5Y2*1=60jS5Ek9>4ZAfUFw9/i0?xV%)3X');
define('AUTH_SALT',        'PiSFw>0!cT9_|*/)080.?{]11).Vh23k,Z3_.m7jXu4k87pN266QhO=)Da3B~A');
define('SECURE_AUTH_SALT', 'Tz4|/HF3o*o243[*AUEHz4g4)1*r0]X:$3A5##JE2qKAG9m12AvD%J83&gN0QZ');
define('LOGGED_IN_SALT',   'qmd8vZELw9b-T^2r&vX701x2#vbQ#*C~E"nUA{);V8:Q^$YsdE9#,9m7BE''"&2');
define('NONCE_SALT',       '?,:X5vG9q_aTI/JLJFnui34t~ep-"Kt+c39przZqdc2"147H~y36}L6u4^Uz]J');
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
