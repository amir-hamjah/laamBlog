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
define( 'DB_NAME', 'demoBlog_db' );

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
define( 'AUTH_KEY',         'x,rL2TpX3P:ofChq9AsAb25EcKXG`?H`)462-XPHI|^*vwKEhJ:u$um$@Ba#B~x`' );
define( 'SECURE_AUTH_KEY',  'Ssr?b;~YVNh$hplQHjo!#nJ5:9h[x+w4w|B&*{>W+0oSrJ%yM/@(Q^(vHX9y,a[/' );
define( 'LOGGED_IN_KEY',    'Xy-I4GHQ@ILnns/wdOun=(X[Ytu<xQ_dR$2evx`(AYbh15{Yl3y4[ZKW0NTN.tFw' );
define( 'NONCE_KEY',        'cb.-NF4H6.(8fcQ@k>w[8ADCbo]OC[d8ye#kc >N3v5vdtu#m?[%QCOlJ0t16|p#' );
define( 'AUTH_SALT',        '0Sx<x{hbt@oBlKMuIr-?HgAx1(u|5cXun3h##?9OQ>gIAL((:MgHC[OGRgJAgFj-' );
define( 'SECURE_AUTH_SALT', 'v#t%E] =CKRNZ>zqL%$:ZLn}%qD%*&7R_RqqfuiYUTB+-Wss.TfYtr&uYQXF0dMU' );
define( 'LOGGED_IN_SALT',   '&t`?22X-GSI+/;BC7f8;yGVAS8d-3C-,M4{YqZ8_KlOaV@x;)Pa$}Uv: BZ}lRDj' );
define( 'NONCE_SALT',       '9hEXJ`J-S/pqb=Lyjv4`M9BJjezZ%a4AnWLZSY0>=/._[3(%>D=yOqt)8 |Y:;^ ' );
define('FS_METHOD','direct');

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

