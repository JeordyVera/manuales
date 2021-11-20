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
define( 'DB_NAME', 'bd_manuales' );

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
define( 'AUTH_KEY',         'ro0R LDeC-#3&4/t1.(qxL/[DP>aYfO>]ue,uDocR+r4_bO(H9-1D}_U G]f4N-(' );
define( 'SECURE_AUTH_KEY',  'T1<Y.1p2CD<;fZN1jGd[}CyJ^wMwSab,R~])k(5LRtDj*<bes g}9m;0]JWVolc;' );
define( 'LOGGED_IN_KEY',    '2b}%nCB/`s-j53XhyPOZ,DMUhmOW>`D3+JWTuZbRz?`f3:=~V>XnH7@QQA o<S{y' );
define( 'NONCE_KEY',        'cHPsXI! Ub,8hAaz! HO*?DaWEeZ0{zW+bhTgg_$mWjuDOm.WgQpyn{^!QD6UraL' );
define( 'AUTH_SALT',        'k!#-t^C*q9tjI!yb+)VUd>Z;8G/La2+F`*1hG]O>= Og}P#1u7UfW!aj]v;v$;RX' );
define( 'SECURE_AUTH_SALT', '#4Txzi^q#_H*4qZl*B-<H[D>KL/0[jr}88E,zIh)`^&r)IPqh{/lErE!]&d}r=%7' );
define( 'LOGGED_IN_SALT',   'c7u7$~Hp-mvm7Yzqlg)TU2e@zKm@>:!CI-}k%uIj D]>ea-]%aEq&<m[/b(T<`Wy' );
define( 'NONCE_SALT',       '7BC,5GGgN+nR^?ti]])u DD}i.i^L-LL5{kF!}U hf;n.MIVOil0LB81&K]tHQMo' );

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
