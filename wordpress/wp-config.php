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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ufl-test' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ULY_]k18X&1+3f{8,LtteN)3WLl_h.2d8C@>Z(Q1X9?=yIfC[)gU|0R>NQ7CRS,w' );
define( 'SECURE_AUTH_KEY',   '24Tb81@ht))irUm<SheG:8-7>toI/`|kZf){Gu@2TaXIE?ve5kbCC!QAEPJ-Y>C&' );
define( 'LOGGED_IN_KEY',     ':WVeNT+M0BJ~R}7A=ubwC_=t1Zh*Yxxkq3q_a>b;LoxIF,N$<O!o+8T_a7>]1o1j' );
define( 'NONCE_KEY',         '~a+joBxx)3r3 A>XX7h&Tnf%#(Ez1r3<>dLXZ996qL|+^Tj=0fr agEByTfHg[L)' );
define( 'AUTH_SALT',         'bgIAa2FSt==YAQU 6O$ZP45}jU_?&^c8#l6wIlSd0TW%QHCg$~cwo|5cR][EAsh?' );
define( 'SECURE_AUTH_SALT',  'N]rd3pB~J.MeUM6Jxx7c&aF9.PwU  4jpkFj;4%~tj!@V{Tc+:(G$8#kg8fI%c`X' );
define( 'LOGGED_IN_SALT',    '*7^[riR1b6tW{;HbAG;*dGl6CxF1vYX).Txi>u99P?6z:BMz4]r=BIdsL(|lrF$+' );
define( 'NONCE_SALT',        '69}sy0k|tk+B!PP3mH)&H}9AM+NGX#C,}:s1TC+7Bn[]cqvy=10>W0XtkY*y?[gR' );
define( 'WP_CACHE_KEY_SALT', '6gZ+G4ntDs-([NZUs^G1U[Bm-3wnv2;Ai-#O#t-Rl}#4aL%<9r+Gw-1l!8Iz%K[S' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
