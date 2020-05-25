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
define('DB_NAME', 'tubepphuongdongv01');

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
define('AUTH_KEY',         'eQ2ROlFp!OAQf8${I@Y0ddO5eZSrpx/:rxgHy@Y_ck2s:DrR$,iN~`[YcE)>_r_b');
define('SECURE_AUTH_KEY',  '~[G[bZ@NFCyMJy{*oF(+~z!UCX_#=_JRh13=nT{%a%aakb!n452-MZ-NM($aQb*u');
define('LOGGED_IN_KEY',    '=mQl!qUZY;$!2*stX*Ov_XX(WGuObs->vIF,irX@MGYMb[zmyY@`;%_W4UE:y43R');
define('NONCE_KEY',        '&(H&RP|s^Rg-O`&NUnV(rx#TJOv]IH[,RT%n$$@`b;X06^n9kSO4J/uU{^fh_LWj');
define('AUTH_SALT',        'm)IMi@<M/b~Ev0:02,<61>5@5__zhpY80$t)tq4BeXor0QwdO,Yy)~r5c#~?!c,^');
define('SECURE_AUTH_SALT', 'gmt,@Mr}tscF>U=6BNpWj:QZ.EHR@5,.>>#_(Si#?79zD[/{>#)UV>VY,0lNctDu');
define('LOGGED_IN_SALT',   '[V2dFK:,1oGohs#IpIhB!W@8uz+o}-2Mv i(?s8@w|/|I!pl-mX*Etiv!6|f8IIB');
define('NONCE_SALT',       'X;U7(hH5(LEB2)3G}Y( 0^(*tAIs-=mz_JdDpl<WHZc^UG=@wg,$2b>$Q,fBY!>H');

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

define('FORCE_SSL_ADMIN', false);