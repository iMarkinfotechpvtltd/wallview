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
define('DB_NAME', 'db644697662');

/** MySQL database username */
define('DB_USER', 'dbo644697662');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         'XE0yVk,!h;2`Ot)N1}5]mwJ mBHs bc:CfZt!G^c`*3q:}Z[L=4r~!X(4`*zf11E');
define('SECURE_AUTH_KEY',  '*E{tvKBB8Tz?Wd><ej[sQs,K#(5n(mu;jW@xdP-L=3A#,EydW[m*wn#Y.oZ$D<:5');
define('LOGGED_IN_KEY',    'H&W=;j7M3MJ{c>v,dPXT:%Xfd*[]x8);Qx&7:TWIuUX,@^#`xPw5q2ca`=7:,esh');
define('NONCE_KEY',        'rjEy#Z^#Yc?IL!OW/nz??1P(yk&~a6K4b^a@NNC*D|~I6BS[K*? zX`8(*%y3~MB');
define('AUTH_SALT',        'c<rdu%f0*)?Lvi,/mPBFp}I{C4T iYBCnBaK=NHj!;&!#ZUF~LR!;F8v20[+|a18');
define('SECURE_AUTH_SALT', '!o<Y!hzF2c<]VrbFJ$sjbnb%yAhaVnFEwJ3S//Eg^sa)FA)QS8*9M!YyS*/Aq:Lb');
define('LOGGED_IN_SALT',   '?gJA{uztC6B.uW,dC&B~2vDa:5f4ZsJ3QaZh4_`Kw,.tCzC_V[u<tC%oV&UkjE(P');
define('NONCE_SALT',       '$xN@K[2B@~(n*;ZZQK8=7Q8_>@dW?^QtWf(8<vApC?x%fTX1Cf5Mx6r#|-dqmlE$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
