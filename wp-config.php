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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qhK9c:m=lB&7wx[WpiIy}#vDRg<8*s~y{-@Vs-nQ%PUYU,<K=RdB;|CM~ppvGXqZ' );
define( 'SECURE_AUTH_KEY',  '#vbfFCE6AX(-dw(nhU%Tk=R.Tv66CG*x)_M][ QC:K>~;<|2wz-tsdXZahSqgQ~G' );
define( 'LOGGED_IN_KEY',    '>Vve1YDm7EzXE2(om}<y)ECYaFY{O^{#P~]/ko}Y9+ZD1%HrbA<qY]l07e.,LxM_' );
define( 'NONCE_KEY',        'Uv:0 m o)qMkqE{,y`Yh`ib@>u~+&g=46Fv4)B*NQT}D2jrZ$AdLYu[=]1UHHWx@' );
define( 'AUTH_SALT',        'IT|,eH7mKnf$lAEY)aSK+ZlM,+!Su|ONXRpohHYb:CXqjkCluU##6aodJweL4<L[' );
define( 'SECURE_AUTH_SALT', '5gQ 3[~r& smxJiU:Nyr{r$D%KQUP8Y%JV+.Jj];%G-i8455g0~K/ kaC7,!;{@T' );
define( 'LOGGED_IN_SALT',   '<%3<te]80,HdpKT=q/~vEg`Q;KcJR^K8g$O6aMw]!oZkVJW%ap(GDN-]jzRJeN0x' );
define( 'NONCE_SALT',       'o4:O^:)cjckH,ly1W!@d):-l{*4a9!`B)~bV@*zn4{j&`z;&#{tXscirl12.J3 %' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
