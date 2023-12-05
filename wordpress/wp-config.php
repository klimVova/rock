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
define( 'DB_NAME', 'rickmans' );

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
define( 'AUTH_KEY',         'qAE>R6BXK)X^8$14WjWgzkX:|<zi&#%REpHh<}Js Owy5hE+aHkrINo;`Oj`3cUM' );
define( 'SECURE_AUTH_KEY',  'Nqnd&j@@oRO%t.h7<~AM&Jhd(8BGoF51R;xhFX3-rHbE0n!j!`)i vfj92CsqkuK' );
define( 'LOGGED_IN_KEY',    're+KA(fZ(Q>H*o$bvU+=5?|KkDb_qJZPG})ZvIRx)3zKAoA_,cfw9@9_M6W_>xF@' );
define( 'NONCE_KEY',        'I&*H*,udO}B}6V(8=QG K48fx&q+{JfmlXH]sJA@iL0&=#6Q|=8%u>9L$:tYMe]%' );
define( 'AUTH_SALT',        'nBk;3q:qvlVyO|nS BxQ0*HG6=8UA$rMazvYQ(d7)_`~!~~OB@qDRsI4H$D$BPz*' );
define( 'SECURE_AUTH_SALT', '6Y+Faa^G;0%/Y#`=)-t28Kztgf_uGor)-PZ_!phZX00;CDjSb,)(>ki-{+Ld,Er>' );
define( 'LOGGED_IN_SALT',   'Oq{1a.hbUa}.p@lKk4U?O?>;6-gN5o5r6*(A@;-Zf)tDz]2x!S?xo5s^yBlc-itT' );
define( 'NONCE_SALT',       'VBPJ$Pv]8TzSHEv,-2?)(GR]!]Nn}H1:x{lcLqfP9K8|yo?K:UW#U1&<I9l_qc]m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rickmans_';

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
