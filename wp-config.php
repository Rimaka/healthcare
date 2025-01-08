<?php
define( 'WP_CACHE', true );


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
//define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
//define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.;abbNiP(dj@H4f;+8={tq~8WR@6gxtT8f/>Rj-S/Qj4a7H5e9CYY+CeE+P7=(qJ' );
define( 'SECURE_AUTH_KEY',   'k.T_ sP.!W:;wfcctu:c|Ao+>IbLbwB jQFNS{O]!UGd{:8?RpWGN}H4#k.lk)9k' );
define( 'LOGGED_IN_KEY',     'N:}glAG(,s`qJG8<?8Vrk;Vp{sdv&Y}q%w 8-U;%8TB}vR*m0bHz#<:P,0~pD3%f' );
define( 'NONCE_KEY',         '[Ft$2 yc6U3J7WJ|E-Ual)( X?+ e}q26{fvJI=_/NiMYjIW6n)oHsq|Kb!)A,~>' );
define( 'AUTH_SALT',         '_m}D@B{b^mFj&%uXn~lIF%w(|9wBYPX:QhzKLf8XPQ9-N)#K[E%%hP]EZtgNXz4o' );
define( 'SECURE_AUTH_SALT',  '@_y$d$?/!oklM(r>_%.`Qm3mn=l}UDBf#jA/%3?|-Ywj^($iX,<Vs]sUl.r@.Xp,' );
define( 'LOGGED_IN_SALT',    ';_S0#}.~`f!6B.4b-cMb8n`=TRsw%flY~Jj:]C:lPzz.p4bHSiml+ldv0+,nY1,)' );
define( 'NONCE_SALT',        '7x<R%5DQPu%F&%ck3z|(r$,?LG?KqTy&.8?fjpI3WBTjr>^Igi*Zz:0Z,HJ!CT:v' );
define( 'WP_CACHE_KEY_SALT', 'k]=T-H??cbb.d1<ywqNJt~Q5u(RuUYLQk6 h]nh9P`tl75z8BDi5!$?G*!=aQ#SC' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DB_NAME', "sql_new_healthte" );
define( 'DB_USER', "root" );
define( 'DB_PASSWORD', "" );
define( 'DB_HOST', "localhost" );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
