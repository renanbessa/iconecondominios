<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'iconegestaocondo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c.qT#.dgVV]n4:IheB>PKLD.qxMMQTarKq.1vq%s]tK8-@w3PbQ=/,$yWW&m`VWj' );
define( 'SECURE_AUTH_KEY',  '?SqlNuM^qV9gg)!-fl$,&OXBj~C]-Ub7?FWfgino`Kk+,is%MB9G|=8EwoLfj*{h' );
define( 'LOGGED_IN_KEY',    'Z!Qz%yJU?-JnB6&^^Qp},oqSg?th_&@C9cX<SXDRN;<.-.sKE(Ye/S(Bhz,4%2L@' );
define( 'NONCE_KEY',        'Zd[liVu-&~A%+Ugp`2%J&$^4V[?M: k~puea;+ns?XVq@DXzUEyxqu50fGA/jwY4' );
define( 'AUTH_SALT',        'HiMvV85i?+uEKhoI69@nioDL-M_M~^X|Eu|+$T*&/P)EZ?~`z.TRI-@gqCS)Y@{-' );
define( 'SECURE_AUTH_SALT', 'EFEw( (G0|h#9B%==K.m#dG|G|@y-I[quz-<b@-6Cwk{E:H3_Muf;(*8Q4WA: uO' );
define( 'LOGGED_IN_SALT',   'fyuh)||C[dS)3 bfsV!f.Zp5_hCenVoYS_EpAknN@q!iQ<EwsQ0UI0X$gDmbZcr<' );
define( 'NONCE_SALT',       'z>x!x U)[P%j0)P0c)SX{9[`S*+D5m*uu=%r}S0*`myX,O|h-Fs~nG{Tg,lQZe79' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'icd_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
