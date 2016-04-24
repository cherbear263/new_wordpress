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
define('DB_NAME', 'new_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p<@QzU-`G4P,U7:oHR(u }Ald7RC-1]0J&+0X.jCzfl@cD$)niDe< 3 (dQE+Y;h');
define('SECURE_AUTH_KEY',  'Sf0|Fu9;ZL.5lSd2BdC#^fs=#InA.:oP9:ni`kozMBBx/?i771CoLU~;$k&8L_P&');
define('LOGGED_IN_KEY',    ')>k{)-W=29IW&6C>$,.mph2p3l!85:Os[[ZLxUJqP$:UoUu;mMD&?s|2}iL|8B%#');
define('NONCE_KEY',        '&}qkK^bbn+`y:{^?O>@x(csBGNW(9bi/~5N0Q)-(~(rjjW/;h.5XqiPyEl^J=J(N');
define('AUTH_SALT',        'g%b_E<`$J}^vw3lq)Ao6xmO)vf&by |cG7>vW_pn O#5?]WM2g.c7?xE)!xQ]TfF');
define('SECURE_AUTH_SALT', '4e7ncUNg?Q 6/Uq9ovr4b=oqeK%6ecKk_Y8KEZEyJtqlPI@Y64nE~RU9mdOP>?]o');
define('LOGGED_IN_SALT',   '.CEy~hCxCS*qGm$&&`*IIM||WwVrK=<Sig:~A5{7B(fWU&5h3PkZ$#0^H},oE,CH');
define('NONCE_SALT',       '@5+J!f`:QHz[6i9EaO|vnaCy0o1^,_$%O^KZMwX5t Hv(25}$MFqz5PxT{(G6wKU');

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
