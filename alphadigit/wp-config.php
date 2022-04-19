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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alphadigit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '_KLBD;ann4:Y$M!LL0Ks`s]=h^C2-1TaDNAN^0p&@qM|XP/>`_s=ySl&`5iTh!G{' );
define( 'SECURE_AUTH_KEY',  'MCyahQ>$R=><Zz<iPAZ1:}=fEx6h7/2P|i(^[5Y:JaUdia ?6-GqvwjM7e,no/44' );
define( 'LOGGED_IN_KEY',    'ASFGS8O.NbPAyj9#,-P]u ?BH=NV,9K7|p?hyUcrqa<Z>JS=iL#KXvlK3i$W?LKe' );
define( 'NONCE_KEY',        '~wF.~?fyRpf_s4&Oi,gE3,vr)dSI4mM^~XX~9TRpVm?!2jDZr.f{Q/4FwRkh/o27' );
define( 'AUTH_SALT',        '4L (g%0 t~6*^}t,wH~bt*lvr,.M4}Ug[v!z?`=Ol`B roWhVVXF-BQD*C4#KZ{|' );
define( 'SECURE_AUTH_SALT', ']9K^V2 Vjzumm,H2v)Xs3>y.;0p$fk,Gu ?kCI}XThg[FBZq,=N*lX$qgFY$L&;r' );
define( 'LOGGED_IN_SALT',   '*GL4+JqEKFj0+`v#Letd3Nm[JGRs+&i5>SCZd3o}4Q)p9:;Lg9Q5Z6*^_*)~+/L@' );
define( 'NONCE_SALT',       'ws`OM.;TA6Wm%=>+ssc,OIA<>;2#c~tjDgW2ZCo/T:5}B+ya~N(/JsfxSxv*}@yv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
