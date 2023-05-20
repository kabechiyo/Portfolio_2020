<!-- 経営デザインシート -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="descripton" content="経営デザインシート | aizawa design">
  <!-- サイトの紹介文 -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- feather読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/loading.js"></script>
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon-180x180.png">
  <?php include('../../setting.php'); ?>
  <title>経営デザインシート</title>
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
        <h1 class="header_title">経営デザインシート</h1>
        <!-- ジャンル -->
        <ul class="header_genre-list">
          <li class="header_genre-option">フレームワーク</li>
          <li class="header_genre-option">図解</li>
        </ul>
      </div>
      <!-- 背景画像 -->
      <div class="header_img-wrapper">
        <img class="header_img" src="assets/img/header.png" alt="">
      </div>
      <!-- 説明文 -->
      <section class="header_info-container">
        <h2 class="header_concept">経営理解を深めるフレームワーク</h2>
        <p class="header_sentence">経営デザインシートは、会社や事業の存在意義を意識した上で、将来を構想するためのフレームワークです。内閣府主催の<a href="https://www.kantei.go.jp/jp/singi/titeki2/keiei_design/redesign/redesign.html">「経営デザインシート リデザインコンペティション」</a>に応募し、準大賞を受賞しました。既存のフレームワークの魅力を整理した上で課題点を克服し、より使いやすい形にアップデートを行っています。</p>
      </section>
    </section>
  </header>
  <main>
    <!-- 共通レイアウト（基本データ・制作の流れ） -->
    <section class="basic-info_container">
      <ul class="basic-info_list">
        <li class="basic-info_option">
          <p class="basic-info_title">Date</p>
          <p class="basic-info_text">2019.9~</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Tool</p>
          <p class="basic-info_text">XD</p>
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
          <a class="table-of-contents_link" href="#デザイン"><p class="table-of-contents_text">デザイン</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#リサーチ"><p class="table-of-contents_text">リサーチ</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#制作"><p class="table-of-contents_text">制作</p></a>
        </li>
      </ol>
      <a id="制作の流れ" name="制作の流れ"></a>
      <section class="work-flow_container">
        <h3 class="work-flow_title">制作の流れ</h3>
        <ol class="work-flow_list">
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">リサーチ</h4>
              <p class="work-flow_period">2 weeks</p>
            </div>
            <p class="work-flow_text">既存の経営デザインシートについて調査を行いました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">企画・設計</h4>
              <p class="work-flow_period">1 week</p>
            </div>
            <p class="work-flow_text">リサーチをもとにリデザインの方向性を企画・設計しました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">デザイン</h4>
              <p class="work-flow_period">1 week</p>
            </div>
            <p class="work-flow_text">企画・設計を元にシートのデザインを制作しました。</p>
          </li>
        </ol>
      </section>
    </section>
    <!-- 記事部分 -->
    <article class="article_container">
      <!-- デザイン -->
      <a id="デザイン" name="デザイン"></a>
      <section class="article_section">
        <h3 class="article_title">デザイン</h3>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/design.png" alt="">
        </p>
        <button class="article_hug-btn" type="button" onclick="location.href='assets/keieidesignsheet.pdf'">
          <p class="article_hug-btn-text">PDFで表示</p>
        </button>
      </section>
      <!-- リサーチ -->
      <a id="リサーチ" name="リサーチ"></a>
      <section class="article_section">
        <h3 class="article_title">リサーチ</h3>
        <p class="article_sentence">まず、既存の経営デザインシートについてリサーチを行いました。</p>
        <section class="article_sub-section">
          <h4 class="article_sub-title">経営デザインシートとは</h4>
          <ol class="article_5w1h-list">
            <li class="article_5w1h-option who">経営や事業、組織の一員が</li>
            <li class="article_5w1h-option when">事業の継承や新規立案、将来の構想をする時に</li>
            <li class="article_5w1h-option where">会社の会議室などで</li>
            <li class="article_5w1h-option why"><span class="article_text_highlight">事業の強みを明確にし、発展させていく</span>ために</li>
            <li class="article_5w1h-option how"><span class="article_text_highlight">過去・現在・未来の視点でビジネスを捉える</span>ことで</li>
            <li class="article_5w1h-option what"><span class="article_text_highlight">事業の向かう方向とその為にやるべきことを把握する</span>フレームワーク</li>
          </ol>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">経営デザインシートのポイント</h4>
          <p class="article_sentence">経営デザインシートの最大の特徴は、過去・現在・未来の視点で事業を捉えることができる点です。<br>今までやってきたことから事業のらしさやリソースを抽出することで、環境の変化に強いビジネスモデルを設計することができます。<br>更に事業の「これまで」から「これから」の流れを俯瞰することで事業への理解が深まり、納得感を持って現状の課題に取り組むことができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/research01.png" alt="過去から未来へ、リソースを活かした将来構想ができる。未来と過去の差分から現在へ、現状やるべきことが明確になる。過去から現在、そして未来へ、流れを俯瞰することで事業への理解が深まる">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">現状の課題</h4>
          <p class="article_sentence"><span class="article_sentence_bold">見た目の課題</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">経営デザインシートのポイントである「時間軸」が分かりづらい</li>
            <li class="article_bulleted-option">色や文字がごちゃごちゃしていて、見辛い</li>
            <li class="article_bulleted-option">重要なポイントがどこなのかが分からない</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">構造の課題</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">どうやってシートを使えばいいのかがわからない</li>
            <li class="article_bulleted-option">それぞれの項目について考えを深める余白がない</li>
            <li class="article_bulleted-option">使われている言葉が曖昧で、何を書けばいいのかが分からない</li>
          </ol>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/research02.png" alt="">
          </p>
        </section>
      </section>
      <!-- 制作 -->
      <a id="制作" name="制作"></a>
      <section class="article_section">
        <h3 class="article_title">制作</h3>
        <p class="article_sentence">リサーチで整理した内容を元に、改善方法を設計しました。見た目や構造は変えつつ、ポイントである「過去・現在・未来」の視点と一覧性を損なわずに、効果を高められるよう考案しました。</p>
        <section class="article_sub-section">
          <h4 class="article_sub-title">課題へのアプローチ</h4>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">時間の流れが分かりやすいよう「過去」「現在」「未来」の順に並べる</li>
            <li class="article_bulleted-option">書き込みやすいよう白を基調にし、色数を減らす</li>
            <li class="article_bulleted-option">重要なポイントを「事業の目的」と「提供価値」に絞り、色をつける</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">構造の課題</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">How To Useページでやるべきこととポイントを整理し、使い方を分かりやすくする</li>
            <li class="article_bulleted-option">それぞれの項目について考えるシートを用意し考えを深められるようにする</li>
            <li class="article_bulleted-option">各項目の名称に分かりやすい言葉を使い、何を書くべきかを併記する</li>
          </ol>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">How To Use</h4>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design01.png" alt="">
          </p>
          <p class="article_sentence">「どうやってシートを使えばいいのかが分からない」という課題を解決するために、HowTo Useページを作成しました。<br>それぞれのシートで行うこととポイントを整理し、フレームワークを最大限に活用できるようサポートします。</p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">01  「これまでやってきたこと」を整理する</h4>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design02.png" alt="">
          </p>
          <p class="article_sentence">このページでは「過去」「現在」「未来」のうち、過去に焦点を当てて事業について整理します。</p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">02  「これからどうなりたいか」を構想する</h4>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design03.png" alt="">
          </p>
          <p class="article_sentence">このページでは「過去」「現在」「未来」のうち、未来に焦点を当てて、これから事業がどうなって行きたいかを整理します。01で整理した「これまでやってきたこと」や事業の目的、提供価値を踏まえることでリソースを活用した将来を構想することができます。</p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">03 「今、やるべきこと」を把握する</h4>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design04.png" alt="">
          </p>
          <p class="article_sentence">このページでは「過去」「現在」「未来」のうち、現在に焦点を当てて「これまで」から「これから」へと移行するために「今、やるべきこと」を把握します。</p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">04 まとめシート</h4>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/design05.png" alt="">
          </p>
          <p class="article_sentence">01 ~ 03 で整理した内容を一枚の紙にまとめることで、「これまで」と「これから」、そして「今、やるべきこと」を俯瞰して見ることができます。</p>
        </section>
      </section>
    </article>
  </main>
  <script>
    feather.replace()
  </script>
</body>
</html>
