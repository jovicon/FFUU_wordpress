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
define( 'DB_NAME', 'ffuu_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ffuu' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234qwer' );

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
define( 'AUTH_KEY',         'JmhJ^V[9O++Kb`pT#Mpb_3.Wn|o#zcM?gKt}l?c?m<=Xe}qoj#ig!+V>o$XEptB-' );
define( 'SECURE_AUTH_KEY',  'uiJA1aWFHhr0@1D<2ex}k-P6ZC*SRdL->/5x:Hfx*-MWHU0I|!b| BlX9qWOO3-S' );
define( 'LOGGED_IN_KEY',    '.!B?u?PbfS!Gsv/O,(h,+T<!$^l48FM4{LG&}=ZmD?R-0ar+kVTRp|O|ChA-s-E&' );
define( 'NONCE_KEY',        'Umj1EC=h0A}-bONRqzPVc}2#:.O}F&56QGf]T^F;zc_*E>e1f>Abn#E*>9?h2`?b' );
define( 'AUTH_SALT',        'CuLL%::eAqX&.,(^uvNK?sjTi=2#X|7nHKy9%-t+.QOYst*Xb+/Zlh>?j8*Kkqd ' );
define( 'SECURE_AUTH_SALT', '~h@ cH-1J D-LNAGT`..3aZwO}f:9}|H]0PFSxh)s1fDkqha|n6x|gy^|e}!fe*$' );
define( 'LOGGED_IN_SALT',   'l;%|s;_+.Hp6VlHF)!_r*S[6&rEE3.T|u_[@+,V^rDnKmtXzp#W83.6y#foaNE:%' );
define( 'NONCE_SALT',       '9=8~!gF{6?NU|8e8J u<eJVD5(n|Wl]OiOVu<QGK,88GoH@AP^$ep)lS<{[Wz8lj' );

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
// change for production
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// added by digital ocean - Jose Contreras
define('FS_METHOD','direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
