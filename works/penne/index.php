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
  <?php include('../../setting.php'); ?>
  <title>Penne</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"> </head>
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
        <h1 class="header_title">Penne</h1>
        <!-- ジャンル -->
        <ul class="header_genre-list">
          <li class="header_genre-option">UX/UIデザイン</li>
          <li class="header_genre-option">サービスデザイン</li>
        </ul>
      </div>
      <!-- 背景画像 -->
      <div class="header_img-wrapper">
        <img class="header_img" src="assets/img/header.png" alt="">
      </div>
      <!-- 説明文 -->
      <section class="header_info-container">
        <h2 class="header_concept">情報を俯瞰するノートツール</h2>
        <p class="header_sentence">日々夥しい量の情報が飛び込んできます。そのため、せっかくノートを取っても埋もれてしまい、手に入れた情報を活用することができません。Penneは、情報の理解とストックをサポートすることで、そんな現代人の悩みを解決するノートツールです。</p>
      </section>
    </section>
  </header>
  <main>
    <!-- 共通レイアウト（基本データ・制作の流れ） -->
    <section class="basic-info_container">
      <ul class="basic-info_list">
        <li class="basic-info_option">
          <p class="basic-info_title">Date</p>
          <p class="basic-info_text">2019.6~</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Tool</p>
          <p class="basic-info_text">XD / HTML / CSS / jQuery</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Style</p>
          <p class="basic-info_text">個人制作</p>
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
            <p class="work-flow_text">情報を視覚的に整理できるサービスをつくりたいというアイデアのもと、企画を詰めました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">UX/UI設計</h4>
              <p class="work-flow_period">3 weeks</p>
            </div>
            <p class="work-flow_text">XDでUIを作成しました</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">プロトタイプ制作</h4>
              <p class="work-flow_period">3 weeks</p>
            </div>
            <p class="work-flow_text">HTML・CSS・jQuery を用いてプロトタイプを制作しました</p>
          </li>
        </ol>
      </section>
    </section>
    <!-- 記事部分 -->
    <article class="article_container">
      <!-- サービス概要 -->
      <a id="サービス設計" name="サービス設計"></a>
      <section class="article_section">
        <h3 class="article_title">サービス設計</h3>
        <p class="article_sentence">
          もともとはデザインを学んでいない大学の友人がポスターやスライド資料の作成に手間取る姿を見て、ノンデザイナーでも簡単にレイアウトを作れたらいいのにと思い、「簡単に綺麗なレイアウトが作成できるツール」の企画を始めました。
          制作を進める中で、課題はツールでレイアウトをすることが難しいことではなく、そもそも情報を構造化できていないことであると気付きました。
          そこで、情報を構造化しレイアウトすることで理解を促進できるツールを考えました。
        </p>
      </section>

      <a id="デザイン" name="デザイン"></a>
      <section class="article_section">
        <h3 class="article_title">デザイン</h3>
        <section class="article_sub-section">
          <p class="article_sentence">
            Penneは「ブロック」単位で情報を整理します。
            情報を構造化しながら整理することができる「マークダウン記法」から着想を得ており、親子関係と並列関係を表現することができます。
            ブロックをレイアウトすることで、視覚的に情報の構造化が実現できます。
          </p>
          <p class="article_sentence">
            考案当初のターゲットはデザインを勉強していない友達でした。友達が授業で用いるプレゼン資料作りに苦戦している様子を見て、「もっと簡単にレイアウトのできるツールがあればいいのに」と感じてツールのデザインを始めました。しかし、友達が課題をこなす姿を見ているうちに、本当の課題は<span class="text_important">情報の「構造化」が出来ていないこと</span>だと気がつきました。そこから、情報の構造化と可視化、そしてストックができるツールにデザインを変更しました。
          </p>
        </section>
      </section>

      <section class="article_section">
        <h3 class="article_title">情報の構造化とレイアウトの流れ</h3>
        <section class="article_sub-section">
          <h4 class="article_sub-title">01 情報のまとまりを作る</h4>
          <p class="article_sentence">Penneはノートの中身を「ブロック」で管理します。これにより、ノートを取りながら「情報のまとまり」を意識することができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design01.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">02 情報の関係性を表す</h4>
          <p class="article_sentence">ブロックはドラッグ＆ドロップで簡単に並べ替えることができます。整列させることで「並列関係」、入れ子にすることで「親子関係」など情報の構造が一目で分かるようになります。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design02.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">03 デザインする</h4>
          <p class="article_sentence">余白や文字サイズ、色を調整することでよりノートを見やすく直感的にわかりやすくします。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design03.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">04 全体を俯瞰する</h4>
          <p class="article_sentence">全体を見渡すことで、情報のまとまりや関連性、優先順位などを直感的・体系的に理解することができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design04.png" alt="">
          </p>
        </section>
      </section>

      <a id="UIデザイン" name="UIデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">UIデザイン</h3>
        <section class="article_sub-section">
          <h4 class="article_sub-title">レイアウトの作成</h4>
          <p class="article_sentence">ドラッグ&ドロップでブロックを追加したり動かしたりしながら、情報のまとまりや関係性を考えることができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui01.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">デザインの作成</h4>
          <p class="article_sentence">ブロックには文字や画像、予め用意されているアセットを入れることができます。また、文字サイズや背景色などを変更してデザインを作成できます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui02.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">ノートの整理</h4>
          <p class="article_sentence">ノートはフォルダで管理することができます。また、検索機能でノートのタイトルやノート内のテキストを検索することができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui03.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">ノートのアウトプット</h4>
          <p class="article_sentence">作成したノートは画像やPDF形式で書き出すことができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui04.png" alt="">
          </p>
        </section>
      </section>

    </article>
  </main>
  <script>
    feather.replace()
  </script>
</body>
</html>
