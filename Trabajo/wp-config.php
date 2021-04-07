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
define( 'DB_NAME', 'Prueba' );

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
define( 'AUTH_KEY',         '<n`^s>-h@5%:,$l{<h$kmAqxR{q<8~#xBD|%eqXz7| 32i+R{XTiW/CnYTW|f?-*' );
define( 'SECURE_AUTH_KEY',  'EWup7Pw=<jU>$a<QqU{9G5!{Pi,Fi?H#@sw.(DK7^4N1GJ-rZEoB..b_}XH[:(Qg' );
define( 'LOGGED_IN_KEY',    '>Z[)l^_hNK?O/Y&7.*%+KY=.jGS$c<5,wMS^):HS+S$9&sNGH>6=Udl&q,UY6eKw' );
define( 'NONCE_KEY',        '[Rua>tJB@Q2Cb`jH$isXXvyJUTq*6U>xwKaGT/~AaDPL]No{FXDirJcaM[zb~u$>' );
define( 'AUTH_SALT',        'YOp:[u8>!X%la`fqB}]^segd: =37J?d#V,E3:+6jQ{J!5A;K/:wV{$.FOwN3BF)' );
define( 'SECURE_AUTH_SALT', ',z)rpd}$E..-oUt6ecQl]<ZWwkhj)BaIy<Nvx~~pkn:67MI3:?)=4$},^RMe?gm#' );
define( 'LOGGED_IN_SALT',   'qRPgc-Lv=Q$n:an`!S@_(>d`JL#i^F,#LVYEez82x:ZT9$5j7yaLI[>g;3$Tyv;Z' );
define( 'NONCE_SALT',       'j]C=@OKgi-gIr3lrOM`DpF>XNfXj74!)!8?j/ t9z>IB7BNy5Wj|G81nD)mtk%u.' );

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
