<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'vuelos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1B4+ZmC<_fwaDd^WwX<O/X0rhwdSHle0IP7i 9DXhaw|qrTgMm[/w2--n!Pu6wcr');
define('SECURE_AUTH_KEY', 'mHj%9{5$D!W2b#IKn`P{Z#TM$&sJ}WBmPLf5A]bu$,5l0ff(-%ag_$.93XW2&_(u');
define('LOGGED_IN_KEY', '*Ry+~^x*(V#GO#J-lSy2k+ BFzWYFm3IJXnAdih/&cU5=b0JN*MMpFBF2,1xEm+s');
define('NONCE_KEY', 'lf+: @h/76?wp#Ufh(@iWv?8Xj&QS#q< (lNbbU]1ul;J.kFg$y$nuv@t:GXocR2');
define('AUTH_SALT', 'sedKC`^B%kK[rwaH},;m}xAEk5GlM,**y4*P~HFu?M0Z$)~4E%FWt4[/|VS@Qre/');
define('SECURE_AUTH_SALT', '?pMs`8wjifJbs^=85eQ*neTm`qIq]]0<$8rwU;6Z8)Dlyb =c;B!q_Z*GdgbNB>a');
define('LOGGED_IN_SALT', 'HtfE(#CO^Hs-I`J#A(j^^6<jy+gx0sElpp=((Y$aL5R NvGS[(-&[U7$=1]JP_)S');
define('NONCE_SALT', '?n1 qgTXiA$zG$I}6[$l`QU[ck3s,js.}zMt*h7myb>F#20xT84[V_xiZE1O1[!X');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

