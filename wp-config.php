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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hj^YguWzF-70X[%9u#wKq%[X6~B5oA^a3TVkqo,n)jCp9<16$Dl.$g<N9UKxyGUy' );
define( 'SECURE_AUTH_KEY',  'UYixlR?}pEk^rbC9iRh6=Kg!jk+}C!pSv?B_qpTZr#uWkB6HajR7|f5/ >$DlG-K' );
define( 'LOGGED_IN_KEY',    '`_5T7kJcQCedn 93XfOt$:DpDDuYm*w=-o`XP;rXUWz9c<=ps6ab$2qsD}ar*%Hw' );
define( 'NONCE_KEY',        ' !Dnl4uTY/P9io.YnM:xPgj-m4+1AD;NeGDh:3oYalY[S]evJ^NxL5+#1yf^NNMg' );
define( 'AUTH_SALT',        'E85lQ2g~N/BDsgi*,#e0~anZz8TI34.^bK[Lo|ij2a4/Un}2g[4pagaC5X/XdbCq' );
define( 'SECURE_AUTH_SALT', '_qd%r~??/VNk4|([[IUu[i 9nyrmV2L)EFBd8IlXPQCJT]Y$=_f4`FH~; JY,fb/' );
define( 'LOGGED_IN_SALT',   'xOOvRsx+HuQhn!Y)az&PX`$VH1NO]wU|iT(ki1v#qn8mpA&/#faTw<=},0dE1qkj' );
define( 'NONCE_SALT',       'QxMG]nfe/4. /(aydTpxm:MTt6`vUrxtr>(a:}1?z7fnNg6.{zL;T0bAcc5Yrj;/' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
