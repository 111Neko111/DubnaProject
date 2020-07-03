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
define( 'DB_NAME', 'mysql' );

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
define( 'AUTH_KEY',         'njCF7_+Hexp-G[pB#us%QU{6[B69?U&NgxZ~4$,E&;G~,3dW=kY{;_+ -Rt3>@c#' );
define( 'SECURE_AUTH_KEY',  'BBSXq7J3Cw=rD$9)>TB4TFpnLB;Fc[ O>9pkz<9!cypI|A=0SW#~&=5vub$I1#8x' );
define( 'LOGGED_IN_KEY',    ';Li+n1xyt6L.;qFc0`W/A!&op.D<$/,|@sG3^/1A*e3qp55Y^V%+FnFouY,*|[2<' );
define( 'NONCE_KEY',        'pdpSG!4Ks+_eb ]8hM=8%dx|ZnPZ(bc(5n5v^Dt|JW=N2Y;^Pn4uu1eW01~xm5@P' );
define( 'AUTH_SALT',        '^`cf>:q(G8gz_]0UDqR:`&%$Z@-1(VCLQ6,YYP`dvu6OO_7L7VV.7k<3DYLJf>Eh' );
define( 'SECURE_AUTH_SALT', '&jG9d#[CF!BihyY=t$vmiC*3`B:+>}uycKzpJA-v(+,~Y;XiWG($ekvJj0]8[&9k' );
define( 'LOGGED_IN_SALT',   'mh[S%0Dk{$D2?eJ]~RF,[/N&9 I7+pNKDILRV!;-{)CDB#+NYdYYPcP5A~[r0hG_' );
define( 'NONCE_SALT',       'pt9q]jhAPwhL~@KqGz(|}!_|Or^}`W)0t?LMAd]-^b}<G%6cP@ej=dIK&SOxOKB]' );

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
