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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aquila' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ')$s6WCu>%J!79lnK^p9.qzmYyBa{~yi/Y~Ecl7icX+.S$~*hvCX.W5d*cthA~V$C' );
define( 'SECURE_AUTH_KEY',  'ZPhAtWcY&o}~EsER.]4UFFE@ZD!6eQ8>u;2|2?Gx&#PKk:k;|?)Xbv,O.sQfLxK3' );
define( 'LOGGED_IN_KEY',    'rP%z<WQh!He?TV:W vir@=K}Uf G,p}=|;.vfLWl7p&SpWz)bc1BZnyl]j9%D4l6' );
define( 'NONCE_KEY',        '(^QLoAmT1}LZ HlHy:-X*FsiXm,XIJ&5j8jgh)DXx.xaDaf>#RLcn<zwXgY70A6>' );
define( 'AUTH_SALT',        'qFmdHw{q7GpK?|3_%||Q|t*vp##M9Z|_7pIobpH:Gt[W<Y6W0E7~*-%V3|)48Oaf' );
define( 'SECURE_AUTH_SALT', 'rgo!Y>XPh5#?k8BOAQf;N%TG]scQ/jvOfcTm@ybxAlu/2Z%CGLt{YV$=8gE5+@6h' );
define( 'LOGGED_IN_SALT',   'Zpyo)uHLy&QcVd{~Ro_~I LDF=8$|D!`=W?+O`_gK%+y5$Gtoy*#SAtRX_&D[]zj' );
define( 'NONCE_SALT',       'M{A{VrId]$YuD0a<X;hXsTI80RDCjY_Fbz#3XWmpqYk|x0MTt^w)8Ydc~Rr=Mp9r' );

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
