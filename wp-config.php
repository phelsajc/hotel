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
define( 'DB_NAME', 'hotel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pa33w0rd!' );

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
define( 'AUTH_KEY',         '3v;Tr iip:.%6pjj/K4g59p%dLvz2m;D&wYR]dwb6u,lp3#[ekL_ 6_su_h7v_y}' );
define( 'SECURE_AUTH_KEY',  'f4`R1%kaJNDl]Dr)MH[nhCmOe;Lz*G15pS?~`L-#tK>tVRyj 6S*LtdW7gIWqUlb' );
define( 'LOGGED_IN_KEY',    'P#<+Bw+LA19N}{`nkYY(D*{2uvaCrfCCc^*&@IA#Gob9;Wft f86S>I6kDG2mFYK' );
define( 'NONCE_KEY',        '`N=Pu81O~&*H~bJE@TFdUD)=->u:5jc-;^&uvUIj<iPxOk>A*-Tc9%Gm~*SG5jcg' );
define( 'AUTH_SALT',        '@*^&z4h5/dK<.KJEy2N:,s>6|l+@b[OkT739uGa9;5#LSJ{yI6*v`FNJ/-`=!w1*' );
define( 'SECURE_AUTH_SALT', 'LL2~i ftj>b}s zc:xS.G-gjg#H$e&)C:15drIh01:[OHhdAW33#{$q*>}{ylelr' );
define( 'LOGGED_IN_SALT',   'd[aLO)hmRqm?PZDF%@?jcLznV74p,U?1vBk?Z%p-9% z&]lWXC.#.:~ZzYGAHOkM' );
define( 'NONCE_SALT',       '}HDy8+d<g,3hlkiX_NaS7<Ua],ijC~5~?;zsJf3RA_Zg4mQaQ+?A>7zPG{#(s]]!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
