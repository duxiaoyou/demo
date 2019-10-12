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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dbroot' );

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
define( 'AUTH_KEY',         '}? 24QVZ|E>,{@OljP#3sW0^|8%<aQ?<5%d[[_Gn&>h9VXpc%jU#I0g#O6Jip>%K' );
define( 'SECURE_AUTH_KEY',  'GbCBt<~L+];F6#9fh#$14z: ujxnf.6_Jbzn]},DlPn!*_*<-EtNa8(E^$Z~r4TR' );
define( 'LOGGED_IN_KEY',    ' 8tYPmzkz2%7(hE40tWr)%Of1k;/}&@Kg}#GSQt;LSZ&^[b)Pqv~jMi6YfL3<$i%' );
define( 'NONCE_KEY',        '%Qe``KU/j[?#<f%T,)V64}CoDOw>NXnag)7Xg]O*opC2z]/#fO(/:Q9wzJ;O8jJ5' );
define( 'AUTH_SALT',        'R^HHC=^Lx4TIB[8CNFP=HHyYfi~s&F719CWIYaE>GAlkmWHe^-dCw8DNzS&1]m(:' );
define( 'SECURE_AUTH_SALT', 'X*OOI%.4Y,jk{DUY;A(|jbf!D7x[?WyMUwe)9a.%y`uZlA1dkw,rh>I?no_.LL45' );
define( 'LOGGED_IN_SALT',   '-%&g0/.^3dA?w-K4~jGG,KBuqNxou048oRxYRNp^!9JKYe]@=4i*Jf`kWNt,H(~D' );
define( 'NONCE_SALT',       'AC& ~r-T8;@T|K|H4q~v->~)81|g]&9SS-sCF7JWohUZgOdlrhn%.*mp ?R25cYa' );

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
