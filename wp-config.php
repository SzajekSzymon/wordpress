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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'z-_X6dw18hY:`v||^i&8t9_?OCBym95J,2B.n:c,AZj)`x}hBQ2`?z) {P-C}-9&' );
define( 'SECURE_AUTH_KEY',  't`0:!ULi5K0*T-LS&X=yllzWFX[;5tPw-Pf(?}LD_?*{|bD^yI%GNvT;JcuU?HvK' );
define( 'LOGGED_IN_KEY',    'd`<-ev,Sd;nzBI_]Vir)yH}hM=+jdLy9$)v6CC#CC<Ap VnYl.eh?{~A/m?~aWK-' );
define( 'NONCE_KEY',        '2O9ls.eVfYsm)ug]`9pF{|xHDPCIKmM^l.sj<p28~#Vo}(WFagj4S[y2nIdD=Z??' );
define( 'AUTH_SALT',        'Du5o5/JzT$g7+~`5Y~w7EE{4OE<*~Nee3.VT#2,C&U+&e$2RRXxPsyVz!kO~xmI|' );
define( 'SECURE_AUTH_SALT', ';[wD-Vt/kXfRGc^hp;u[+NS8O,f0]:qm1G9N?Zt#<m8gv6cT@$_%DaatujO>jOvl' );
define( 'LOGGED_IN_SALT',   'fZ|0A2,T%b#Uql@U@XMAJ8`RUizNRQ><%Lo~ma;zU*`e0~j]$9+a%~35!z08cLiP' );
define( 'NONCE_SALT',       '~&FukYdA=|Z)n&vJwizlQrYA2cSKrN~427~|wgwn/0~=~~/|`w=Qx5;4qK!Rdyd(' );

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
