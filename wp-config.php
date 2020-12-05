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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_homolog_carro_site' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'sa123' );

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
define( 'AUTH_KEY',         '.lXr:$Tg2=ylNG9S1~<c,~RP&*Jw$_RWcI~;ME@j8rq|,2&-AA= zz#Xh#.#6)Z8' );
define( 'SECURE_AUTH_KEY',  'CnV~u=U/15Q?B~cca)DP{?j)/EPsmuZm}-d(B^=ZY_4X,aFuX$i:W(i.ffEq#u|T' );
define( 'LOGGED_IN_KEY',    'Hs9uzV9~]/N,QP]M$bW%Ln34}^9+sQe&D N>-87N_`:Uap&oC}`I2eckitq?PU^G' );
define( 'NONCE_KEY',        '_(IWOfEcp8mu:PIfx#-S1B?.?/@&!SfjQZ,C01;5g;!X{vKw[|[Zw_^,`].BRN.W' );
define( 'AUTH_SALT',        'DS!pnhbGD|t(OS3vh1~*yM16BSy&1gzsYypjvT7K`(t^D_g2G[=m+D/E)`vtr,t.' );
define( 'SECURE_AUTH_SALT', 'KF`ci{}hA(j%q-vbE+,+heLK;yG :BX6,u21R8AXx:PlQIZ)gFj!!m`57V%[9j}7' );
define( 'LOGGED_IN_SALT',   '>jDV 5n7f^ZXC@ 5?]d8> MawE@`DnV!Mp&<I0Nx$2~ms?gUHfj8Gr Orc(|mxkE' );
define( 'NONCE_SALT',       'o<p`/@7y4,}t$7TvsZ=g/OPBJ6iC|o7/TKYJ`&dFqj5q::(*`wA(B[;nL(#{!Y*m' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
