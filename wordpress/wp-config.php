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
define( 'DB_NAME', 'SR2WP' );

/** MySQL database username */
define( 'DB_USER', 'd1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Doomsday1' );

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
define( 'AUTH_KEY',         '!9MVm0#71hyMx*aVIl4zw_T(o9Ri]v|4u7@&P?lXd6yXbq?BCgR-F*YctN;f1%0[' );
define( 'SECURE_AUTH_KEY',  'lhq#<%v<,=@z4tK}s15zW.0|=qko%C.o73G(M!6cOxsY)*S7j4xn{3?XfEbId*TT' );
define( 'LOGGED_IN_KEY',    'HY&tmNB@>0_664!1)UA/RQ<[m#T-%lURN -KihrmmeFwq)I_Co(yQTl8Gw_?%45B' );
define( 'NONCE_KEY',        'd8>ikv ATmBg/iYm4b$2u>BQ9%coVe[s96iYGEJnJgA)z>TXt0rU<D|OIS[XKDwJ' );
define( 'AUTH_SALT',        '%F+Slte-A3C!/ga7HE-@O1>|NBB{p/H}B)9UX^rbtv)]FV{vO~5Q7?Mah,9A@_tM' );
define( 'SECURE_AUTH_SALT', 'HdBfAWGOAVvbL*A+0i]k@#<(MQt)*6u1w{BE{VPXk=b7.v!ec7:JWIypWNq9*X,}' );
define( 'LOGGED_IN_SALT',   'p~(sK/}q|k?D(+40I;BXZgr#e7FrDrsW2e]fg>5AO+o]+p^@:Bs~ndIJns^Dgj>g' );
define( 'NONCE_SALT',       'C@i]at[b%e#QfJL@X86$6>/.UwJM_Ff.%Ny|H3`x+(T]6( pr rIvb*m.{GTcgJf' );

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
