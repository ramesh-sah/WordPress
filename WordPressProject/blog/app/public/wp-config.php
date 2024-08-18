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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'q_W&Nn`cqO>5?RBp;1_  O,=K<$~Fh,$xPdzPb{T0o`%Iydr%9kijAuQyzP0D=8X' );
define( 'SECURE_AUTH_KEY',   '7S>;$8B8uMlREIhr_69@,(^`H*e@Cl85?6$ ^[6ysDHjku+n5p 9WA^CLcxO.?Yq' );
define( 'LOGGED_IN_KEY',     'Q~)*fP7>1:v3`jx(<Twh;m44>:.I!4]^6KC<W SPTFz6wJQ>aQjCT&z;aP`K4ZWd' );
define( 'NONCE_KEY',         ';4GeubMbtht64!KZ/ma]UameHR_/[8pbYaLhB4I{kmz?>+enwGhmE)+)lQ6fnVu_' );
define( 'AUTH_SALT',         's$AKG&Ca26n>|EGsWdxh@1>I@.O2M@Iy&RC26L%.@ARb.Kr/ZA-|:Okv=[ [ID2L' );
define( 'SECURE_AUTH_SALT',  'P3^ 5T.Zq6&ngpM|^ ZboV</{|*tkP I$/M]ipna+)s6AdghLN0bO:mWXt?8 @p]' );
define( 'LOGGED_IN_SALT',    '~7]@>(O>D<-;M23Pw~hKn@5%P0Xa(s}~s(MaFA*Ifui!bZ(q@hyclDJC:(~_;zi7' );
define( 'NONCE_SALT',        '.vGgiG-7J`>-=R,~q<3qPSsS~o!@^;G3D+C#}]JG#]v7la^?vt?a!mx`%f6T6lOr' );
define( 'WP_CACHE_KEY_SALT', 'bv{zyw<E{Xxwi^?aRl)NgO8?EP+@m)WmQ$OMV,_T%H1U2=J5Tyv6Wj%u,Un~Pjh>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
