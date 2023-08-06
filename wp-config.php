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
define( 'DB_NAME', 'DickiesProyecto' );

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
define( 'AUTH_KEY',         '?jc{C<$8uw^UQzL)=R<mRHdF/]<iNbt+WH+C^-#d=M4~68a<Z(e`b b/(W))ShfR' );
define( 'SECURE_AUTH_KEY',  'Keu.:dM.yPiC[^nP{Z_h+ Rsx-gnb_IiBkMaI?N]+pvO~usd8Duv`Z-<4 P:E*_W' );
define( 'LOGGED_IN_KEY',    'H3Rh t9J*L:?Q|029QN,s,=9=. 6vm{+*>(I[*#HTk5A])9F( ~#ueU5`peX:FZ&' );
define( 'NONCE_KEY',        'X5s[>j1g6n<AP&JGH&q|;#-PM6$)sr+Ob,iu(Ox5f4Yh6.1fN(I2hkYF?L&A:kg/' );
define( 'AUTH_SALT',        'R6Uc>PRRQvrHi9$nJd:I{)9:l IxSu;_rHAGYY92>+]%Hk[,|dEeo4fk_jj7x6C2' );
define( 'SECURE_AUTH_SALT', '6%ftG,)C24d3$lal}d*~lEayIG]P|d)>[x7j.X*gDk_S2sMV.,{;(WgpOf)Hf<!?' );
define( 'LOGGED_IN_SALT',   'x&QT=2?ujeyoeD[~VWOsH3L@vD8nFwpE1D%]yA+c3Ud]!08/8@ZgYT^_]K6+/E~$' );
define( 'NONCE_SALT',       'r}a@]pk~P7drvI&qOM vDWt)_]/p0{l/;azluJ?Q?;gy_%vBk/>G%N.i_r>?2co^' );

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
