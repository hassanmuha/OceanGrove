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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'OjR{$$ZOHcHa>R#W,/fH^{#MT4BZ%x}THyox+kiQN1k[8=U4`2{=a>Dm:%#CDz6q' );
define( 'SECURE_AUTH_KEY',  '*# 1s.l,2O(yWQE?kTbr7x_H|0wE=g~=5v&Np@y/hR38^_)4:EfRoYfsJp|AE@7P' );
define( 'LOGGED_IN_KEY',    '<A$i[0D53|FZ:Y,fT~&8BsJ4R!H1w-sJYh`USG$f2/WcIb0$3ju6%;eX%ZTxmTD<' );
define( 'NONCE_KEY',        '_:^hM.YUvm7mMLN~&>6)Kr}%cm<&@2w)SBB5`}Kn.E#a WJGgk3v7d?VPffD>,{Y' );
define( 'AUTH_SALT',        '-2,6Yrg0(x3^Ar7u&)WH2LQVx]e_>G@PU=jks{QV.hGj>8P{&}&u~d*zqnb^nDYP' );
define( 'SECURE_AUTH_SALT', 'WkDcy Em^L6]L|`.$7CY5_M%C)hwsui-o3<M||RIlTS9pd7M?/1RDF_V(/}uV*(s' );
define( 'LOGGED_IN_SALT',   'w02QT+S*($q6oJQv4sb;h^mxU1.e,%W2jM`imM~F&s]w_J?z0)$S<{amzdBx3?B0' );
define( 'NONCE_SALT',       '@^Q9IuywR)-w6rfZJ<mQnuw3R^u&f{9X=T`Mu0>-Qqx,_8b<)N~:]xL-TL3)}ukO' );

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
