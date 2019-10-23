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
define( 'DB_NAME', 'agenda3edu_fer
' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'agenda3edu_fer' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'agenda123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql.webcindario.com
' );

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
define( 'AUTH_KEY',         'hy%%+zBX@N#$[dbitE#0f9Po)x/7>_Qo{X3AD,(ZmzC-uyVa^G{(hWU`9~k*0*wI' );
define( 'SECURE_AUTH_KEY',  'ULOU&@X$pHCc.=TiqR(/}4ZHKXn@@pKIg:.0`cYQ.gQO%b8b|hkO|wQL]T_GoN-q' );
define( 'LOGGED_IN_KEY',    '.ptRShs}Y|c$;.LP{4`e: ZLwpNsbiE}bl~74Memj`!(Fa}e=HVO~Kb) X} hs_^' );
define( 'NONCE_KEY',        'QHP]#-oY9x4Z@u=K>4nOOi#ykZFuz<oq,:pVIE@(U)M.D3|8.`BR6$ &Os|1^g`@' );
define( 'AUTH_SALT',        '8!N([9!Hv:55bwg&iNO,^?ixuX2(-xI;M{$$ssr)wgZFV$ja?t,S;;;GPSP&$V+s' );
define( 'SECURE_AUTH_SALT', '{^#WZazoP,7GD~6(/w[QsP8^3ZeT5Otg d]dg+7m3]7NzZ>DOr8!t],Ti!O9Wm9u' );
define( 'LOGGED_IN_SALT',   '=6n$3q}ijLq$l6)K5v>+SW8./q^NS@`0Fvw$64?iW 7cc*NvDA7}EjGw+<[v2+Dj' );
define( 'NONCE_SALT',       'X|WVgZ+KDD Ac`0-6pZ?uA`!qGz)?wCW? 3w:}5:_`Ik3(BDq(6m&>@o3%A4P0d7' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
