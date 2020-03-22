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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sr7b_app06' );

/** MySQL database username */
define( 'DB_USER', 'sr7b_app06' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fsrP62DgZnfQqBPRMKN9' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.sr7btemp.dreamhosters.com' );

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
define( 'AUTH_KEY', '>&jmp1@?*cI:LZE)S.Yj16F71>/Q)Q;(rJ%qCr(e`pmU*]]d4vh CIsh)0&ra&.=' );
define( 'SECURE_AUTH_KEY', '%6u@kG%l7-80Y/vcX^(x5c0`1M(k%wzd4M%$#;_nJ,Op#+IvvH9D6q*mG!E)5YYB' );
define( 'LOGGED_IN_KEY', '0@TC9F0VLbLqYZj<zFXB}+CZmq_~_K%D-M@b$~R=u.e1R~TIhbWab>SZ`?ZJyH;r' );
define( 'NONCE_KEY', '8/%G<l>d[~)C$`._#PAx9_F6v]32i]Rg4~v82HHiTlj4V]].eB$qG4}ck2P>fSyU' );
define( 'AUTH_SALT', 's93Tk7q?z01$|SiZBWQK9Z~ng1~*?lV_h-{YUqY{x7Y6<g*uaRy~Dr5Q`I5XQ?:x' );
define( 'SECURE_AUTH_SALT', '(BL#?-V H[-BTE_3M3QPyfxgdP}nf+So!$GWz*~<iRlwg!h&R#ut&(FuPu%Kz.QR' );
define( 'LOGGED_IN_SALT', 'WIgO}%9Z6WeJ+R!`]l.qHITjR LXYhqe1*nm/]dB~>iw!ypk5{7/<b q@_l.xa1-' );
define( 'NONCE_SALT', '=k48$a5huI>_]<7,}EN={*v/UjG j`xs<#f,5d=.<KQ(1jL4Fcxq^MvwbRKS{NAp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_5d72960e01499_';

define( 'DISALLOW_FILE_EDIT', true );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define('WP_CACHE', true); // Added by WP Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
