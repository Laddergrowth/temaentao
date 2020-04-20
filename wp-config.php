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
define( 'DB_NAME', 'temaentao_db' );

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
define( 'AUTH_KEY',         '$FZ2zq+b:s%=-%~w.L)ON0ZY#K~i^J(#/(HS:3M/W_SgOD8VJ{I@{De;Yp|Q2./M' );
define( 'SECURE_AUTH_KEY',  'LCi!~9>_mhqcmC)A n6@b!82ei^_TInO!`IiLjX})j2]PFzko8)fM$g]Icp@U[x>' );
define( 'LOGGED_IN_KEY',    'gWIhckY,ht1*1: {RdTV*8:=%<Y4KS~_!S5K6Lm1%;w1T(SyM<7DS0Qojc/I{_89' );
define( 'NONCE_KEY',        'DRhKZ RSEjqrQrM>6<F)c?jblSh{IhSSB-sLsZ`9f=?@qvi]#O}Mjq80><Ha_1Hk' );
define( 'AUTH_SALT',        'b4(io&~vF;|a(V%-VuWqk2@U`}UN@Z7w] !5!!TJP8[KU|<{fHTz#8hpC&,K&>$Q' );
define( 'SECURE_AUTH_SALT', 'r[;otUr:Gip-uR&2lf4t8w.m3Se1yp<W),2UgMC8cqv+8?&XRsiBCD:/vwTx1{ds' );
define( 'LOGGED_IN_SALT',   'F=YZL-%/i:osK!#)A-!Y&wTD4.0tw}V;UahJ:pNYvJl,ARygNq|~d*WTbM{d1v4h' );
define( 'NONCE_SALT',       '1S)%~:QiV[SIOB%jw0MgI0*/ oIIVH=F3|DwW9>Vvq:`t:!56lnD4@25aI)Z9-{E' );

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
