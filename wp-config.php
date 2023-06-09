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
define( 'DB_NAME', 'test-wordpress' );

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
define( 'AUTH_KEY',         'oq?t#(zfe~!ZMV0L...MxdwTraNDi#kU]#WnI8TPUiIw~9If|x=hhU`?pq4}}(KP' );
define( 'SECURE_AUTH_KEY',  'jrisKYn~>g=#sz!hCc){2d>`,*&1}(D|RiqEvPfn])4g( O`0;_jR_U&1$b)y<.[' );
define( 'LOGGED_IN_KEY',    'O]XV>86Ez4[Q}tOt[nzAd4/thYP<4$!zZh6qVuK^r]}jCB Lv+ykDv&C$:T^[ ej' );
define( 'NONCE_KEY',        'h<@)e!jx-ktjwF&#m_EX:utD5@{eQ,?L8j#2A-}$RHZSfJI2BRZp(<8X^Fov%Yj3' );
define( 'AUTH_SALT',        '$lw$P47sc#8(M`;[NnB<K<l?DRa&V]Cs88Y>[I@JbbP8%CT?li}V3ujO;-HF1mW`' );
define( 'SECURE_AUTH_SALT', '36:PBbV(_MDEHsOdzJ9:uCk)=6;{DK>L)jbB+gDv@JE9{^L?8Ys>uD&N@w`|xebu' );
define( 'LOGGED_IN_SALT',   'ac-1Cd/.o$da7?C@%EJ=)J[D+O[!6K7@~Ew1_IBB||HHT@=7a[^FB,*kdyJj6;{O' );
define( 'NONCE_SALT',       '&1Td|P:I93Xj& !ZVJx}Xu1%:X!qx7L&6@at=1OD~rNi[?*Ufk:N1rdCcrjK)E- ' );

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
