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
define( 'AUTH_KEY',         '3nagYO_^H9$7.Mvfa$^6F-Bd3L<%JW4Lb e -1tInNmp%0T(0d*i3M>HE&)DUfBN' );
define( 'SECURE_AUTH_KEY',  ': H(Tj5Nu9098E*{on)JW7-Y#`]H0ya)AA^R&0Z_Ei()c`$w`,E-SxsLo)=kVd3O' );
define( 'LOGGED_IN_KEY',    'AycV,aKqAG%[o]W]W2}pVB]l,)Mj=Xw0o#bv>|PAPo;0t+^Ih:17nyom8O&DK`YT' );
define( 'NONCE_KEY',        '90xM_q!m!+QF&UEn;Q*&%:ym%c`{ND#ZAkp(p#uHe<LXAwk485nt%RsF%M8MYr`E' );
define( 'AUTH_SALT',        '.IZFCL|CHRoA{`Gb2`#q9b!O7i}dz(W69P7i~J!(OB?nYKY$J$_(wt{q77o|=cZq' );
define( 'SECURE_AUTH_SALT', 'mWGLi&5_.z^BU(6*>=F{L7 Z_|m$(5>tmQ-896 D~kD0^}B?QXO=87&4Rc0rl;F-' );
define( 'LOGGED_IN_SALT',   '>tX#r5&1-e0,`>ncmo9++snrE4/ND,6_p@n ]7/b,SM+|4W<uz s81Q7A#~b/9`F' );
define( 'NONCE_SALT',       'tMp7QWC32,N>)c!al[f5Eh~L}GZn7il&2]hl[;}4[RH0_x1~YEaIz{[QO4QX.#>K' );

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
