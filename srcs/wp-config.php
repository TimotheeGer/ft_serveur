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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '{ Jc9}D%rd!NFankzJ%B$Ue@E,lfq.m;#@[Q8KNg1X!CiKSL8]f%zTY0qb@k<E_~' );
define( 'SECURE_AUTH_KEY',  'L-moZ);++@$*WY3 p;+)Fx^q!z>yIt@TImI-.2Pel:Z3,8wI8 FJxmpuh(noJFkZ' );
define( 'LOGGED_IN_KEY',    '>h3F^uF-zCnGr1uOSgd8$?H?.X.NA`u0)@g!k;Zn2{j[OeeBg[bEa&VCzfr5yDRz' );
define( 'NONCE_KEY',        '&TGTh4O<^[Q1Ej6%}J=T]]umxP_TP~p!2Yv&93CG+54{T4f{^ $<;;|?ki@R{c)i' );
define( 'AUTH_SALT',        '!-tWzaFFhOkZ@oTOOEGT.0;dN^@W|1%h);<$<^Az;LBsmCU#lFn*uj=x!:4K3g(4' );
define( 'SECURE_AUTH_SALT', 'yLQ7(zr!hK5ij-%wv(i(z;{3@aZ_S.L6?<BupJ8[u(>0{}++O.2<Hn49%}$GsaAq' );
define( 'LOGGED_IN_SALT',   '8Q| 8}Q22 a7F5>j|QyDHaWJV)6Po-Z#xJVd.+)LYQl!@8!{0 0a!{AL,nb]DOPr' );
define( 'NONCE_SALT',       '!WG:V7dqE63==g uAw&T(^=TPHU*`v(u=[WpoiRe@UMMl>@bChI*@nD?!I+$L2wJ' );

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