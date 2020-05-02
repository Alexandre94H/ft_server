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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '4cx1jqb4uF?YBDa?YXf]f4=*L8^UTE73cOncD$nR;92$RuA&fG2uH=kSQ91bX?ag' );
define( 'SECURE_AUTH_KEY',  'rs(M- ezgd7cUYp*kPz?NWJ.z%Uap?OcdWm_:g0;+rG~:^Hpp8hHW<<%?jQ%~[i.' );
define( 'LOGGED_IN_KEY',    ' QXJb4I$+873`>U,l(+WdRr8dz>S[l7 5<zD1V^JX$S.5_JX$1kveU1G.toGle= ' );
define( 'NONCE_KEY',        'blM7lChIXMd2Q6Z_}/vQp7,WM^i<.d.cUDH=Vc1p=L,(?d40%Bw:A4BYq{e82xRX' );
define( 'AUTH_SALT',        'o9[iZfG,?go@CLgB MpY|g<U(/tT~g6{8I?q$>h^12ak+huF&}5SNu<uQ>ko$uHt' );
define( 'SECURE_AUTH_SALT', 'Wd0[teh8V2}Eh-QE@+0ZbhMaCb-W+wIG=Q%L&@4CW fT#bG!4P*94K2:0?e.mjXS' );
define( 'LOGGED_IN_SALT',   '.}A!v+y>([7|*g:@^xd*EF0SyfW4a!dqoPzQoM 8eNtTpYKTX?yXAm*)b__6KGqk' );
define( 'NONCE_SALT',       '(+)d<,4WD! Mj4{1xjYWGUqqnQ3.#z:%Ezsy5]nB/]H={NsGi;l7FKhZTaiMxY]N' );

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
