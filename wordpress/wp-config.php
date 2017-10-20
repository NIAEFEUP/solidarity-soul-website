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
define('DB_USER', 'niaefeup');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'solidarity-soul');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'solidarity-soul.cbhgjyvevukd.eu-west-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'Yab9NQC&#c(<Fv:)tw=rP|RI35o~UoCq%qAu):mkM~6XQAgVCo#<Z:7|E:Y%bO>`');
define('SECURE_AUTH_KEY',  'wTnK`gpUSC}QMhDks31)(*[Zc>&HgM.uI+K*Y$PG0f?1+I9u Pegd9z^yi[E.UEJ');
define('LOGGED_IN_KEY',    'wBRd&}4,MR~x^MVT/!Me:]-QyYVK!WD-ztu;3VpgmmEJil6{or%?UR}tUFA:hAYc');
define('NONCE_KEY',        ',bRJ`l i|bR1/WkbUOS}]R^E?*1x.${1~!}GZ-<$S=KAZt,<P/rp&V+X(=!<$@f=');
define('AUTH_SALT',        'aJCMlG=CT8pw*n#Z3Q++JkC,<3uG$,StX 9 m7&h#5UaQF[)DbG(X5ZKoP2eiDLm');
define('SECURE_AUTH_SALT', 'XZ|4YN]yN,d9$Li1CE`^ee.-j3rGV6kr(TSP@u/Nk6k5r5_C@j!w#Y2z5oW)Z6lb');
define('LOGGED_IN_SALT',   '@pu-[F8tuk-|E_PGgkNhs,| {w1IPFJMfy@qGaj2Fqomf?Fei6&M:bJRk+udhhG1');
define('NONCE_SALT',       'I oMz5s4dn270h%~b54GWcN#^OI)P7p=y|6^;aAv!^o+RMd[._Pz0/{~A0f>|Ups');

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
