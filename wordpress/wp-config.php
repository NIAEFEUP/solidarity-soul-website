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
define('AUTH_KEY',         ',U<802HRE:&Rk^oQDyVL*;v uw}[u8W?fMqX|/L0gAzfU&1?9d)76)z3%?x^xw$d');
define('SECURE_AUTH_KEY',  'JP6dJhzV##{o[}KU2Ck6o0OcDs$^bp5v`}v@^K&=)5b8NW{>LQPG<JtkEjs^mliZ');
define('LOGGED_IN_KEY',    ',tx!~[:[Ee,B370Xt.{1Ma;:3J?9vpv7//]RB9/74gW=ET6[Qz$Ykm%Cr~^O,Up~');
define('NONCE_KEY',        'X(CUig*aG8wLp,QZ6S`?;-ulb71B-D9:gL][d5Tlya-vRZZ<Cr*5@8B18n+24$g*');
define('AUTH_SALT',        '0[3<ew;N@Bdf]v}fj,5C~X`8*LAn9ou~NA<Voc%#3*au=By:&*$jf$:-$_mf3Zp]');
define('SECURE_AUTH_SALT', '@OO}eMJa7t.kLO2vbt:Ed@k80{SZv0S$2^JW)R}tSvZ[3>rj,MoAho@!N;xxN#m)');
define('LOGGED_IN_SALT',   'Z@@~z@XkwjgpV|(<usCdT$qrq^V-a%mp5Uph6C+wMeGxoYrH]BB&b7,6BBm}U011');
define('NONCE_SALT',       '|-RoU7 ^=SMtT8CrU69_}*D3fIajK|KGB~VO;8mP8Ko+n1pLOU2dkAoP_[)%E3GT');

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
