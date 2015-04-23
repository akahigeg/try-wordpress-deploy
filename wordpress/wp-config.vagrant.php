<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wpdb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'easypassword');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.Z6-5+w*,;7%JWgs/;D5^9|N:.e6d}@7zG$iawVw*IITAhJIuGW@X[ul,>f;a|TY');
define('SECURE_AUTH_KEY',  '=NLM{tc=d RR_<cv|E<NPE8{n%rdv<JpE:]`1NoyI6h~{>hrR!6n:uZsqWC|)6]@');
define('LOGGED_IN_KEY',    'k;-k=$w^~M)8zJxBj|+W)Lpqa^:Z-BDrp-B7CL65WfLh4(l8W}+c;;;kgH@U(?Y-');
define('NONCE_KEY',        '^vEpP[j<H|(>T).!)Hy_8|!kV4h32aT+|=DTEjv8N:iH^(g@BN++R)BrX,^)0e5f');
define('AUTH_SALT',        'Y?eitS72<wX>U@fE;FQf,yp*k`J}VC&k(uycS+S2U+E$:av=m|<YdMzC#e0vJ/E{');
define('SECURE_AUTH_SALT', 'y,maMxcdd 0PZL1OU(|B~+%qUgGZ`yyc~U  Ghq)IT>|k{FFG`#s52Cr5z8#6NTa');
define('LOGGED_IN_SALT',   '*b+Q$0kf`TB<9~[F.u!TYWG<t@*&4a&dG]p<)F+/*!n|y^/;+?Dkow2aJBJt5dUk');
define('NONCE_SALT',       'Ll{bL-|gY?4v%t:#A:XLWktJ4Nx1`_[G^gKO?eYddhg6u*e28`|a6qC|=w[{kiSg');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
