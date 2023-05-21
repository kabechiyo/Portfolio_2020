<!-- STOCKROOM -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="descripton" content="STOCKROOM | aizawa design">
  <!-- サイトの紹介文 -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- feather読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/loading.js"></script>
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon-180x180.png">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <?php include('../../setting.php'); ?>
  <title>STOCKROOM</title>
</head>

<body>
  <?php include('../../loading.php'); ?>
  <header>
    <!-- グローバルナビ -->
    <?php include('../../nav.php'); ?>
    <!-- ヘッダー -->
    <section class="header">
      <!-- 概要 -->
      <div class="header_about-container">
        <!-- プロジェクト名 -->
        <h1 class="header_title">STOCKROOM</h1>
        <!-- ジャンル -->
        <ul class="header_genre-list">
          <li class="header_genre-option">UIデザイン</li>
          <li class="header_genre-option">サービスデザイン</li>
        </ul>
      </div>
      <!-- 背景画像 -->
      <div class="header_img-wrapper">
        <img class="header_img" src="assets/img/header.png" alt="">
      </div>
      <!-- 説明文 -->
      <section class="header_info-container">
        <h2 class="header_concept">ひらめきを一元化するネタ帳アプリ</h2>
        <p class="header_sentence">STOCKROOMは様々なアイデアを一元化して保存するためのネタ帳アプリです。</p>
        <p class="header_sentence">様々な場面で企画やアイデア出しを行う中で議事録やノートツール、メモ帳に思いついたものが散乱してしまうのを課題に感じていました。</p>
        <p class="header_sentence">そこで、「ひらめき」を一元化できるネタ帳アプリを考案し制作を行いました。</p>
      </section>
    </section>
  </header>
  <main>
    <!-- 共通レイアウト（基本データ・制作の流れ） -->
    <section class="basic-info_container">
      <ul class="basic-info_list">
        <li class="basic-info_option">
          <p class="basic-info_title">Date</p>
          <p class="basic-info_text">2020.2~</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Tool</p>
          <p class="basic-info_text">Figma / HTML / CSS / Procreate/ illustrator</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Style</p>
          <p class="basic-info_text">共同制作</p>
        </li>
      </ul>
        <!-- 目次 -->
      <ol class="table-of-contents_list">
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#制作の流れ"><p class="table-of-contents_text">制作の流れ</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#サービス概要"><p class="table-of-contents_text">サービス概要</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#サービス設計"><p class="table-of-contents_text">サービス設計</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#UIデザイン"><p class="table-of-contents_text">UIデザイン</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#実装"><p class="table-of-contents_text">実装</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#LPデザイン"><p class="table-of-contents_text">LPデザイン</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#ロゴデザイン"><p class="table-of-contents_text">ロゴデザイン</p></a>
        </li>
      </ol>
      <a id="制作の流れ" name="制作の流れ"></a>
      <section class="work-flow_container">
        <h3 class="work-flow_title">制作の流れ</h3>
        <ol class="work-flow_list">
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">サービス企画</h4>
              <p class="work-flow_period">2 weeks</p>
            </div>
            <p class="work-flow_text">エンジニア１名と共同でサービスコンセプトやターゲットを設定しました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">UI設計</h4>
              <p class="work-flow_period">2 months</p>
            </div>
            <p class="work-flow_text">UI、プロトタイプ制作をFigmaで行いました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">実装</h4>
              <p class="work-flow_period">3 months</p>
            </div>
            <p class="work-flow_text">主にHTML / CSSを担当しました。<br>また、LPやロゴの制作も行いました。</p>
          </li>
        </ol>
      </section>
    </section>
    <!-- 記事部分 -->
    <article class="article_container">
      <!-- サービス概要 -->
      <a id="サービス概要" name="サービス概要"></a>
      <section class="article_section">
        <h3 class="article_title">サービス概要</h3>
        <div class="article_sentence">
          <p>
            STOCKROOMは様々なアイデアを一元化して保存するためのネタ帳アプリです。
          </p>
          <p>エンジニアと二人で半年間で制作し、私は主にUIデザインとフロントエンドを担当しました。</p>
        </div>
        <h4 class="article_sub-title">STOCKROOMの特徴</h4>
        <ol class="article_numbered-list">
          <li class="article_numbered-option">思いついた瞬間にひらめきを記録できる</li>
          <li class="article_numbered-option">タグの絞り込み機能やワード検索機能、並べ替え機能でアイデアが見つけやすい</li>
          <li class="article_numbered-option">シャッフル機能でランダムなアイデアの組み合わせを提示し新たなひらめきをお手伝い</li>
          <li class="article_numbered-option">アイデアを一元化することでプロジェクトをまたいだ柔軟な発想ができる</li>
        </ol>
      </section>
      <a id="サービス設計" name="サービス設計"></a>

      <section class="article_section">
        <h3 class="article_title">サービス設計</h3>
        <div class="article_sentence">
          <p>
            当時ハッカソンや卒業研究など場面で様々なアイデア出しを行っていて、思いついたアイデアが議事録やメモ帳、ノートツールに散乱してしまっていることに課題を感じていました。
          </p>
          <p>
            「あの時思いついたあのアイデア、こっちのプロジェクトと掛け合わせたら良い感じになりそうだけど詳細が思い出せない」「前に良い企画思いついたのに忘れちゃった」
          </p>
          <p>
            そんな状況で、企画のアイデアややりたいことといったいつか役に立ちそうな「ひらめき」を一箇所にまとめてストックしておけたら新たな創造の役に立つのではないかと思い、サービスを設計しました。
          </p>
        </div>
      </section>

      <a id="UIデザイン" name="UIデザイン"></a>

      <section class="article_section">
        <h3 class="article_title">UIデザイン</h3>

        <section class="article_sub-section">
          <h4 class="article_sub-title">ひらめきを見る</h4>
          <div class="article_sentence">
            <p>
              ホーム画面では追加したひらめきを一覧で表示します。表示はギャラリー型とリスト型で切り替えることができます。
            </p>
            <p>
              ひらめきに設定したひらめき度や追加した日時で並べ替えることもできます。
            </p>
          </div>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui01.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">ひらめきの作成</h4>
          <p class="article_sentence">ひらめきを追加する際には、そのひらめきを一言で表す「タイトル」と、補足のメモを追加できます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui02.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">ひらめきを絞り込む</h4>
          <p class="article_sentence">ひらめきに設定したカテゴリーやタグでひらめきを絞り込むことができます</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui03.png" alt="">
          </p>
        </section>

        <button class="article_hug-btn" type="button" target="_blank" onclick="location.href='https://www.figma.com/file/qHRAVlk9zDJW1emWVPbDwf/STOCKROOM_%E5%85%AC%E9%96%8B%E7%94%A8?node-id=0%3A1'">
          <p class="article_hug-btn-text">Figmaでデザインデータを見る</p>
        </button>
      </section>

      <a id="実装" name="実装"></a>
      <section class="article_section">
        <h3 class="article_title">実装</h3>
        <p class="article_sentence">実装では主にHTMLとCSSを担当しました。</p>
        <button class="article_hug-btn" type="button" onclick="location.href='https://stockroom.work/'">
          <p class="article_hug-btn-text">サービスページ</p>
        </button>
      </section>

      <a id="LPデザイン" name="LPデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">LPデザイン</h3>
        <div class="article_sentence">
          <p>
            サービス公開にあたり、LPのデザインと実装を行いました。
          </p>
          <p>
            LPに使用するイラストはProcreateとIllustratorを用いて作成しています。
          </p>
        </div>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/lp01.png" alt="">
        </p>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/lp02.png" alt="">
        </p>
        <button class="article_hug-btn" type="button" onclick="location.href='https://stockroom.work/introduction'">
          <p class="article_hug-btn-text">LPを見る</p>
        </button>
      </section>

      <a id="ロゴデザイン" name="ロゴデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">ロゴデザイン</h3>
        <div class="article_sentence">
          <p>
            サービス公開にあたり、ロゴデザインを作成しました。
          </p>
          <p>
            「ひらめき」から電球を連想、ストックしている様子から「リスト」を連想し、二つのモチーフを掛け合わせています。
          </p>
          <p>
            ロゴタイプはポップで丸みを帯びたもの採用し、「ひらめきを思いついた喜び」「気軽なストック」をイメージしています。
          </p>
        </div>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/logo01.png" alt="">
        </p>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/logo02.png" alt="">
        </p>
      </section>
    </article>
  </main>
  <script>
    feather.replace()
  </script>
</body>
</html>
