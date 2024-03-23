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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\nath0\Local Sites\planty\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          'rmhAX`1&b4g]lM)%.CJ|]vet[ZZCV=IFqK0k^~VR,{J*SDYg%}nYLLg*VK@G=-hU' );
define( 'SECURE_AUTH_KEY',   'tv9G#kgA=^v.xr+&A1US1/?iW!#<f{rvs3yBR^2,py^ha-SO+v+_Ztt=a78qpIy:' );
define( 'LOGGED_IN_KEY',     '~+[t-;jL|h&=!Q<jZpqfL7I@6KMy2nmqQ>Gno(@7n,4S0lpoL& x$R^UE]Vu`,I^' );
define( 'NONCE_KEY',         'UOV~H7W (AH[+`l8*HO1JeqyE2NL7YBwDO!(Eb.L76Uri|YjG_fxF]NU&=)eF<z&' );
define( 'AUTH_SALT',         'vpdPz]U55C1F.`U+A_|;m|0BF)2Iw+^=_*|#b2A8+sr~e/plEu4!tBB=RakkIrxi' );
define( 'SECURE_AUTH_SALT',  'S!q{mf/qbraK*bO>r130sR9HD)wp@<a0.7a,[gj?l7V3v`@j*pYSag|J%@3}uPEi' );
define( 'LOGGED_IN_SALT',    ']9g+t+z=>K=jjQCUM?rG}Jf.Bscv_B;r}=!Kk|dJe_U`Ja$Agbclu(kI>4YF/`2U' );
define( 'NONCE_SALT',        'n+>PW[%1k1pf)tNOj+H?#,f:h=J6!hi*Oa?^%|wbE[q @H^PEZcLOTzw&>-bfpg}' );
define( 'WP_CACHE_KEY_SALT', '&3!hzij9&4AbR4{xxC- O0TW[mWlPLWF}rxkX`fwPA5MdWj]RG]Rc(W@!0=`IDZi' );


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
