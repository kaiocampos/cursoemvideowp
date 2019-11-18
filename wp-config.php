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
define('FS_METHOD', 'direct');
// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );
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
define( 'AUTH_KEY',         '#?` }H*ub%rL{mj=*MBy)%6<q%#QYeqL= !*~ T4?r?HOMRutjoL,anh@.2xzvei' );
define( 'SECURE_AUTH_KEY',  '38D>ksZ^A&o=&Wl-rn734 .}4jtFYhx*-K*({Qq3R)Gy1cTiAG;V4vdBBfnk6v0f' );
define( 'LOGGED_IN_KEY',    'fU^Iub9DxolQtnfy8}{*o))kr %kH,vZ-HJa;|.bwIs7$3BG?$M/6.p0~j%@Dtz`' );
define( 'NONCE_KEY',        'I{!/[.s<wfzK@Zvas Kav}Rt_F`nn*$^]T11]/F9i,(~XE~mMZEkQbsG?nRk,;qF' );
define( 'AUTH_SALT',        'r/@@*U5?{fl^o4{iNqFc~HWzn^@SV92C}</nIlKlvaVV{};NPc:] ?,l`5D(-g:W' );
define( 'SECURE_AUTH_SALT', 'iEu@r:Nf H@9$DN-t|3P<:o9>p|=Xt6XXSoQfc5U?mM+fbpQ9kk#AvDXD)J}jvPN' );
define( 'LOGGED_IN_SALT',   ';u{KX{M8z_,5/E}S%|$u@:bbvx0mp^[lH4? <pG`AMuUlHm)1VIJw ~5Sf8jVBz@' );
define( 'NONCE_SALT',       'Qx^b$.9c=VUJ5.0MO$<U .cEn>is#,u1e`5_9vU Iy<`#s6vG+(#k4g^_ e>GP{!' );
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';
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
