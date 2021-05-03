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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         '{7S3mi3>U3-Y>Y+G>8va%=2$[:9)om[vfumb=]7rc>NZgc|hgWIE>7uE_.RsrTv9' );
define( 'SECURE_AUTH_KEY',  'Wzp)d!R:B:S~~#0O@`+G&RM2v^Oa9`cCWAueN.m>q{#}47LA4!NeH*8a{wZJK9.|' );
define( 'LOGGED_IN_KEY',    '< ov9hX!!SGJY0c[@x=taYs?`a*l{=CeokbtFpB1|ZZ38&ic~a*e`i=T0WGjRY|m' );
define( 'NONCE_KEY',        '{9D`dJkJ#_:PsR{Y$|_EOj!V&Qzcum_0qm{:L~f4<ASnG<7s$b/`n6T{X}8B>_gz' );
define( 'AUTH_SALT',        ']F6DDw?X* $2;vcgy>Igz.Ejq6i4Zl|XQ9mj[wG?F,*amo4b$4Pm}H]h1S0tm?hS' );
define( 'SECURE_AUTH_SALT', 'UN&sK,`o4M+FK(P+1L~MURL3p0-RUx&,+Z9b?;5&>y4C+5@{.K9KNwt1Dt|:<{on' );
define( 'LOGGED_IN_SALT',   '6/jYHxpw|LX]ixqH!-yAG9nB!)bse]5xPj;G?Lc.6~;exO3KvNjRpn!wUx(|6E6u' );
define( 'NONCE_SALT',       'q/N^b@AAv,WVf?}ahDFsr.rTKl>aeZv!pIE2k-&Zw0|RmEPo.|$7&-Iett ,[/2e' );

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
