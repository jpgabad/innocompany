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
define( 'DB_NAME', 'sql10390907' );

/** MySQL database username */
define( 'DB_USER', 'sql10390907' );

/** MySQL database password */
define( 'DB_PASSWORD', 'U1jdtj2a1V' );

/** MySQL hostname */
define( 'DB_HOST', 'sql10.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'c!eb@(3[[=s-t_6C 4~D,Hghd_Deu9BnwQC2Zp3!f$-%)uEqHZ5Y{{7ydb2KU@k^' );
define( 'SECURE_AUTH_KEY',  'UuHKA6dp7QM&Si,,m:i@l.)T4ij~2&nohw$7]>4K!$r_%9O~7l-1YCICT{xc`R5A' );
define( 'LOGGED_IN_KEY',    '8CZl$twf.666%b^E6$e|tD` D^}st<NO74Fk h#D8fyPHiAn5;<$]y.Z406c{#=i' );
define( 'NONCE_KEY',        'RaVzFX.pz:$bJ{0bCo9GPKzn.#/lg.%81^[5==I<Pu2I9wiPnwb]F#1DLD5_^GX{' );
define( 'AUTH_SALT',        'O+L0^pK7?mv$8Mz g+l?O|U}Y&4RG|u8DSQ^y>?&2%f/2Z]Tm!Z7w<#J!wsb~w-K' );
define( 'SECURE_AUTH_SALT', 'p#+_Rolq*(quG9&B<Rw,RR!jXt5=&{uoH-YF<Kl92R>[^k>!p>v]3WyuS9q1]Ju{' );
define( 'LOGGED_IN_SALT',   'X)Gy{hQZ91k;zIpdMbak>9;M]O,q>l8#9lc2ix0bMo=}7C@?5Ghg1/`OwsvH&PQG' );
define( 'NONCE_SALT',       'Xr-Tf5o`cQKn3Xhw7_vu(xeqCO|9i|BJy0=}Obi-=BdF?@)Hti(F9MbL&!h%013E' );

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
