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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'YFIWUV}3<H*k.jgsgZSe' );

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
define( 'AUTH_KEY',         'e7aRqrfIC.DtqysQ7MVo>PBgB&/:$s-bH1.jH|Xn_$a4r^P}YhuF(cPTA,Ne5-N<' );
define( 'SECURE_AUTH_KEY',  'LrA7Hq?^Dmq@_qNQs^-1.CSQNv#Foy3n}a:U;bWa4SagHi_W_>[53h7{],n]hiYH' );
define( 'LOGGED_IN_KEY',    'qs*OKFB5`7o_;jS#NwF`:gqwVrs GLZ: Ts!:*#Nc>=y:GP}92yQf4IRP]a6Z84P' );
define( 'NONCE_KEY',        'oO}NWu={@!ix^xlocf}etc.B&:cLk&mJFe%%=/V}sKgd^taxX zdMWqD(#{l{e:p' );
define( 'AUTH_SALT',        'e2.t5G[[OzbH&Z=VRWFd>f(xk?OXP^deyOgE:SUkBPl/KV(2AfOVS~,Dlof164D#' );
define( 'SECURE_AUTH_SALT', 't)$2zkzi<q#sEnc5k[?L|Rki`jvj=.%Pu0UED,dw2`~iKuds@qhld(Baw8bE=}@n' );
define( 'LOGGED_IN_SALT',   'gc:IwQ#eC~ZuUj U&e:{dlM00,rqF!MjJ*~ZaMw}j1/PULBRsrTqaX-JA:{Wyk@x' );
define( 'NONCE_SALT',       '3gfO.mF!2d0B=QXIy7 &QkE-7PX)P`>|?5XuD2]Q}`6jaqLO^`{%BkH.8vC5uUOM' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
