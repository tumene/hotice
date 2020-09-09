
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Potentials@1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>`N:J~.+?c?aESVe{5 wwKrv1S#-?9Lu._>2F;p>T,Qz[RFxhs=[^zhC,e<a=,lR');
define('SECURE_AUTH_KEY',  'GAxLOX=i)z]@EV|%X?1u*m{Px*6>pmsI-kA^:Jff]5YCJu>++@-#t^]!:hg4.Q7q');
define('LOGGED_IN_KEY',    'NL0+94J1)D>c>nt+k52Q7-_M%j?QNp|,8 0`1Cu_559(8+9$F`H16Z,ZY9iVM[`o');
define('NONCE_KEY',        ',fMgNQez@p*L-q|oEZNI2u,VF( H6vdXA`EXevjgZ*sv*a&^ 1%kE%Z3N]jL[9XA');
define('AUTH_SALT',        '-| R*sUA5aM}nK~,%.f7FwaQH+p[z9`8,*%7T_w~wgv%/Ghna-KrD??A^tnXm[~ ');
define('SECURE_AUTH_SALT', ';PY0~X[)E8_OeQRvpAyzjEV`]A+e`cT;%y{?jWtAQ[BCW`><X-<ga!&~aWJw4E*!');
define('LOGGED_IN_SALT',   'H~Tnc@Nobl3%Jj=-Xn5z3Nx`ai:aGgW)v<IEO?Kvk`.&^qw`qA!Z/wSG+|f>`KY5');
define('NONCE_SALT',       'A|~O,rif2|eS-G.#Y@2X_ 67uULV,u/hE$fm9ASRt)DNQce5@B+BT6y:CF>WQ*#F');
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
