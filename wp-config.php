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
define( 'DB_NAME', 'ecm' );

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
define( 'AUTH_KEY',         'VELRhVA`A=mTY2L0@Np#Q(22O$ J=zUiC^uCAI%BWZ8|OB`G]nPV/0|Bpw; =go7' );
define( 'SECURE_AUTH_KEY',  '#y/bKNGAnP|P7x7$SnBH!h+hl2&9HC7JUE-6q:1OdR:AM,@w0W)8x|3OUw0c:*-g' );
define( 'LOGGED_IN_KEY',    'wAdQ6BMXX ``L&K/jXJnBy75 6Bp;[N]9cF19MZ(GE<J_glejYCJ<bTxP8}<*%8K' );
define( 'NONCE_KEY',        '{sVA)_F %@AsXJ1%u@GE.*7q3(pg&b(w`y!fEjmRK-pAv/@,OcjtKHx,RFq.,dCJ' );
define( 'AUTH_SALT',        'M{R$EEO0iI^Z.Mnai5C~KGGfgv`a+}9/.$&7G2{yy2?*Li/[U7VmueUZT--h `y[' );
define( 'SECURE_AUTH_SALT', 'o[J_.wfOHhP7Qp.j3L?y{Obh+F-:zdd#q)9-t@t9m.fwBg51*H2{UYb?qRR`(NF]' );
define( 'LOGGED_IN_SALT',   'q^#CznE9>pz7_]^dgmO={ov5l:x5KgDv08t,8%J#KA3>cSX;9_G||8P%8P(93?SL' );
define( 'NONCE_SALT',       '4ka#Lp!(MpT?RG#!JTckyf-}DUxo_%?PE/lsO]mB5;x<Tt`NGGS&hLJ)7C~1yz,q' );

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
