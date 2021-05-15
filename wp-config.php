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
define( 'DB_NAME', 'chiara_db' );

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
define( 'AUTH_KEY',         'C&lK/m%V<8EWEbztTqz]{-6GA?N}[`~p/c7kGGS6y(-n2urB8dZYZZyxk`1Zi<.*' );
define( 'SECURE_AUTH_KEY',  'Yq>2n)|PXVcpF8uiE|*ipNQ@eq|1-or<F|0h:3<]BMHOJ,?,.+5>Y$>mPq(+ak/N' );
define( 'LOGGED_IN_KEY',    '??cI6@xq}8WY}]K@;:=:|DYJ mhA}XQ;tHWbTW$>vO6ME#Qd?`6!UP2}qm<yV[tV' );
define( 'NONCE_KEY',        'zOoND#&<*!~yV=L hd~g{{8HG|M]qi%K8hZ{O>U@@?YOA$3 -V3tSgAl7uu?XMOn' );
define( 'AUTH_SALT',        'S1T*8?JOldV:lXspc+9K|0v(irZ)-tO~f}o*A(&z6Z{GKU:J/ioF^>D!u3y1c }o' );
define( 'SECURE_AUTH_SALT', 'AAla9aPhq(C,;ABws}fFf.*}*9%hSsWa{/}O)hd*OS^OH6u8?nM1qKW+_[8mm5/V' );
define( 'LOGGED_IN_SALT',   '?[(I%D>j/L3{Jj7WzNQtrMedOxKU76W])@9<d-U)%;bsPVQb]bwnt!;beI W yWA' );
define( 'NONCE_SALT',       '%&lWd3CfSCqZ6p8AQSl?i,3et]faqt{*G-c}$ILlLu,WlF,W<5YGTbpVzSI&aB=H' );

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
