<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'packingshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-Sa]/V[vf(^7KX%r2q~Kg1]X_!3S-0-_QH |}CMqYmRiu*Te0E:q72eT<F~Jqh$0' );
define( 'SECURE_AUTH_KEY',  'zDZc$-7sSe&&`s l{YYCJO]iDSjs= u/8O0B3&*!PHf6i~irj={!c-I7@~u&!os)' );
define( 'LOGGED_IN_KEY',    '<8rT,Zt-5[d~QK;}:`N.Zk3}LRyL|Gr9fWp[sK=A=?8@1Ne*ASkB%M>o<v_B6yVC' );
define( 'NONCE_KEY',        ')6,(B` giYp?CE]^Fe%E)IX~b.-_QJ4L|4V#=ce#g3-p^#cFrCw9ii>K`:]}F<Mn' );
define( 'AUTH_SALT',        'BuO#pV0cJ4B`$l])>HOHM^e%TI2I6bRuoZr0IfZRit#d;~<Ex+kmsaIlD{DZfCCW' );
define( 'SECURE_AUTH_SALT', '/2Lw:BmvXRj_OsSG:Yzc5}N<16X0{p|+Ex(mDqNXe@~+&J6I_fmc zTB<]uOweEj' );
define( 'LOGGED_IN_SALT',   'YOG0EI1LSBMaZ6weZv:]lV!ILA;#Sy}S`tX>@uT6Z5XgEUacc_?auN_T5d5:rzgh' );
define( 'NONCE_SALT',       ';.[p77! L 2*xwKI;@?q0<NMLaQ~i(pkKt*)j`KV#^2jJ;8K=`W-)PXyq6rlNTM$' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
