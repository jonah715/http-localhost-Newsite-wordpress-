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
define( 'DB_NAME', 'Newsite' );

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
define( 'AUTH_KEY',         'r@k&Cc6<Ra8ip6o5M%EpGwo.X:!qU?9*n%e#=B7sS5<G^MEi67<HQc CZ3aZT`>2' );
define( 'SECURE_AUTH_KEY',  'VL7XL9n) OD*Lfq=c_7IWSni2qrM}9NDkWmz/<_[X7r~_Y|}Pgaq7IVDNBi)$~oT' );
define( 'LOGGED_IN_KEY',    'IRGUw>N0SogZ{g^D$cyash8%d&=2&TlkEL{=Z^9!^JC3m#Y]L4l%g Z|z(Xu}}T-' );
define( 'NONCE_KEY',        '$R:{zoaU>mc91M1G=YD7s4{Z3gDl~|Md=icI~X/QV(t=.ckTaE^O$?zson8s,<ze' );
define( 'AUTH_SALT',        'jS?-m`!OP6rsq6^*/{8n/Wf2gxNheO1)kvS![@I?)}`kO9H#xTUEhuj?q8 /Nv)u' );
define( 'SECURE_AUTH_SALT', '!LnvbgNTB?(Lkd~$[N[!WT?IGrnx+>XYQ&T[{`5D_@v g0xeEX8N-;/t`GOz-mMJ' );
define( 'LOGGED_IN_SALT',   't1=CwN#X&S-P3 *W#02 d}#pA0a9&2OfLZWZ+&;2NEv/I]t.l`guQKDF4bX,b>!i' );
define( 'NONCE_SALT',       '&3X+3kP2EF=_+bhl7 dl!GdL)a&_y+tbB9h87L;[;HVciEu:~HbpJc1:Cyc&7}$r' );

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
