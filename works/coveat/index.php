<!-- 経営デザインシート -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="descripton" content="covEAT | aizawa design">
  <!-- サイトの紹介文 -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- feather読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/loading.js"></script>
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon-180x180.png">
  <?php include('../../setting.php'); ?>
  <title>covEAT</title>
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
        <h1 class="header_title">covEAT</h1>
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
        <h2 class="header_concept">口コミでわかる、感染対策をしている飲食店MAP</h2>
        <p class="header_sentence">covEATはユーザーが飲食店の感染症対策について投稿・閲覧できるサービスです。エンジニア2名と一緒に2ヶ月半ほどで制作しました。</p>
      </section>
    </section>
  </header>
  <main>
    <!-- 共通レイアウト（基本データ・制作の流れ） -->
    <section class="basic-info_container">
      <ul class="basic-info_list">
        <li class="basic-info_option">
          <p class="basic-info_title">Date</p>
          <p class="basic-info_text">2020.5~</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Tool</p>
          <p class="basic-info_text">Figma / HTML / CSS / React</p>
        </li>
        <li class="basic-info_separator"></li>
        <li class="basic-info_option">
          <p class="basic-info_title">Style</p>
          <p class="basic-info_text">グループ制作</p>
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
          <a class="table-of-contents_link" href="#UIデザイン"><p class="table-of-contents_text">UIデザイン</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#イラストレーション"><p class="table-of-contents_text">イラストレーション</p></a>
        </li>
      </ol>
      <a id="制作の流れ" name="制作の流れ"></a>
      <section class="work-flow_container">
        <h3 class="work-flow_title">制作の流れ</h3>
        <ol class="work-flow_list">
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">サービス企画</h4>
              <p class="work-flow_period">1 week</p>
            </div>
            <p class="work-flow_text">メンバーのアイデアから企画を始め、サービスの企画を設計しました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">設計</h4>
              <p class="work-flow_period">1 week</p>
            </div>
            <p class="work-flow_text">Figmaを用いでUI・プロトタイプ制作を行いました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">実装</h4>
              <p class="work-flow_period">2 weeks</p>
            </div>
            <p class="work-flow_text">主にフロントエンドのマークアップ・スタイリング部分とLPの実装を担当しました。</p>
          </li>
        </ol>
      </section>
    </section>
    <!-- 記事部分 -->
    <article class="article_container">
      <a id="サービス概要" name="サービス概要"></a>
      <section class="article_section">
        <h3 class="article_title">サービス概要</h3>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/about.png" alt="">
        </p>
        <section>
          <h4 class="article_sub-title">オーナー側ターゲット</h4>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">個人経営・感染対策をきちんとしているお店</li>
            <li class="article_bulleted-option">ニーズ：お客さんを増やしたい</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">お店の登録のモチベーション</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">ユーザーから見えていない感染対策も伝えられる</li>
            <li class="article_bulleted-option">ユーザーの声が聞ける</li>
          </ol>
          <p class="article_sentence">このサービス経由で来たお客さんは感染対策を気にする＝お店の感染対策に理解を示し協力してくれるお客さんなのでお店側にもメリットがある</p>
        </section>
        <section>
          <h4 class="article_sub-title">ユーザー側ターゲット</h4>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">感染時のリスクが高く外出頻度が高い人</li>
            <li class="article_bulleted-option">潔癖症や持病があって衛生対策が気になるひと</li>
            <li class="article_bulleted-option">応援や愛着を大切にする人</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">お店の登録のモチベーション</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">登録：人にお勧めできるお店を紹介する</li>
            <li class="article_bulleted-option">検索：行ってもいい場所を見つける</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">「お店を応援する」モチベーション</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">お店に感謝を伝えられる</li>
            <li class="article_bulleted-option">もっとお店の対策が良くなるかも</li>
          </ol>
        </section>
      </section>

      <a id="UIデザイン" name="UIデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">UIデザイン</h3>
        <section class="article_sub-section">
          <h4 class="article_sub-title">お店の検索</h4>
          <div class="article_sentence">
            <p>
              エリアを指定してお店を検索できます、
            </p>
            <p>
              検索結果はマップ上に表示され、ジャンルで絞り込むことができます。
            </p>
          </div>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui01.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">レビューの投稿</h4>
          <p class="article_sentence">お店にはレビューを投稿できます。お店の感染対策が良かった場合と悪かった場合を選択できます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui02.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">お店を登録</h4>
          <p class="article_sentence">マップに。登録されていないお店は、リクエストで追加を申請できます</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui03.png" alt="">
          </p>
        </section>

        <button class="article_hug-btn" type="button" target="_blank" onclick="location.href='https://www.figma.com/proto/dFZqBg87YWsWmcLusbbeJS/covEAT?page-id=234%3A1087&type=design&node-id=234-1636&viewport=2773%2C-820%2C0.61&scaling=scale-down&starting-point-node-id=234%3A1636&show-proto-sidebar=1'">
          <p class="article_hug-btn-text">Figmaでデザインデータを見る</p>
        </button>
      </section>

      <a id="イラストレーション" name="イラストレーション"></a>
      <section class="article_section">
        <h3 class="article_title">イラストレーション</h3>
        <div class="article_sentence">
          <p>
            サービス公開にあたり、LPのデザインと実装を行いました。
          </p>
          <p>
            LPに使用するイラストはProcreateとIllustratorを用いて作成しています。
          </p>
        </div>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/illust.png" alt="">
        </p>
      </section>
    </article>
  </main>
  <script>
    feather.replace()
  </script>
</body>
</html>
