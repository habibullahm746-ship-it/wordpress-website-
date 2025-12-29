<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'artbyhabib.com' );

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
define( 'AUTH_KEY',         '%c|hO)],39OY{M_j{%*j4H.oTZju[rH^6LXJ_k`HbjmOU5TL:M!R($A]g]1W#)[o' );
define( 'SECURE_AUTH_KEY',  '52ZRj_lp>]G1L5fR+A<@WE.] ,_/;D8~,.J0?X#dW.+k.@^DFoeR]/[EKwN~o@>V' );
define( 'LOGGED_IN_KEY',    '^KVl[Td)87/xJ-$d*pG,oD(cB7pG<~0kOu@Nx%I}K9pi4,a/V,WZh!/:V5JM[0Dy' );
define( 'NONCE_KEY',        'Eqi}5d9!<dUdt$_06d4v^QAOkT612U:lx ;v2E[R_BueHwR4w[~=bnkwwOG=Gw0u' );
define( 'AUTH_SALT',        'R/;>Uzo 8xRRe>0)XW^&9^&Q.YYZ.|v(}i7iWmV<!dEA@s@(}6VGIsE2#jYv?4YX' );
define( 'SECURE_AUTH_SALT', '7z;(Ax[ e3%bp~(c.8114x8(kgo7BE!VS2+S@HwK7Rq%-TxJ4{_ Jg>V8eH{]Jr{' );
define( 'LOGGED_IN_SALT',   'u_MwV+}Dz&NXm;:{Iy>>|-jYc2>LoIOV,0k OCB,-9hHE;Su_ ZOM/a$Uw1B:u:R' );
define( 'NONCE_SALT',       '^(24GY*woj_Gq&:Xgp(GZ>G<?N9oRsFy]-=:o++oZWHEc~1&nG} BTqk+k,i/Htq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
