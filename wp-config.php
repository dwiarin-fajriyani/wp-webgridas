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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-websmkn2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7hP}0S;DyTlZ5wkBV7`,)n#h$q-+*@G}}4P{I@x6Y3GpWIc*{Q*bY!@%7N<pq.7-' );
define( 'SECURE_AUTH_KEY',  '0}&_lC5Hs8 6;AMwZ{%t9U|]jhF-0#dL5hVo&=(Jo%.Tz}r,]f4o2z%:##VEJSK0' );
define( 'LOGGED_IN_KEY',    '@*+aI6yvqmRg+?@5Gl5xQ7OpwC^yC%a^W[F*BXCc@ypZ]<D11vPDc0co-}`p@P1_' );
define( 'NONCE_KEY',        'EZ!+`P<),;_H{]s~aiy2Vsbxvni]N7yGnN5s8WDWylIm-m [!RDIWXBU^ptOh}5P' );
define( 'AUTH_SALT',        'wjg;AzLH]t`dyZK*3FL[m?akBgjlePkfYi~]Gx5*OoPCE7V? D]bpC89odFAp[-1' );
define( 'SECURE_AUTH_SALT', '/JZoy0)_L,B$wPwlb}ZR8?RXQ(v() (L.SKpQJ1gCxTgGa`=VBYVJ+NKo kOUQzQ' );
define( 'LOGGED_IN_SALT',   '}1[sPkQ KSC}$;Io6crL%G>$GQ.+f0)Ea4_9X9L/HIl$ffO2aVmGO^VLG!B.3*dh' );
define( 'NONCE_SALT',       'szxFu3E ?l~U1ZLoP?V%!JI8Mp95D-VGJ):k${-R=pLJAu4L9eQNT#Qw+_X{tseI' );

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
