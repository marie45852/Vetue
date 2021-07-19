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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Vetue' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b.:k57aPi+-}Zksvo)(k.n$h3<w,0WGfT+P_#UwVQK8 T`<v!V5/K^x<u<3C.T|L' );
define( 'SECURE_AUTH_KEY',  '#9 #K<w:p8s5(SqLW~=OEEl$u&sg$oY,5H@tK0nP+QfJmMeGVZJYFnPQ.%Z>)Gij' );
define( 'LOGGED_IN_KEY',    '5VjeGsZPe5u.WK.[}i;8:-A_ml>evylICsQE=%n?u5z#YOk:mXjBD|MQ ,mHCsgv' );
define( 'NONCE_KEY',        'us!=x,ju>pQB/~.M?8Nue5K=b{YCw*f5|D`0hgcZUw{3m07V51T0dm)im?$&(En2' );
define( 'AUTH_SALT',        '0xZMFQv%,`9Hy tw~_k|o!-#N+?i$_`z, c${LXZ<jn}50-ZE]qoe0e]3;Ml}9Le' );
define( 'SECURE_AUTH_SALT', '$TIUjBUjF^zDQ>c9Of48c[|v&kf8W}:]U.%7|{Fk^V!,|TS#FRi9CfkDf|n;4hEz' );
define( 'LOGGED_IN_SALT',   '^Xa_(HZ{rbDns0hyFY{&b7Ib^qa`W,xN(k_=M>O>a=vtJc+~ZSj?K`K~^dD2-+NC' );
define( 'NONCE_SALT',       '2e9+{a)Nm7,@zN&A,ZgUN5/]Sd>gjkjOR7(C6#:kH6vWUypf:spgp;4;%E;k4s87' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
