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
define( 'DB_NAME', 'word/arma_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'HFwVU?%XNy2&a]La~d|nV+eR)lsMADfLWS8 m;*>SON[y||[l.,Z:aM^XW.VB2Es' );
define( 'SECURE_AUTH_KEY',  '21k,#UB UlvyAtbSmzru^kk{gZd5q ~9B~sY&6I8^4K0MD`Q=>M|(eaF0R+,;Iqi' );
define( 'LOGGED_IN_KEY',    'm1a hD=d,ddpuatL@%ih$v{L-5[y%Vq+rMe/IfgND7x|-)%La~go4.u3T=Pu.!V ' );
define( 'NONCE_KEY',        'K!H]h1VdChI;=+oE7[hEefRjy%uBRP>(zNpcAWWH-?I|leWQlbnSp2$1&]xYC0v=' );
define( 'AUTH_SALT',        'T|11lq./nk>^IR0z+Z_vmg,G7x?QS,xkGM(G-Em_O-qzFk.t44(S=1cs<%`1(1:8' );
define( 'SECURE_AUTH_SALT', 'Vu%s^*{%t]{jr4#E<o(B=SG}JBi<*WMWQk4a]s6&y0j <JKG8mo.F<Io<6T^0#->' );
define( 'LOGGED_IN_SALT',   'jDV1SbxXD!druY^o8I*KL{MQ{J`r3b_= u;1^D^S?sOH/KrP7*h*J6;2;7y(9~~8' );
define( 'NONCE_SALT',       '_!Z3$5/T#x={.kF1l79MGw>OsCoC@|C78S0P?g.j^WRoDhKbTe`ES5gADBO8,HbW' );

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
