<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Definições de MySQL
 * * Chaves de autenticação
 * * Prefixo das tabelas de WordPress
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'solidarity-soul');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e{XBZC+$}O->p,3Cci8ia8SMKY+=.1um3ddOX!qQqjZM3J7{i%:#+0pIE#Yd9/A<');
define('SECURE_AUTH_KEY',  ' >c,-qpvQ$LCSQbl =jD{R$|raQ$YrIZB>I7%gXyC,Dgz/xkS+xz~7DZ>0EjPK):');
define('LOGGED_IN_KEY',    '.?Ai>fX(gPJ&,wy1wpm9Sws| EJmPD_QIsh=^%$;cc=5jt3/E}8W>1QJ).m,bcqL');
define('NONCE_KEY',        '&XS5KG0SrVzB&=9&Jl}Mb.&?j 9Hy>8|{7nxZPA_7_0E_|t2~F}S&~S-cS(4J@g[');
define('AUTH_SALT',        'E[JT8z|BLp h QK_T*XfLB9U$t}D.1d >>2Eqw3}<Be+#;e5AaK(^{1^L:A[EZ Z');
define('SECURE_AUTH_SALT', '[&IE%[?)*j_*F_e[0h9CTwb,W!d`LdCX>(AZrEaI8O]w$J4 j[w| /7SIP?lg?8X');
define('LOGGED_IN_SALT',   'boA|2qr#9zU-E&0(b--zFBJbK4 :#Av1;w{P<H)K6z2pH+(:n>eNMC<E!q?3vsid');
define('NONCE_SALT',       'lpHPHtM2b(hJD=72FvMZwR[su~h_q8}bp0vi9$yAjBLwA]Auz*v,GFB*Z]7!Sd?=');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
