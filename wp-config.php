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
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'CSO4jJ)b_`_A%JM-Pv(.H-6<]M?=0P,|UZc?SG{c~a R`2j+N3;WzOj_I2O]2qwp' );
define( 'SECURE_AUTH_KEY',  'H$LY+K.Z/)Zg2DBYBIPp3pcB(cMqafIM!97;r=!-l[p)a4qH|ymOb/zS9iTK$3c}' );
define( 'LOGGED_IN_KEY',    '@sjwU^8]bT+n@b(5ek(,2?rFaJ+[|;d!l]8y%sP!vc&et]4j:OYspJXbH{qyhT%L' );
define( 'NONCE_KEY',        'h6OO)AERqxMp izjoblp>_U]6{^RfPtLz5_B  o3{_e6,KnDFDbw$-:}]Hg0tGn ' );
define( 'AUTH_SALT',        'ss`rItNx,N`5K`.- (9NM&)D7;RTq90G(uS=5b5H3LU(vm}doo6Qh(1?j$Qg$ByI' );
define( 'SECURE_AUTH_SALT', 't=|YHl!l!*)(HL%$dQhF|;E2 E/{[KM$yMt&_}/b5xk-ieOOJ_{wlOJP3|xC,3<9' );
define( 'LOGGED_IN_SALT',   'o1Lv8Q]44d5Ry4KF3QKI-#4J!G|V6#U*uBPrlm& (lz<yxu.jwZN8-C/T^puH,7f' );
define( 'NONCE_SALT',       '6II?S[#,lHl-ot~+BqaZaQ#bMH{5z4xmw;A()Au$Y$;zw_7BC[]->qm{*Q*B.t)b' );

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
