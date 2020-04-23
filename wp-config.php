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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'realty' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'W}cB7<pG8_K#]9Q}NZ1)svnH5,IT#W<s7>EUUE=re`gi?*dcMB0m3_Y<Lin^BPAX' );
define( 'SECURE_AUTH_KEY',  '<lTUN|RO;a[~p)tLkK_/1,s+}H$K[L/WL;=Ei|:D7BBMqTN=ZgDYn64Z=Ndo^|BJ' );
define( 'LOGGED_IN_KEY',    '`3oyuf.K 8!XpfB?)H&:_9/{lKBSM4t^m?)Xy:r1vHI-+6b>?hyKrgC^|e$ug:>i' );
define( 'NONCE_KEY',        ')NY9*`C2`%FnwTZr`;`7R9LjDGw3`0N$p[q3yQ,/uYIeeJb!i~B[)>W9I; omL(V' );
define( 'AUTH_SALT',        'g+a8}oa2[ij!a/qzpiH?5`XSlvRB^*S<(VryhyCe-AN<{O/t76gW/y2Mmo B3_Fw' );
define( 'SECURE_AUTH_SALT', 'uKi5J9?:YZvY^30kl>p4XJ$^JMQ==%+}V+S+hzU3HQLO]X&}Kh6|ZGjKdx3?B5K0' );
define( 'LOGGED_IN_SALT',   '[Pb+XZh0A*{%I/#W}]~)j5P1s*^v?$f<Rv{^5L&#z=,ZS3!|aI&HlB3 ]t|5MH@t' );
define( 'NONCE_SALT',       'UippUCA`tv@;EL]|2^`C~M4Gi~=R;P-BAY$bft/UY9v0fi(_[}/z-9&@?IL6!&@?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'real_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
