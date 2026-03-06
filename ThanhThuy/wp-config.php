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
define( 'DB_NAME', 'testphp' );

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
define( 'AUTH_KEY',         'S0o<m&%WR*g$?A`8[/AD|h1X&&z{JU~5wJsso =+{m=tCv^8ypTNmsV{jc0/&,(!' );
define( 'SECURE_AUTH_KEY',  '+}M{}|#kn![}Cqw:;m&6w:9][y=HeZ,L+pF4!rYp,g6[+YE2#+m1s95V3JR%;z4f' );
define( 'LOGGED_IN_KEY',    'r7zsUT+GhUc`~M.]c)$QsI$T/@J)<21>E#pcF[o9g`cbY~&4o~PRyAu@U%XG$&-a' );
define( 'NONCE_KEY',        '98Rb-&oTqO}`SF+Z{bv6@r$t3Hd!~ :x/sAap|?v0suS0P!&5{`p}{3.R8z!pO;}' );
define( 'AUTH_SALT',        'QZLMH/-&n8t@Os(U#S(J#/;m]r`:g*{)>,OZC>eVox4fjag3nCzM]{yEY~w>ve&M' );
define( 'SECURE_AUTH_SALT', '7$}qkLGP60fo+#sV-G8H;}YB|0*d9f8/S1UR, TKZ;am|JFfB(YrT94v_EX/rS7+' );
define( 'LOGGED_IN_SALT',   'lFSr!`rxpYw]{>_oyq~=9MynSW`$41m<>b)K[dt{*Ja);`w)LVD130;F5nerC9zE' );
define( 'NONCE_SALT',       '[JF%i/8UwP!}fCOEBEFZ=H<_UTU_9x)5j~}>0|/x0#jc,)=9y3D#a(,j~nAT]96<' );

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
$table_prefix = 'pb_';

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
