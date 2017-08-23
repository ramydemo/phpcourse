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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'ramydemo');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~FA3 +Z>`X6`u:pQ-|,1(KC%2)OE=;SmTy^+!0im&$VCWbRBey?*pl}aD~EI()]M');
define('SECURE_AUTH_KEY',  'MGb6jWHWgIGkM5jZQ[vV <$o[4:x]j89l;G;k{1?^lQB!<5PBOk)bNZU|_ADCm?Z');
define('LOGGED_IN_KEY',    'TuN59cv=6_uaUr&W#i5-vx@mQDu@FsDZ`)!dRX3b5 wa{M-k-xdb2%t$S7}V(0w(');
define('NONCE_KEY',        'KZ+:w1!m_qY4L{uy|V~O4;T(-:DQ(#0]ce*gseVA.wWpXdO&_]&}:y_bO5}ahUal');
define('AUTH_SALT',        'rX?hhcCaF;d33`qb+0>WHaxp$n&v+i*+aulxip[7ci;SeX1c(Nb#r*TkKSCye{*|');
define('SECURE_AUTH_SALT', '[+&z%->qRYnJ71rV[2#cV<@-jGcWQdz$31)W [%*GA5VwUa+8{1Jlp _8q8W[(NX');
define('LOGGED_IN_SALT',   'Wv+*ek=5znl+ij_%gHEv j-{vow9zYE$#L0,L2?#8{r]4055}$2=!y(hySn;fo6J');
define('NONCE_SALT',       'YfNcC[#ep6!fB5|)M/oaxP1vc>kTam7*TZ3;.*Sb)G4[2XVX@E(KF!8ozw7}k*aZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
