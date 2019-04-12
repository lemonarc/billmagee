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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hale_letting' );

/** MySQL database username */
define( 'DB_USER', 'hale_letting' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZjQxMTQ2ZWY2M2Q3YzE2YWE1ZTg5M2Fi' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'jpl1)s8T3PwPpn!eqVe^7K=+qH5~PWWH1gZB9m?j::Q!F;vIM#Mi?QYKBmnQXAF*' );
define( 'SECURE_AUTH_KEY',   'ym=*.(^`fwwW2si`zMb}YU={U4zD5&KbbfP)C IPI7*Zg~DWK#I8^LbD2!-@>l_;' );
define( 'LOGGED_IN_KEY',     'Q@:2iOqmC;,GNv.8uiYhn.B~]T=f}$.YE$D1a<.k0T(U!!%v-=/Sb5SG9~UMmLBu' );
define( 'NONCE_KEY',         's3TQk c0UOt`!j5aqs1IE]K57Zp4vkIq{1r1HrQtuaFHG>GF:*s,:^__lDF#n,I(' );
define( 'AUTH_SALT',         '/<!8uc+G<*zUo`$,s/cq$kHk`Jl6hd45:.y{4U:fSLA@hc.y_{Eq_(@c0BTu@yGQ' );
define( 'SECURE_AUTH_SALT',  '80ZO-Bu#/i+@SU{+7jE.nQSm_b-Cze),<x!S4z4Q:Y_tCfIP!t6GULu@:3ap:Bb7' );
define( 'LOGGED_IN_SALT',    'C2#xcDYmWbABJW2Do2uKFz WM1GzN2,vM?cK1Om+qH;@XdO5dfnSXXsi`UJm<a(X' );
define( 'NONCE_SALT',        'x:Ni9O4/3X6X*LS~LCXRHh*iSd.)D)Y bX^VQ8D=-n*rbUuXgbP?E(gl:&H:Ni L' );
define( 'WP_CACHE_KEY_SALT', '/_DidJcDMIXVBigf*#e~5nt%{&_mn!P=IofoGly-)Q^#-]ll=$I:*u5m`F?VSA^B' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if (defined( 'WP_INSTALLING' ) && WP_INSTALLING) {
  define('WP_HOME', $_SERVER['HTTP_HOST']);
  define('WP_SITEURL', $_SERVER['HTTP_HOST']);
}

define('WP_HOME', '/');
define('WP_SITEURL', '/');

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
