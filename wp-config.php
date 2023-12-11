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
define( 'DB_NAME', 'wp4' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         '*?hr-kGPOsv_RG8@:ZA+#[(lAq7[vaRoL+]!%s|4;[dEztnFYN`t<;/2v(pqC9Pv' );
define( 'SECURE_AUTH_KEY',  'bj?j0G~;yO-idY:manx>|q=M;*xt;XSiypKoVnZ39PK2&grOUsC-u]Cb_$]RiT~y' );
define( 'LOGGED_IN_KEY',    'LGSfaQ`{e7~A`:67W#G#d<WZl:Y9_0+Mrb_1k{#H!+:_A{^hgdht[8N_Z8!_WTId' );
define( 'NONCE_KEY',        'XTRH+;[SpuiI/yvrVk;bc(O]XJ*R_fb@2;WLohWY_pq4GE#`pQ_k%9D1mD.[C#_}' );
define( 'AUTH_SALT',        '5rsl<yp33wvE6e0}pTu<F]zIicL` ,9V>rFH:87l}M1(S-[.cV4gOj<.s-lW0gsJ' );
define( 'SECURE_AUTH_SALT', '=Wg8l@ahlRP3 OF*Vo5p~zD!F}ZsW[(zsf<]IKZ&&7p7I{XoMVqTGmG[O.LBW,J0' );
define( 'LOGGED_IN_SALT',   'B*vo$<nfsO-qVB3Up%.JrAJQ]FUfkO:x-BtoNq^Rvj,]x6C]l`}DDs*FEN7ozO@ ' );
define( 'NONCE_SALT',       '<d4Wh9]z}HGq=*3 @y#Ho5(t{)+K(D<=h!4N~)ON@Xu{6hJegdi@jU8n@?x4}|x,' );

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
