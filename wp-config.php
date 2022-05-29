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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gowell' );

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
define( 'AUTH_KEY',         'YW%&`>2-Z %GZY=My2=k!RMra;gqQE4X:.+%U81x;_-V%pNw,mT@<ct|YvY6OqS(' );
define( 'SECURE_AUTH_KEY',  'fS5HZe-qxtAXan1aQDbtX3*eK 6J||!5J]jFmc uK0yeS{&9%=Xpg%;^s.!%^)Gu' );
define( 'LOGGED_IN_KEY',    ' zbBWisLMQN!Vbn-2voOIE*)+@B<D{A^*X`k`hMvtzIHm BQ0YePvtHnFsx%[bm~' );
define( 'NONCE_KEY',        'VY.{LzINx,1$]iTZqbB=OCoe:E;!.aj:6$Lk63(DQ:T9PTm6C!MmK[I/:U_v.1Kg' );
define( 'AUTH_SALT',        '[`h21&cV58`6>8f&kp9}vPiYb(Ih[Y9H&@E8},~*UI`|!1|jrIZ%A;;3MZB`<&-9' );
define( 'SECURE_AUTH_SALT', 'J0+f[aTQ9ZZ-]n=|s&P@lg0t1yX-#Q@v,[+* Jq8@+Z;seev}eP%I3$`H<q6 0~>' );
define( 'LOGGED_IN_SALT',   '%GmFO(%?]=[=B{ bse/.Aj{r[0k=5jlt2^l2%eqa%1rlVT7airpr37BGY`>crjJ+' );
define( 'NONCE_SALT',       'm7KPG%rK)(Z!CB(9pXXwv8EP13fU@K1TTJgIN|gysnM{t?-m5W)WSA<R)ok&eR:3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gw_';

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
