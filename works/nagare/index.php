<!-- 経営デザインシート -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="descripton" content="nagare.mov | aizawa design">
  <!-- サイトの紹介文 -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- feather読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/loading.js"></script>
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon-180x180.png">
  <?php include('../../setting.php'); ?>
  <title>nagare.mov</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
        <h1 class="header_title">nagare.mov</h1>
        <!-- ジャンル -->
        <ul class="header_genre-list">
          <li class="header_genre-option">ロゴデザイン</li>
          <li class="header_genre-option">ジェネラティブアート</li>
        </ul>
      </div>
      <!-- 背景画像 -->
      <div class="header_img-wrapper">
        <img class="header_img" src="assets/img/header.jpg" alt="">
      </div>
      <!-- 説明文 -->
      <section class="header_info-container">
        <h2 class="header_concept">流れに「触れる」、流れで「遊ぶ」</h2>
        <p class="header_sentence">所属するクリエイティブサークル「mov」で制作したインスタレーション展示「nagare.mov」でVI制作を担当しました。スクリーンには一面の海と魚たちが映し出されており、コントローラーに手をかざすことで、映し出された魚たちの流れに干渉することができます。普段だったら触れることのできない「流れ」に触れて、遊ぶことで流れの不思議さを感じることができます。</p>
      </section>
    </section>
  </header>
  <main>
    <!-- 共通レイアウト（基本データ・制作の流れ） -->
    <section class="basic-info_container">
      <ul class="basic-info_list">
        <li class="basic-info_option">
          <p class="basic-info_title">Date</p>
          <p class="basic-info_text">2018.7~</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Tool</p>
          <p class="basic-info_text">Illustrator / p5.js</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Style</p>
          <p class="basic-info_text">サークル制作</p>
        </li>
      </ul>
        <!-- 目次 -->
      <ol class="table-of-contents_list">
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#制作の流れ"><p class="table-of-contents_text">制作の流れ</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#ジェネラティブアート"><p class="table-of-contents_text">ジェネラティブアート</p></a>
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
              <h4 class="work-flow_process">コンセプト設計</h4>
              <p class="work-flow_period">2 weeks</p>
            </div>
            <p class="work-flow_text">サークルメンバーでコンセプトを設定しました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">ロゴデザイン</h4>
              <p class="work-flow_period">2 weeks</p>
            </div>
            <p class="work-flow_text">Illustrator を用いてロゴを作成しました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">ジェネラティブアート</h4>
              <p class="work-flow_period">4 weeks</p>
            </div>
            <p class="work-flow_text">p5.jsを用いて、サイトのヘッダーに使用するジェネラティブアートを作成しました。</p>
          </li>
        </ol>
      </section>
    </section>
    <!-- 記事部分 -->
    <article class="article_container">

      <a id="ジェネラティブアート" name="ジェネラティブアート"></a>
      <section class="article_section">
        <h3 class="article_title">ジェネラティブアート</h3>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/generative_art01.png" alt="">
        </p>
        <p class="article_sentence">企画展示特設サイトのヘッダーで用いるために、p5.jsでgenerative artを制作しました。スクリーン上に映し出された常にゆらゆらと揺らめいています。マウスに反応して波の形が変わります。</p>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/generative_art02.png" alt="">
        </p>
        <p class="article_sentence">スクリーンに描画されている波が、マウスを頂点とするガウス曲線に緩やかに近づいていくことでインタラクションを表現しています。</p>
      </section>

      <a id="ロゴデザイン" name="ロゴデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">ロゴデザイン</h3>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/logo01.png" alt="">
        </p>
        <p class="article_sentence">展示のコンセプトと内容を端的に表すために波の止まった「凪」の状態と波の荒れている「時化」の状態、両者間に干渉する「手」をモチーフに、ロゴマークを作成しました。</p>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/logo02.png" alt="">
        </p>
        <p class="article_sentence">メンバーの展示に対する認識とズレのないよう、メンバーの意見をもとにラフスケッチから案の絞り込み、細部のブラッシュアップを行いました。</p>
      </section>
    </article>
  </main>
  <script>
    feather.replace()
  </script>
</body>
</html>
