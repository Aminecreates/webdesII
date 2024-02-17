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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%PhT A~J|!g7QBiWt`*n2MtE<>~WAjx[X:$f:BnkDS%]uyH:@Q):Q1bwN#ZkD+1|' );
define( 'SECURE_AUTH_KEY',   '#qB7Qm:39(e0n[_kr#[<CQ.lzb2#h>}/(n.18b*N>$0$BEKvBF/N^ViLr>,.BO+Q' );
define( 'LOGGED_IN_KEY',     '>7eUoa_ZeWV4+#/eWb@U%oH}e%A # 5rK_0kq`5CGU90WU muIj/g_p Z)*]l+su' );
define( 'NONCE_KEY',         '%LU>*$O02Z2J1YU?m,x<z`>YkB40%b5yG{W%Fp`?C$-uv{J2UhDjwN5:N)tdXT]Y' );
define( 'AUTH_SALT',         '6;EKuq|>6oy-qxP~$k!X0HH/5[PT&TMVq,R<I[A&#Lk7E8p%[9Il^0ir%;GY6.kD' );
define( 'SECURE_AUTH_SALT',  '-iIW~_ZR<1+D6+=A?Eq$OFJHJvGXr)/=(mx.xnUcXf?FM3|BO)^-oOh1?E54B>gA' );
define( 'LOGGED_IN_SALT',    'Ym&.2H;FYk:yc7lR~{c#el]8g4m~-9CNbIGhX^Y,*d72J%9<CS3&p{ >9zdmEJiZ' );
define( 'NONCE_SALT',        'M2@ct#A*=;+yHik>qo4GHxkd;<AhVc8BN5u%g.(g_^c9#kLUQj5/=T60j-7Fc#pm' );
define( 'WP_CACHE_KEY_SALT', 'T$rAP3nW8Sp,Z509bt->w3&BqS$~bnMfRp49f2[P8EZ;Fh0+|hJbcro6Niht]Tf0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
