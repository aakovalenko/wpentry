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
define( 'DB_NAME', 'wp_entry' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '<.0>V}j`F^~Is+2a}Z,&nYz4QLh7hPf):u+W:rTny+uZ[OF7{:rY#vW&a0;Nsz?7' );
define( 'SECURE_AUTH_KEY',   '=S,PML52YKpU|^zw,w3Tq XlPpZ,q2AS#by$jS}xhkRfVZ&k}kB7B}5(CtUpn%|l' );
define( 'LOGGED_IN_KEY',     '%Xg<@kErR0Fiy&Y9X%|K5otbsVfnW*^T|e$4WGjb[O=6=tVZc*r)Om{pI ae$aia' );
define( 'NONCE_KEY',         '4jQp2~N48q}8^CT2uSGT(bu7 CD0f,(A+{U!pvs}Yi>`&P8^*[Mf74rmhg,Qd_3h' );
define( 'AUTH_SALT',         '06}Gxp0tVA@k9@y%(w1[p#.)=7^XwGBoZ,DFk}J:<FsBsZq7w&SdRVpn=sl4Ff45' );
define( 'SECURE_AUTH_SALT',  '<%i_L2}M!0;-$8Mu|5#q/wjbVKjS?JOycOG8_Hh8ub:wZlBbVMYj>hbZOUO$>`n-' );
define( 'LOGGED_IN_SALT',    'FV}_cKaD_QmC3-oZn#PRkw4WH=/bquXw9O/PSi>uvuj2K=P#],?e)_y2afOQ(9Ab' );
define( 'NONCE_SALT',        '9F?T=&+Cq}4ZDw-w|Xh(T,4@dg@e:+l&P f9^}kpPi}q3db FlCzO.)6h(gfd0m/' );
define( 'WP_CACHE_KEY_SALT', 'g/eOeb6*tNk)p??z#.]|j@P<7t:8O#qG3Z[50xBbI:+QR`, |.7esU.VtZaba%BH' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
