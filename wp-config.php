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
define( 'DB_NAME', 'oceanstore' );

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
define( 'AUTH_KEY',         'z{(<OR( .@rh:-sm~hc]awZfW.~Q|iv!&OSZ^(4xJ@))S5+bWMvynu8I6y8mkt&s' );
define( 'SECURE_AUTH_KEY',  'xHtEMJI<|7:~4@U!(Pu;?d<czk08IfG1PJ0^0Z.~)_vh%n2d.~e32}H[A(0QQgke' );
define( 'LOGGED_IN_KEY',    '`x!^L]Vp4iC=uzS}buJ7E-oLyMeG{6 U|ZM?Z#fXn6&vR*`je`-&+RVotHRbacBK' );
define( 'NONCE_KEY',        '=~39xTXU[^OgG~4.x&k|sh[PUKt8$_TS< b8RC|;|4kEK+A8mWtT6O3/Kx1rZ4G4' );
define( 'AUTH_SALT',        '#I+1L?GCIag>SF&Dg9,[SB>izL1]Uk(%dy5`[:YmxU}BeOr6gha:O+k9.d}jBj6s' );
define( 'SECURE_AUTH_SALT', 'O8SL[T-O)f-O}z|;kVwk/r?,y$Lzt^(hGYw!V5vFMlwu2eswxhk* w7]2`=xE9WR' );
define( 'LOGGED_IN_SALT',   'jAfT3gmr7`%B-oC0O`$Y1y.|N.m$!XIT^A300~k,4a#GRfcLK_Ph/Eb7S6n&; S=' );
define( 'NONCE_SALT',       'eT+0;T&h{fFO{#RlQdG2M0zh3~$l2:y}8Dc]+KPVj]vCEQ`ol[-Quq.4+S!fwH3N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'osvwp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
