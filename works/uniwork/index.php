<!-- 経営デザインシート -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="descripton" content="uniwork | aizawa design">
  <!-- サイトの紹介文 -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- feather読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/loading.js"></script>
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon-180x180.png">
  <?php include('../../setting.php'); ?>
  <title>uniwork</title>
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
        <h1 class="header_title">uniwork</h1>
        <!-- ジャンル -->
        <ul class="header_genre-list">
          <li class="header_genre-option">UIデザイン</li>
          <li class="header_genre-option">サービスデザイン</li>
        </ul>
      </div>
      <!-- 背景画像 -->
      <div class="header_img-wrapper">
        <img class="header_img" src="assets/img/header.jpg" alt="">
      </div>
      <!-- 説明文 -->
      <section class="header_info-container">
        <h2 class="header_concept">企業と地方学生”仕事単位”でマッチング</h2>
        <p class="header_sentence">就職活動の早期化とインターンシップの浸透が年々進んでいます。これにより、地方学生の就職活動の負担が増加傾向にあります。そんな学生の負担を減らしたいという想いから、企業と地方学生をマッチングするサービスを企画しました。</p>
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
          <p class="basic-info_text">Figma / HTML / CSS</p>
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
          <a class="table-of-contents_link" href="#ターゲット"><p class="table-of-contents_text">ターゲット</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#サービス概要"><p class="table-of-contents_text">サービス概要</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#UIデザイン"><p class="table-of-contents_text">UIデザイン</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#ロゴデザイン"><p class="table-of-contents_text">ロゴデザイン</p></a>
        </li>
        <li class="table-of-contents_option">
          <a class="table-of-contents_link" href="#LPデザイン"><p class="table-of-contents_text">LPデザイン</p></a>
        </li>
      </ol>
      <a id="制作の流れ" name="制作の流れ"></a>
      <section class="work-flow_container">
        <h3 class="work-flow_title">制作の流れ</h3>
        <ol class="work-flow_list">
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">サービス企画</h4>
              <p class="work-flow_period">1.5 weeks</p>
            </div>
            <p class="work-flow_text">メンバーとサービスコンセプトやターゲットを設定しました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">設計</h4>
              <p class="work-flow_period">1.5 weeks</p>
            </div>
            <p class="work-flow_text">UI、プロトタイプ制作をFigmaで行いました。</p>
          </li>
          <li class="work-flow_option">
            <div class="work-flow_row">
              <h4 class="work-flow_process">実装</h4>
              <p class="work-flow_period">1 week</p>
            </div>
            <p class="work-flow_text">主にフロントエンドのマークアップ・スタイリング部分とLPの実装を担当しました。</p>
          </li>
        </ol>
      </section>
    </section>
    <!-- 記事部分 -->
    <article class="article_container">
      <a id="ターゲット" name="ターゲット"></a>
      <section class="article_section">
      <h3 class="article_title">ターゲット</h3>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/about.png" alt="">
        </p>
        <section>
          <h4 class="article_sub-title">学生</h4>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">就職活動で頻繁に県外へ行く</li>
            <li class="article_bulleted-option">就活でお金がかかる・バイトに入れないのが悩み</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">課題・ニーズ</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">就職活動を始めてお金と時間がなくなってしまった。</li>
            <li class="article_bulleted-option">頻繁に東京に行くので交通費がかかる、まとまった時間も取れなくてバイトができない。</li>
            <li class="article_bulleted-option">なるべく業界研究や自分のスキルアップの時間を取りたい</li>
          </ol>
        </section>
        <section>
          <h4 class="article_sub-title">会社</h4>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">制作から遠い業務まで手が回らなくなってきた</li>
            <li class="article_bulleted-option">コワーキングオフィスを借りて仕事をしている</li>
          </ol>
          <p class="article_sentence"><span class="article_sentence_bold">課題・ニーズ</span></p>
          <ol class="article_bulleted-list">
            <li class="article_bulleted-option">事業が軌道に乗ってきて、人手が足りなくなってきた。</li>
            <li class="article_bulleted-option">かといって一人社員を雇うのは、閑散期やスペース、採用までにかかるコストが悩ましい。</li>
          </ol>
      </section>

      <a id="サービス概要" name="サービス概要"></a>
      <section class="article_section">
        <h3 class="article_title">サービス概要</h3>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/about.png" alt="">
        </p>
        <p class="article_sentence">企業と学生を「業務単位」の「リモートワーク」でつなぐことで両者の課題を解決します。</p>
        <section>
          <h4 class="article_sub-title">学生側</h4>
          <div class="article_sentence">
            <p>
              空いてる時間に必要な分だけ交通費不要で自分の好きな場所で必要なお金がすぐに稼げます。
            </p>
            <p>
              都内企業で実践的・実務的な業務内容でスキルアップ・業界研究につながります。
            </p>
          </div>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/about01.png" alt="">
          </p>
        </section>
        <section>
          <h4 class="article_sub-title">企業側</h4>
          <div class="article_sentence">
            <p>
              業務スペースなどの準備不要で業務の負担軽減ができます。
            </p>
          </div>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/about02.png" alt="">
          </p>
        </section>
      </section>

      <a id="UIデザイン" name="UIデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">UIデザイン</h3>
        <section class="article_sub-section">
          <h4 class="article_sub-title">学生トップ</h4>
          <p class="article_sentence">
            トップページが募集一覧ページになっていて、すぐに仕事を探して応募することができます。
          </p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui01.png" alt="">
          </p>
        </section>
        <section class="article_sub-section">
          <h4 class="article_sub-title">学生プロフィール</h4>
          <p class="article_sentence">自己紹介やスキル、スケジュールを登録することで企業とマッチングしやすくなります。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui02.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">メッセージ</h4>
          <p class="article_sentence">企業とメッセージのやり取りができるので応募前に詳細の確認などもできます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui03.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">フィードバック</h4>
          <p class="article_sentence">学生と企業が業務完了後に、相互にフィードバックをつけることで、誠実な仕事をサポートします。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui04.png" alt="">
          </p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui05.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">企業業務管理画面</h4>
          <p class="article_sentence">ホーム画面では募集中の業務の内容や新規の応募を確認することができます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui06.png" alt="">
          </p>
        </section>

        <section class="article_sub-section">
          <h4 class="article_sub-title">企業応募者管理画面</h4>
          <p class="article_sentence">募集詳細ページでは業務への応募者を確認することができます。気になる応募者とはメッセージのやり取りもできます。</p>
          <p class="article_img-wrapper">
            <img class="article_img" src="assets/img/ui07.png" alt="">
          </p>
        </section>

      </section>

      <a id="ロゴデザイン" name="ロゴデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">ロゴデザイン</h3>
        <p class="article_sentence">
          黄色で学生らしさ・新しさを演出しつつ、シンプルなタイポグラフィすることで落ち着きと安心感を表現しました。
        </p>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/logo01.png" alt="">
        </p>
      </section>

      <a id="LPデザイン" name="LPデザイン"></a>
      <section class="article_section">
        <h3 class="article_title">LPデザイン</h3>
        <div class="article_sentence">
          <p>「やってみようかな」と思ってもらう</p>
          <p>をコンセプトにuniworkのLPページのデザイン制作と実装をしました。</p>
          <p>学生が「自分にできるか」と不安に感じないようイラストや画像を用いて親しみやすさを演出しました。</p>
        </div>
        <p class="article_img-wrapper">
          <img class="article_img" src="assets/img/lp.png" alt="">
        </p>
      </section>
    </article>
  </main>
  <script>
    feather.replace()
  </script>
</body>
</html>
