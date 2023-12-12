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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lks_wp' );

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
define( 'AUTH_KEY',         '{%r-FGXCW DO!5[$;1qP+5ph{uZ6sIBAk=E vc1)i?CDk7t:10cN;=DT;O{pknv{' );
define( 'SECURE_AUTH_KEY',  'I%H=4Q#ls^lIur$cg>~(oqK!gJF2[U%9D&lxL@Ap3#4n)j?=:tf9o}OFy>4O^c@H' );
define( 'LOGGED_IN_KEY',    '.:!PvFmd#BI(( &-uGWa>79+D@PQCX6#8A;${C4S^3g(0vTaCt4:K,RBTaI$8BL+' );
define( 'NONCE_KEY',        '^cbi.B&}J9pgx+~bf[FyQ^0*dUeXaYO7;=FngWx-&f=68Unm;NZ)+DKc,u.|2,ir' );
define( 'AUTH_SALT',        '}nWytcA7QVev18dbh1bEz.FKc5~yHOSM#vX;A_LdA*9pR)|u7kElyL{28qNO$z@A' );
define( 'SECURE_AUTH_SALT', '}`:Kz42&9,(O5^SeLC WN!9(A)L9rh1 ?rU,8-q=K^0{i,_,K7A}m~W<BD%#4o!]' );
define( 'LOGGED_IN_SALT',   'Q<ewNlQ12+}aalVXdAHZg.DxYKngw/I{71zC~`S2DT6bSVeaG[J[[f;C;XRCO3BG' );
define( 'NONCE_SALT',       '43XABV~9D/ s2$WreQSxCCYuW% 0zz#:D#<s61y`y9J+tzl5/eC<;V*l*VsvB~Sy' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
