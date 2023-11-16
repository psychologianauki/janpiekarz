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
define( 'AUTH_KEY',          '*%v(Om>-462FTlP-}W3rf:(<54hwth%x5vmi?[FBh`^Io?ANc>5HL^^GF%8*E!Q1' );
define( 'SECURE_AUTH_KEY',   'o{M-%$!r}ODgo$4g=IA0O[Xe|-s4(nKD;XUFW~sICdYd.JZ+V5~/u9qc=<?aNy3k' );
define( 'LOGGED_IN_KEY',     '6CVY4E@ 5-}8io/{)j=|o{HgW XO]8^o<f-$OxqDn>bN%W{fl]U<C(/xN1YRZGV<' );
define( 'NONCE_KEY',         'lmZG32@}e>?P%XiBK?Q%B`?+3L5?#N&FC(&2wLz`}S )HBylqR8y7`r?5;ml70}C' );
define( 'AUTH_SALT',         '!Z^N%ce42+bQEdR+G_ucf7AoW`IK_K0 niIfY`nx3y8^-TC0gDWxW#`0(3~6AnU ' );
define( 'SECURE_AUTH_SALT',  'Bt R!rdITs%* z_Bes^wEiL1h~=Mu@W=(lpH=H~zH9<v{=L33g^ kYO[d}v,pZv1' );
define( 'LOGGED_IN_SALT',    'Bgf$-?G),<]=0pZ]l7}rA}1Q!-YDyi]wOb3A*lN)l@(>(,.>N6PEo,40nD0@t7,h' );
define( 'NONCE_SALT',        '7C&H#TZeTsBPA:*SmvH=q@H&j]UqssK>z.qfm#K|SL[37s:{,I_(+At7A)a[AAY*' );
define( 'WP_CACHE_KEY_SALT', 'iJOv]zp;&jP76rirLW01jz|6oK5Qn*HV}?i.T9zn7lXBqymgqtF&$T:>h#hTUq]Y' );


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
