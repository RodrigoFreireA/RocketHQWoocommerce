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
define( 'DB_NAME', 'rockethq' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '%|nRXuZ;I1p`w4Jz(_]~d)rNrAvt]q,=8#?<F%l <5G(,pg_F[FS`D.Sm.CLU|O~' );
define( 'SECURE_AUTH_KEY',  'y!9Xa`csdTH5C&Y-*-n,KE1Y b`kecqU5($+KFaTj82l3 N]]<b50+zogXXjS930' );
define( 'LOGGED_IN_KEY',    'BHDe!*2QR{RUQl )~d;/bhJsXAyCAP]lm@@I$(0E{asXd0{-]HKh/l/k6p10uoW]' );
define( 'NONCE_KEY',        'MJzoth`FbxB|0b% 1Rpbn4FM^&{Ky%HtfD HGIb~9^xTz+ux0*{)W;`zGAN_20wa' );
define( 'AUTH_SALT',        '[}|L]/pN(muI:WKP}6K+3 ONSD2oZJJW_KbBC/772mB=]Eq0cY]dMa$Sx8yur2~0' );
define( 'SECURE_AUTH_SALT', 'q,/V51KQB?)V>x;F{]x,hYBeDE!HkKZBFDbymdY4O)QKd)abkEWa5=dE<I{e*yao' );
define( 'LOGGED_IN_SALT',   'Dd/,jeX+RGf-a6`~9.,EtkKV=eDJ-I%rJ7vP$5>fklzfHZsl|q5q_J>/Put:s4>k' );
define( 'NONCE_SALT',       '1VdVR=?(l]u(FATyi@JIWzNWvF2a%}m&%r+~l<A1 Vt-qx^,hL@O=U#&WeJP}Drq' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
