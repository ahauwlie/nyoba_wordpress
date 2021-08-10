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
define( 'DB_NAME', 'nyoba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'I1;QtzW);#~j,9|BjI(3y:$LP;>DAWk@oaw2`gSBK5{$,-+[tM!=D?+W*.RATYJS' );
define( 'SECURE_AUTH_KEY',  '_O<keDR+Jkvqc|X Ct E%K$*O/{)z@GE0U/-%ahq^p3U7LV:QaK]R`)vJ}%cj:46' );
define( 'LOGGED_IN_KEY',    'k$Kgp=p-m/V:{No_lk5>33C<ue56]a@Jr!|EPt|Xp#O0WU!Zg/45]--<zN+x`VD;' );
define( 'NONCE_KEY',        ',#iCg|&hrC;KplVIRu*RHP$5>Qw8is.@`},U$l!MAU^OZ*9+A(SH0<5BBG#^v6Dv' );
define( 'AUTH_SALT',        't %i]#xxwit.%vTAR>`t:j8J1VFv~-lVbu>J*jA`D.Tc3L!ye.Cbdo9U8g?7[13~' );
define( 'SECURE_AUTH_SALT', 'SFcWkk/Ih):2#%7mK)@pe;|yr nYGjrr!E;z^2}A.>MXoF2&,,&z]<q,^QE 34EL' );
define( 'LOGGED_IN_SALT',   'ae5v6KyYdAK!>m`v?SuvDD-NL?=RClNekgNmrn@Gxkk/-|ZGP%F2lGF%>MPCu]g_' );
define( 'NONCE_SALT',       'nz9Q|HYb%Ta!Yw*m&J;p;EFuu>>N3y}~Io9$]?)`%T$WL!#-n8hw20-4Ph6DBt+I' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
