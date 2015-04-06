<?php

function get_productions()
{

    $production_list = array(
        new Production(
            '3Dオセロ', 'XYZ3次元に石を置けるオセロ', PRO_TYPE_SOFTWARE, <<<EOF
		可視化をテーマに初めて作った3Dゲーム
EOF
            , array(TECHTAG_LANG_CPP, TECHTAG_LIB_DXLIB, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_VISUALSTUDIO), '2011年8月', PATH_IMG_PRO_OTHELLO
        ),
        new Production(
            'タンクゲーム', '2Pシューティングアクションゲーム', PRO_TYPE_SOFTWARE, <<<EOF
		ボンバーマン風ステージでシューティングするアクションゲーム.同じキーボードで2P対戦ができる.様々な武器アイテムが用意した
EOF
            , array(TECHTAG_LANG_CPP, TECHTAG_LIB_DXLIB, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_VISUALSTUDIO), '2012年8月', PATH_IMG_PRO_TANK, NULL, array('Lamia_inase' => 'ステージ上のドット絵全般', 'karura820' => 'サウンド全般')
        ),
        new Production(
            '電大トレンド君', 'TwitterTDUクラスタのトレンドワードbot', PRO_TYPE_BOT, <<<EOF
		TDUクラスタのリストのTLからトレンドワードを解析して1時間に一度配信する.hotなワードを決めるアルゴリズムを徐々に強化した.おまけ機能なんかもつけてTwitterAPIの勉強になった
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_OPT_GOOGLESCRIPT, TECHTAG_API_TWITTERAPI, TECHTAG_API_YAHOOAPI, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_ECLIPSE), '2013年3月', PATH_IMG_PRO_TREND, '//twitter.com/TDU_Trend'
        ),
        new Production(
            'IconStage', 'Twitterアイコン上でシューティングゲーム', PRO_TYPE_SERIVICE, <<<EOF
		Twitterと連携してフレンドなどのTwitterアイコンからステージを生成して,敵を倒すシューティングゲーム.非同期にProcessing.jsのcanvasに情報を送るところや,ステージを生成するアルゴリズムや敵のAPIのゲームバランスで苦労した
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_LANG_JS, TECHTAG_LANG_PROCESSING, TECHTAG_MLANG_PROCESSING_JS, TECHTAG_MLANG_JQUERY, TECHTAG_API_TWITTERAPI, TECHTAG_API_TWITTERWEBAPI, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_ECLIPSE), '2013年3月', PATH_IMG_PRO_ICONSTAGE, '//iconstages.elzup.com/'
        ),
        new Production(
            'Jenga Note', '大学の講義を掲示板風にオンラインでまとめて共有サイト', PRO_TYPE_SERIVICE, <<<EOF
		授業についてのメモを講義ごとのページで共有できるサービス.その時間に行われてる講義をわかりやすくしたり,メモが整理できるように特化した掲示板にした,Bootstrapを初めて使った.現在停止中
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_JQUERY, TECHTAG_MLANG_LESS, TECHTAG_FW_BOOTSTRAP, TECHTAG_OS_WINDOWS, TECHTAG_DB_MYSQL, TECHTAG_EDIT_ECLIPSE, TECHTAG_EDIT_VIM), '2013年11月', PATH_IMG_PRO_JENGA /* PATH_IMG_PRO_JENGA */, '//elzzup.yuta-ri.net/fillup/'
        ),
        new Production(
            '一夜人狼', '端末一台でワンナイト人狼をできるWebアプリ', PRO_TYPE_SERIVICE, <<<EOF
		オーナー役無しで一つのスマホを回しあってゲームできるように作った.CGIは使わずJQueryやBootstrapを中心に作った.当時人狼にはまっていて,スマホで使えるようにレスポンシブデザインに凝った.
EOF
            , array(TECHTAG_LANG_JS, TECHTAG_MLANG_LESS, TECHTAG_FW_BOOTSTRAP, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_ECLIPSE, TECHTAG_EDIT_VIM), '2013年12月', PATH_IMG_PRO_ICHIYA, '//elzzup.yuta-ri.net/wolf/'
        ),
        new Production(
            '時みくじ', '小さなおみくじサイト', PRO_TYPE_NETA, <<<EOF
		年明けに遊びで作ったおみくじ.BootstrapとJavascriptとLESSの練習がメイン.自分ではいいデザインだと思ってるサイトの一つ
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_LANG_JS, TECHTAG_MLANG_LESS, TECHTAG_MLANG_JQUERY, TECHTAG_FW_BOOTSTRAP, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_ECLIPSE), '2014年1月', PATH_IMG_PRO_TOKIMIKUJI, '//app.elzup.com/tk'
        ),
        new Production(
            'RollCakeRSS', 'Feed登録や管理ができるソフト', PRO_TYPE_SOFTWARE, <<<EOF
		JavaSwingで作ったWindowアプリ,Feed登録やソートなど基本操作やグループ化管理,正規表現でItemから指定した要素を取ってきて表示などの機能.人に見せられるようなものではない
EOF
            , array(TECHTAG_LANG_JAVA, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_ECLIPSE, TECHTAG_EDIT_VIM), '2014年1月', PATH_IMG_PRO_ROLLCAKE, '//github.com/elzzup/RollCake_RSS'
        ),
        new Production(
            '投票メーカー', '投票を手軽に作成できるWebサービス', PRO_TYPE_SERIVICE, <<<EOF
		ドメインも取得して本格的なサービスとして作成した.初めてCodeIgniterフレームワークを使用して作成したサイト.アカウント管理やシェアの部分でTwitterと連携している.SEOも意識している(つもり)
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_JQUERY, TECHTAG_MLANG_LESS, TECHTAG_API_TWITTERAPI, TECHTAG_API_TWITTERWEBAPI, TECHTAG_FW_CODEIGNITER, TECHTAG_FW_BOOTSTRAP, TECHTAG_OS_WINDOWS, TECHTAG_OS_LINUX, TECHTAG_DB_MYSQL, TECHTAG_VC_GIT), '2014年4月', PATH_IMG_PRO_TOHYO, '//tohyomaker.com'
        ),
        new Production(
            'asn_web', '学生団体ASNのホームページ', PRO_TYPE_SERIVICE, <<<EOF
		大学のつながりで依頼されて作ったサイト
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_LESS, TECHTAG_MLANG_JQUERY, TECHTAG_FW_BOOTSTRAP, TECHTAG_FW_CODEIGNITER, TECHTAG_API_USTREAMAPI, TECHTAG_OS_LINUX, TECHTAG_OS_WINDOWS, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_VIM, TECHTAG_VC_GIT), '2014年7月', PATH_IMG_PRO_ASN, '//asn-web.com'
        ),
        new Production(
            'TDUClaud', '講義ごとにTweetまとめサイト', PRO_TYPE_SERIVICE, <<<EOF
		講義毎に決められたハッシュタグで投稿されたツイートをサイト側でラベル付やお気に入り登録して管理ができるサービス,Twitterアカウントでログイン制でラベル情報は全ユーザで共有される.
		5人グループで内部設計,仕様書作成から行った,gitを使ったグループ開発のいい経験になった
EOF
            , array(TECHTAG_LANG_JAVA, TECHTAG_API_TWITTERAPI, TECHTAG_LIB_JAVASERVLET, TECHTAG_MLANG_JQUERY, TECHTAG_FW_BOOTSTRAP, TECHTAG_OS_WINDOWS, TECHTAG_OS_LINUX, TECHTAG_EDIT_ECLIPSE, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_VIM, TECHTAG_VC_GIT), '2013年6月', PATH_IMG_PRO_CLAUD, NULL, array('sukonbu0909' => 'プロジェクトマネージャ', 'twinkfrag' => 'アプリケーションスペシャリスト', 'godslew' => 'ITアーキテクト', 'arzzup' => 'ITアーキテクト', 'munisystem' => '品質保証マネージャ')
        ),
        new Production(
            '酔っ払った―', '酔っ払ったツイートができる簡易Webアプリ', PRO_TYPE_NETA, <<<EOF
		フォームに入力したテキストを酔っ払った感じでツイートできる.酔っ払い具合の調節が可能.開発期間1日
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_LESS, TECHTAG_API_YAHOOAPI, TECHTAG_API_TWITTERAPI, TECHTAG_FW_CODEIGNITER, TECHTAG_FW_BOOTSTRAP, TECHTAG_OS_LINUX, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_VIM), '2014年6月', PATH_IMG_PRO_YOPPARATTER, '//app.elzup.com/yopparatter/'
        ),
        new Production(
            'BirthdayAPI', '作品のキャラクター誕生日API', PRO_TYPE_API, <<<EOF
		作品タイトル,キャラクター,日付,自分の見た作品などから指定してリクエストするとその結果が帰ってくる,GETしか作っていない,ユーザごとに作品の管理ができるが今のところ半手動
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_OS_LINUX, TECHTAG_DB_MYSQL, TECHTAG_DB_POSTGRESQL, TECHTAG_EDIT_VIM, TECHTAG_VC_GIT), '2014年7月', PATH_IMG_PRO_BIRTHDAY, '//github.com/elzzup/CharactorBirthdayAPI'
        ),
        new Production(
            '念写ったー', 'Twitterアイコンを全角文字AA化', PRO_TYPE_NETA, <<<EOF
		100文字でつぶやければ流行ると思ったが10×10の解像度じゃ限界があるのが誤算だった.Processing側で全角漢字や記号について2*2分割のマップでサンプル化してPHPでアイコン画像を解析して生成している.PHPのGDに初めて触れた
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_LANG_JAVA, TECHTAG_LANG_PROCESSING, TECHTAG_FW_BOOTSTRAP, TECHTAG_FW_CODEIGNITER, TECHTAG_API_TWITTERAPI, TECHTAG_OS_LINUX, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_INTELLIJIDEA, TECHTAG_EDIT_VIM, TECHTAG_VC_GIT), '2014年8月', PATH_IMG_PRO_NENSYATTER, '//app.elzup.com/nn'
        ),
        new Production(
            '<strong>elzup.com</strong>', 'このホームページ', PRO_TYPE_SERIVICE, <<<EOF
		Bootstrapは使わずに,できるだけライブラリに頼らないように作った.これからも進化を続けていく
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_STYLUS, TECHTAG_MLANG_COFFEESCRIPT, TECHTAG_FW_CODEIGNITER, TECHTAG_MLANG_JQUERY, TECHTAG_OS_LINUX, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_VIM, TECHTAG_VC_GIT, TECHTAG_VC_COMPOSER), '2014年8月', PATH_IMG_PRO_ELZUP
        ),
        new Production(
            '言えるかな？', '言えるかなゲームで遊ぼう', PRO_TYPE_SERIVICE, <<<EOF
		言えるかなゲーム(山手線ゲーム)を作ったり遊んだりできるサイト	,seo対策やRSS配信ping送信などや非同期通信での登録フォームUIなど力を入れた
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_FW_CODEIGNITER, TECHTAG_FW_BOOTSTRAP, TECHTAG_MLANG_JQUERY, TECHTAG_MLANG_COFFEESCRIPT, TECHTAG_OS_LINUX, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_VIM, TECHTAG_VC_GIT, TECHTAG_VC_GRUNT), '2014年8月', PATH_IMG_PRO_IERUKANA, '//ierukana.elzup.com'
        ),
        new Production(
            'TDU12FI研究室希望bot', '研究室希望登録があるたびに通知', PRO_TYPE_BOT, <<<EOF
		14年度研究室配属希望があるとその研究室の志望者人数と定員数をツイートするTwitterBot.3時間ぐらいで作った
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_API_TWITTERAPI, TECHTAG_OS_LINUX, TECHTAG_EDIT_VIM), '2014年9月', PATH_IMG_PRO_LABOATTEND, '//twitter.com/tdu12fi'
        ),
        new Production(
            'どうぶつしょうぎ解析', 'どうぶつしょうぎ棋譜評価ソフト', PRO_TYPE_SOFTWARE, <<<EOF
		どうぶつしょうぎの上級者の棋譜を収集して評価値を作った.
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_LESS, TECHTAG_MLANG_JQUERY, TECHTAG_MLANG_COFFEESCRIPT, TECHTAG_OS_LINUX, TECHTAG_VC_GIT, TECHTAG_DB_MYSQL, TECHTAG_EDIT_VIM), '2014年9月', PATH_IMG_PRO_DSHOGI, '//dshogi.elzup.com'
        ),
        new Production(
            'Happy days', '知人の誕生日お祝いページ', PRO_TYPE_NETA, <<<EOF
		身内を祝うスペース.基本のサイト構成はBootstrap.jQueryの数々のプラグインを使ってみる練習も兼ねて.三日坊主.
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_LANG_JS, TECHTAG_MLANG_LESS, TECHTAG_MLANG_JQUERY, TECHTAG_OS_WINDOWS, TECHTAG_VC_GIT, TECHTAG_EDIT_VIM), '2014年1月', PATH_IMG_PRO_HAPPY, '//happy.elzup.com'
        ),
        new Production(
            '東京メトロRailway Map', '東京メトロコンテストに出した作品', PRO_TYPE_SOFTWARE, <<<EOF
		<a href="//tokyometro10th.jp/future/opendata/" target="_blank">東京メトロオープンデータコンテスト</a>に出品した作品.東京メトロの運行情報をGoogleMapで可視化した.API権限が欲しくてほぼ締め切り間際に焦って完成させた.
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_LANG_JS, TECHTAG_MLANG_JQUERY, TECHTAG_API_METROAPI, TECHTAG_API_GOOGLEMAPAPI, TECHTAG_DB_MYSQL, TECHTAG_OS_LINUX, TECHTAG_VC_GIT, TECHTAG_VC_COMPOSER, TECHTAG_EDIT_VIM), '2014年11月', PATH_IMG_PRO_METRO, '//metro.elzup.com'
        ),
        new Production(
            '電大トレンド君 on Web', 'あのトレンドくんがWebサイトで帰ってきた！', PRO_TYPE_SERIVICE, <<<EOF
        電大トレンド君botを根本から作りなおして,統計とかが捗るような設計にしてそれをwebに移植した.
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_MLANG_JQUERY, TECHTAG_MLANG_SASS, TECHTAG_DB_MYSQL, TECHTAG_FW_SLIM, TECHTAG_FW_MATERIALIZE, TECHTAG_OS_LINUX, TECHTAG_VC_GIT, TECHTAG_VC_COMPOSER, TECHTAG_VC_BOWER, TECHTAG_VC_NPM, TECHTAG_EDIT_VIM, TECHTAG_EDIT_NETBEANS), '2014年12月', PATH_IMG_PRO_TRENDWEB, '//trend.elzup.com'
        ),
        new Production(
            'EV3 ライントレースカー', 'レゴマインドストームでスマデバGP出場', PRO_TYPE_ROBOT, <<<EOF
        <a href="//www.afrel.co.jp/sdgp2014/info" target="_blank">スマートデバイスGP2014</a>に出場した.何気なく2014年で一番頑張った気がする.PID制御を求める計測の繰り返しが辛かった.地区予選3位,決勝惨敗.
EOF
            , array(TECHTAG_LANG_C, TECHTAG_OS_LINUX, TECHTAG_VC_GIT, TECHTAG_EDIT_VIM), '2014年12月', PATH_IMG_PRO_EV3, '//github.com/elzzup/ev3_linetrace'
        ),
        new Production(
            '東京エリアストレス', 'リアルタイムエリアストレス', PRO_TYPE_NETA, <<<EOF
        Geoタグツイートを収集してネガポジ判定,GoogleMapで可視化した
EOF
            , array(TECHTAG_LANG_RUBY, TECHTAG_LANG_PHP, TECHTAG_LIB_MECAB, TECHTAG_API_TWITTERAPI, TECHTAG_API_GOOGLEMAPAPI, TECHTAG_OS_LINUX, TECHTAG_VC_GIT, TECHTAG_EDIT_VIM), '2014年12月', PATH_IMG_PRO_AREA, 'http://areastress.cps.im.dendai.ac.jp/'
        ),
        new Production(
            'ドミネーター', '犯罪係数を測る', PRO_TYPE_SERIVICE, <<<EOF
        Twitterユーザの色相と犯罪係数を計測できる.予想より人気で公開した一晩でレンタル鯖の転送量制限を越して閉鎖.
EOF
            , array(TECHTAG_LANG_PHP, TECHTAG_LANG_JS, TECHTAG_LIB_MECAB, TECHTAG_FW_FOUNDATION, TECHTAG_FW_CODEIGNITER, TECHTAG_MLANG_COFFEESCRIPT, TECHTAG_MLANG_STYLUS, TECHTAG_OS_LINUX, TECHTAG_API_TWITTERAPI, TECHTAG_VC_GIT, TECHTAG_EDIT_NETBEANS, TECHTAG_EDIT_VIM), '2015年01', PATH_IMG_PRO_DOMI, 'http://dominator.elzup.com/'
        ),
    );
    return $production_list;
}
