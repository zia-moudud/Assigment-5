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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Covid-19' );

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
define( 'AUTH_KEY',         '0G2`!m2U=&5M-+md>sIs@@VKwna~P| ,n,)d*it6FCh?J8Iqc?y0G{aEe8gOr)3}' );
define( 'SECURE_AUTH_KEY',  '#[~Lx N1?h[W@>eq1j}qN8B)zmt%P66p$(^HEWa(o%_4$Qm2t[+!!k!!QPv3,4IK' );
define( 'LOGGED_IN_KEY',    '^d2%xXO]3|A@D}b!cx{h)n>#e/@ddrAF2z+p=mkXA0*lLelN.pz]V.]P ?==qqU)' );
define( 'NONCE_KEY',        'Z0ympmTo]w[w{FgV`//DNzk.~vUg,ok[Ax8PiQ?znCuUPf:S:HrF`=,,kc&q;R6(' );
define( 'AUTH_SALT',        'v]&#@EP^c|]:O@;&?gWXQ7fB}E%/=K`f|-w$-pMJjZbv5$Srw8||d2aD0su?`_,j' );
define( 'SECURE_AUTH_SALT', '6(o`rk;16`EXdWc217Tv${=pU[>YIvPYcUyE7bHr8T-yVQ6Q?T9j$00D[cciXx.9' );
define( 'LOGGED_IN_SALT',   'O+@L6K LmWiV*WIbkhRlaYI;,%jm n8$@iRuh<dc(jv5nL*h8&8*1#n[XU$NZ%cG' );
define( 'NONCE_SALT',       '/Hv/v^0*lg}ra8V.cN,<wG80l4[pw8_}u[Jd}Ph-T Q$MpHg2hc+?%8rfonKPz&l' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
