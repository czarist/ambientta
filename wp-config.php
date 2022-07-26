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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ambientta' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '/1mk]f+$oAw~<t$0>`i{3%J(pXF;xGouu/=8Q:>Yc+P}z9ZpYQf@fecQZv`Azl|*' );
define( 'SECURE_AUTH_KEY',  '%~<%.6N?/WHX8q)r{|aB]H6Dt)/& _~RT~`)<*]/]mW-L:f_bX6W4?fss?X[XDXF' );
define( 'LOGGED_IN_KEY',    'W3Fjw=[_v:~8xz)W%SLLUiC}^1StGsk(gaG8PZU.,+:R ~YBO/xki+3id$^^eq,E' );
define( 'NONCE_KEY',        '.)];XZMwUzm>C?VVCG*@?xl2PE1[H=#Rhyq<B=>=Z6Pmm0^%(GC~1,7s8% *T[NS' );
define( 'AUTH_SALT',        'uV).h!V|lw,lfq{$Sp,iXB)9CzSQ)Edd?I)@hT(.Oj/P*[A|zMKW9|GBiCQ!+FOG' );
define( 'SECURE_AUTH_SALT', '$iVY6N2`LuNR6SA*).1]9(>7K%x/.6Sod)DbK6hF+ -6i2gT.Q8P?fxO*OgN Z+B' );
define( 'LOGGED_IN_SALT',   'A`#lt)vhu9{cTt$Q{q}Ld~Mqj%&bD4P!{GzG*nOQfi=/?e1kWTp<Trn].j]MB4 P' );
define( 'NONCE_SALT',       'EUN7+(x!6M47,|bW4d=4P@,pcUeK@zI?M0$efBPR[_-x6*:d75iI{2PXlxcj[}!$' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'amb_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
