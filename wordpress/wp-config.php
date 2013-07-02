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
define('DB_NAME', 'xnelyda_nelyda');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'xnelyda_xnely');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'x123456');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '~Ia;].@;-@zLxl|>#aHYK6R3&/Ff=|M--R|+L%-A4QY!q$cA@*`i>OTs0iX8f<@O'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '{b[5TJQtLp@J|sn%i<@$W@Q;oT6b<nA1E=-L~|HAHu}$y~7A5rZfcR1yyc$/?@Ld'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '|*~?h7B4^gS?2 5Eb]}kOwm6)k?A+:tCA28GlB3dtp|}|`;6ee5+_?.`bKT-c)hR'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '=r8E:|M/ gLV@q*+ulH `v+Slma5w`]+M_?+h3m,y4gLg&rV|zg>M-mit5m-!QdZ'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'o-CM4<Yl|F;_VQmK+W4D2%Vc}c&u/`_/RKqMdA_q8p*r}g^7nT/uHcdQk|k+_W#~'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'XifC6;? %gy.mwc)A@-+HB50i67~+eFTv$|-|yE}BR=cLv>nOs<xT#)G`F=38HW;'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'dvN8+5}Ds=Q&!/)>9~E!#ED,|bn_+#eFt$@_]af2]$;J}%itZ?t=pG&/%T8{& <K'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', ';uK`9)3%&;!W.t:it4i|HF#V7s56gz0&xrPXt]XSxmh)pk6?loD54=:Q@-:v)(%`'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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


