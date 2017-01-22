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
define('WP_MEMORY_LIMIT', '64M');
define('FS_METHOD','direct');
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'flextime');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'jS1I][K+onw;*dp}C?ZPbzi(LNwcD<}kjPRfNJSejJ_(F%>m--F32imAkU.y/{d2');
define('SECURE_AUTH_KEY', '!@F8M<bo@D0p|E_gI>sZW@kZ%-)^RpPuhxxDf<>r[yTu>,[}#;iH:b&,-S!m6H(|');
define('LOGGED_IN_KEY', '5oJ`frwR+>r664Ur],dP-Wr?PbO(c5bon$t@XxDjJ]H QQEBLrt#(0=PcJ1M8/Fw');
define('NONCE_KEY', ' p9*q|_z~#AXSl2Q?hmD+GOVB0l:hw,*3&q4pYnv~J0c9ohxTj4FQra5EmjwDKI(');
define('AUTH_SALT', 'XzX:..Ygj#MAgWp B7r8W$KZU>I%7jTs7k0d*aB/Nd:PoSx?1l[m-|n4<R} OvM/');
define('SECURE_AUTH_SALT', ')98hFQ=Wn`65~&. |hNvRP7;B^&:n7K;#I/5/O|bZs9RkxLD%JbM;a+b.HwDAr-e');
define('LOGGED_IN_SALT', 'UtNngtkV(N{rP/k&}ow6{!, u85lhz*9=1];aT|Aulre)C&:EYH?]5v$f}wYHtug');
define('NONCE_SALT', 'ef!Kv)a`ScZ$ q$-d{gk<v[[2xl>-=fz#6;K<)yEKkLyH={J,wyD6H.]k.}ih~z@');

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

