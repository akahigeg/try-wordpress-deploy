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
define('AUTH_KEY',         '5_D*6L9:b V*G>WuGHUKH>86X{$3G$FyvI#)J$+0-JWAHPO9us@^G_sJ*zA#1[uP');
define('SECURE_AUTH_KEY',  '#%IM?GE6{f}^D;;%>gOFf[/BI6Yty(_OHT]Bye+9=Er@2BQpORK<WO]94-T*&@~b');
define('LOGGED_IN_KEY',    '0)%igKHyCx$t&BKCN}jby`6I,B/ktIdz8FV$l;-5hL?VmTh(W~2@Z=S/E=G6yLV8');
define('NONCE_KEY',        'n)$uVdz96hiQGLd5dZ$T%!,KOJKwMTpC(dW%`t0UFYjg5@!Px) Fnc;kc<~++.h@');
define('AUTH_SALT',        '`Z@8I2~x;ym_RVpfjeID^Ez@R.yK$Wqst|u1zBlJik:oS6YWo*Jy|dgIGW64})8W');
define('SECURE_AUTH_SALT', 'pjHi,~Su#gM<RO{jelG+JvOAe<H[#.y*|5AN(z0CL9M#jQ< H/B&-C(ggYx+NjiS');
define('LOGGED_IN_SALT',   'h)>p##)bj*.bivLjg4W*Lb2S{{dsTeQk}p?It9#D@YQ#f}MYdwEj.4~:YgXI]vM?');
define('NONCE_SALT',       'GE?dxQld>(j2&(J|5Ct IaE/=X1C3}/o]Y$L%cmU[ G:M*q03UmqSmX+Bf33P}||');

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
