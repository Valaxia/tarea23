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
define('DB_NAME', 'tarea23');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'qKJ)c^r(nr,Nx$2Y`93Y(vlF$.y@Sgo?#m2W9B6(|_&kBS0N[t`0eyOq.ZDw5pJ,');
define('SECURE_AUTH_KEY',  '##WW;,&EoY~TT|OY_c/XCf:)IQ~&4}7QN~GPA/MRQh%{lB#$f3=-Cq6oJ4HE/BJ~');
define('LOGGED_IN_KEY',    'axOYPFtYZ!iCtB-MByaO&j[H}{luE}1}ZC/TOHzY/v2Se]%5j{+rhd{~I}9ZJ.{#');
define('NONCE_KEY',        '/x3P,KBTs+zZL@Ue{_q!{)1_&yUfT,eke4ow|H <D/(a,hr,@@B3;xEs+~:8wH^ ');
define('AUTH_SALT',        'j4*Gco..v~ `IL`WT@dP/yu=b1Ccb-`N0Bn:!<.1D!}K3~$!`jWZ9Ka[=7BC?(J+');
define('SECURE_AUTH_SALT', '[>]s6.L75sn.ano4N<P(t>fbe0I=aTICf=wL7;PDO5y}aO)LZ}m<]!ToD=nF8~#T');
define('LOGGED_IN_SALT',   'YfbqM(W#e6751G v)#|9gB0^RZQQ5,6CB%s/J@LkGj]x4rcu>1eUyHyI9~0FNLTH');
define('NONCE_SALT',       '$]w_|;_)25LJw,WA^[DKd)tS*.>Sfo_7v|AL0XbD{(y%BjZQ=xFNIl]^pe1t{~IR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vo_';

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
