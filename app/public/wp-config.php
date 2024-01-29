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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'NU]@IUbJ9|gS^brP>[a)G)e_MJfA`Dz6@3_-hyEo/2gL;cWvF%-UYQG5K;OoRm9B' );
define( 'SECURE_AUTH_KEY',   'Vm4P/!,H}y--Oy4ZC6>%s8K{mLOVb&JUid]k1v~q#@RFu1stzc~C5.5f{<IEa*&T' );
define( 'LOGGED_IN_KEY',     '^a6+oJ0hZIT_On9Mrtf(#,0HS;%>^So@<F3e-tNV(>^VE g!%kj[dxu^Iz215n%R' );
define( 'NONCE_KEY',         'VjU_469(S{[!#x}q3-y6{B2.#g&?-)SO!}O44WZb7=D*f7XvWy#DfBo7<7g=tKF|' );
define( 'AUTH_SALT',         'o7QWfiYeikcI}:n4rF:%w@y2H]k?lNQC7$SorE,VZ^DX.L;n11QBSPFy]#xdP<wv' );
define( 'SECURE_AUTH_SALT',  ' ^P3nf,YbQ}2YmbhA|brc[Yu|{Gi9&3s;pNw1|/HYhhK:~N?NefVbqE1X Z,/NO+' );
define( 'LOGGED_IN_SALT',    'J7<2}zphmL^0Db]ZYtDpEHG,!N::f{1_yW,l!9e(? t;JTe5`|L+r7}tz-U/.wXP' );
define( 'NONCE_SALT',        'C1S[=l-t(Y9S@.=Y6n3B,D|Dxo#TF_`#[I*>=iZ*Kv3YXZ6lY+NF86jN~2F#crFj' );
define( 'WP_CACHE_KEY_SALT', 'rMd=@u;0pd M~;#DOkQa`u&Z~i:Lvcm1:yyI,27;vzXM~U=D@ff!(T9+&#Gc8[]x' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
