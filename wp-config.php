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
define( 'DB_NAME', 'twomarch' );

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
define( 'AUTH_KEY',         '!h0ErGGB%_GqmbuE*S0/1C%IH/7?:(#F+9nA1I-_]7O2DAw34.8t2/z%t&*BjDtt' );
define( 'SECURE_AUTH_KEY',  'LZ</={Q>dBa-n4A91v~rVBmC/1hz[I~szI3||rw#0_iks2F-[If,GO;`?5g1iRZl' );
define( 'LOGGED_IN_KEY',    '8I7S K&+l{s-h/^S&lv k|V}3^5KT4?!_<kbqxbqM70+gXq!zvYTz8:&M-S0**F=' );
define( 'NONCE_KEY',        'B]quuk}F$zg~GHY{r1yT7:e]8nG]1rBpLQ.$AX$xku9@>V^*Gmx6FxH$IzI.2KdQ' );
define( 'AUTH_SALT',        '>cILKDltLV<dd&oM6G]:I@YZe>KIX=LU`?UiUyZ=!IsW[BH6tV}ScJc`tkB73=5{' );
define( 'SECURE_AUTH_SALT', 'F2%{5+$p<q0pT$p2:B(`)_Uld?f2LiHGGtJM%Y+#@<snmd}O}7Kk=2S`(x,cgy}>' );
define( 'LOGGED_IN_SALT',   'p:n9 9nYLhg=SW XS#K7;!~z7px;H5<PxGgw}t(,03%J`8&%R 8po+tdBLH~4Rz?' );
define( 'NONCE_SALT',       ':.1;eAwud;_^ILGeQ{63m|TI?VLhzGxEv|[Cr)C%u4+~@HFaTL]Pj>z7a7tl2I]~' );

/**#@-*/
define( 'FS_METHOD', 'direct' );
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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
