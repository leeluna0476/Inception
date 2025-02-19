<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('MYSQL_HOSTNAME') );

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
define('AUTH_KEY',         'dEq>8Buo]# 0FGU Hsma9xS-t/p}kMkoA?c$},xQ*aJ9n2>$,EY`8`@2PzN?aT0:');
define('SECURE_AUTH_KEY',  'V7&*xH<>ua%5woWTsNh$|| OMO:tZ.w] YGOXQ%ky0w^-*<{?4|Dy37oaK}:6=|_');
define('LOGGED_IN_KEY',    '9|65Z47oZ7.S8B)GA+k9;YoJ0(k`]^`RMXbB||1K=[)O1L|uu;olV=/.C<^&,HW3');
define('NONCE_KEY',        'o+k>yyTgh2rP8l48;.gL:U.RrI:bqESIg[ 9/+$5W0IHD;&t]/umjTrrDjLMi<WM');
define('AUTH_SALT',        'f ZA7<=9&#k S<@-dOo@98F(-S!O/WHv]fuima?>;`|rKJJ5psgwJ?woA%+Q~m${');
define('SECURE_AUTH_SALT', 'dk?$4~Ku+0Z:aMMG?UOjby^5vHzn~C5,Y9!G7a1,(:<9AoKKH+Y$b051UaK+x4nO');
define('LOGGED_IN_SALT',   'l;|>H)7+7B3b$c6el3PG5eOvKV4*!#fr)^y5#E]pU8CmsO2]xJg0q>pIa4{mUI:I');
define('NONCE_SALT',       't=eaZTv)iT[%,K!0kY([bMt+})~Yd~4S5tDQ!LSb0i7]}?8kj#~VMLqvHz/DGH2*');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */

define( 'WP_HOME', 'https://seojilee.42.fr' );
define( 'WP_SITEURL', 'https://seojilee.42.fr' );
require_once(ABSPATH . 'wp-settings.php');
