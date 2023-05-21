<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <meta content="相澤春伽のポートフォリオサイトです。" name="description">
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/loading.js"></script>
  <script type="text/javascript" src="assets/js/rellax.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="assets/img/favicons/favicon.ico" rel="icon" type="image/x-icon">
  <link href="assets/img/favicons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
  <?php include('setting.php'); ?>
  <title>aizawa design</title>
</head>

<body>
  <?php include('loading.php'); ?>
  <header>
    <section class="top-header">
      <h1 class="top-header_title">Portfolio by Shunka Aizawa</h1>
      <h2 class="top-header_subtitle">Design with purpose</h2>
      <div class="top-header_background">
        <iframe class="top-header_background-container" alt=""
          src="https://editor.p5js.org/aizawa213/full/ZfkDPDF7l"></iframe>
      </div>
    </section>
    <?php include('nav.php'); ?>
  </header>
  <!-- メインコンテンツ -->
  <main>
    <!-- works -->
    <section class="top-contents_section">
      <a id="works" name="works"></a>
      <div class="top-contents_title-container">
        <h3 class="top-contents_title">works</h3>
      </div>
      <ul class="top-works">
        <li class="top-works_card">
          <p class="top-works_img-wrapper"><img alt="" class="top-works_img" src="assets/img/keieidesignsheet.jpg"></p>
          <section class="top-works_contents">
            <div class="top-works_title-box">
              <h3 class="top-works_title jp">経営デザインシート</h3>
              <ul class="top-works_genre">
                <li class="top-works_genre-option">図解</li>
                <li class="top-works_genre-option">フレームワーク</li>
              </ul>
            </div>
            <section class="top-works_summary">
              <h4 class="top-works_concept">経営理解を深めるフレームワーク</h4>
              <p class="top-works_explication">経営デザインシートは、会社や事業の存在意義を意識した上で、将来を構想するためのフレームワークです。内閣府主催の「経営デザインシート
                リデザインコンペティション」に応募し、準大賞を受賞しました。既存のフレームワークの魅力を整理した上で課題点を克服し、より使いやすい形にアップデートを行っています。</p>
              <button class="work-more-btn normal-btn" type="button" onclick="location.href='./works/keieidesignsheet/'">
                <p class="normal-btn_text">もっと見る</p>
              </button>
            </section>
          </section>
        </li>
        <li class="top-works_card">
          <p class="top-works_img-wrapper"><img alt="" class="top-works_img" src="assets/img/stockroom.jpg"></p>
          <section class="top-works_contents">
            <div class="top-works_title-box">
              <h3 class="top-works_title">STOCKROOM</h3>
              <ul class="top-works_genre">
                <li class="top-works_genre-option">UIデザイン</li>
                <li class="top-works_genre-option">サービスデザイン</li>
              </ul>
            </div>
            <section class="top-works_summary">
              <h4 class="top-works_concept">ひらめきを一元化するネタ帳アプリ</h4>
              <p class="top-works_explication">
                STOCKROOMは様々なアイデアを一元化して保存するためのネタ帳アプリです。様々な場面で企画やアイデア出しを行う中で議事録やノートツール、メモ帳に思いついたものが散乱してしまうのを課題に感じていました。そこで、「ひらめき」を一元化できるネタ帳アプリを考案し制作を行いました。
              </p>
              <button class="normal-btn work-more-btn" type="button" onclick="location.href='./works/stockroom/'">
                <p class="normal-btn_text">もっと見る</p>
              </button>
            </section>
          </section>
        </li>
        <li class="top_btn_wrapper">
          <button class="top_btn_primary" type="button" onclick="location.href='./works/'">
            <span class="top_btn-text_primary">全ての作品を見る</span>
          </button>
        </li>
      </ul>
    </section>
    <!-- about -->
    <section class="top-contents_section">
      <a id="about" name="about">
        <div class="top-contents_title-container">
          <h3 class="top-contents_title">about</h3>
        </div>
      </a>
      <section class="about_contents">
        <!-- プロフィール -->
        <section class="about_profile">
          <div class="about_profile-box">
            <h4 class="about_name">shunka aizawa</h4>
            <ol class="about_career">
              <li class="about_career-option">2017.4 宮城大学 入学</li>
              <li class="about_career-option">2021.3 宮城大学 価値創造デザイン学類 卒業</li>
            </ol>
            <p class="about_sentence">
              webデザイン、UIデザイン、コーディングを中心にデザインについて勉強しています。<br>情報を構造化して図解することが得意です。
            </p>
            <a class="normal-btn about_twitter" href="https://twitter.com/kabechiyo13">
              <img class="normal-btn_icon about_twitter" src="assets/img/twitter-icon.svg" alt="">
              <p class="normal-btn_text about_twitter">Twitter</p>
            </a>
          </div>
          <!-- 写真と好きなもの -->
          <div class="about_img-box">
            <p class="about_img-container">
              <img alt="" class="about_img" src="assets/img/profile.jpg">
            </p>
            <ul class="about_like-list">
              <li class="about_like-option">デザイン</li>
              <li class="about_like-option">Figma</li>
              <li class="about_like-option">HTML・CSS</li>
              <li class="about_like-option">図解</li>
            </ul>
          </div>
        </section>
        <!-- やりたいこと -->
        <section class="about_want-to-do">
          <h4 class="about_subtitle">やりたいこと</h4>
          <div class="want-to-do_vision">
            <p class="want-to-do_text">世の中の面白いアイデアやビジョンを</p>
            <p class="want-to-do_callout">デザインを通して形にすること</p>
            <br>
            <p class="want-to-do_callout">人々に届けて、最大限に活用してもらうこと</p>
          </div>
          <p class="want-to-do_ex">
            世の中には面白いアイデアや素晴らしいビジョンが溢れています。<br>
            デザインを通してそれらを形にすること、人々に届けて最大限に活用してもらうことで、社会をもっと便利で楽しいものに出来ると考えています。
          </p>
        </section>
        <!-- そのためにやっていること -->
        <section class="about_doing">
          <h4 class="about_subtitle">やっていること</h4>
          <ul class="doing_box">
            <li class="doing_option">
              <p class="doing_option_img"><img src="assets/img/uiDesign-icon.svg" alt=""></p>
              <div class="doing_option_ex">
                <p class="doing_option_title">UI design</p>
                <p class="doing_option_sentence">サービスの価値を最大限ユーザーに届けるために、ユーザーが迷わずに目的を達成できるUIデザインを目指しています。</p>
                <p class="doing_option_skill">Skill：Figma, XD</p>
              </div>
            </li>
            <li class="doing_option">
              <p class="doing_option_img"><img src="assets/img/webDesign-icon.svg" alt=""></p>
              <div class="doing_option_ex">
                <p class="doing_option_title">Web design</p>
                <p class="doing_option_sentence">コンテンツの価値を最大限ユーザーに届けるために、ユーザーが迷わずに目的にたどり着くことができるWebデザインを目指しています。</p>
                <p class="doing_option_skill">Skill：Figma, XD, Illustrator, Photoshop</p>
              </div>
            </li>
            <li class="doing_option">
              <p class="doing_option_img"><img src="assets/img/coding-icon.svg" alt=""></p>
              <div class="doing_option_ex">
                <p class="doing_option_title">Coding</p>
                <p class="doing_option_sentence">実際にユーザーにサービスやコンテンツの価値を届けるために、制作したUIやWebデザインを実装します。</p>
                <p class="doing_option_skill">Skill：HTML, CSS</p>
              </div>
            </li>
          </ul>
        </section>
      </section>
      <!-- contact -->
      <section class="top-contents_last-section">
        <a id="contact" name="contact">
          <div class="top-contents_title-container">
            <h3 class="top-contents_title">contact</h3>
          </div>
        </a>
        <p class="top-contact_caption">
          ご連絡は<a class="top-contact_link" href="https://twitter.com/kabechiyo13">Twitter</a>のDMでも受け付けております。<br>
          お急ぎの際は下記よりメールでご連絡下さい。
        </p>
        <p class="top-contact_mail-address">aizawadesign13@gmail.com</p>
        <address class="top-contact_mail">
          <button class="top_btn_primary" type="button" onclick="location.href='mailto:aizawadesign13@gmail.com'"
            title="クリックするとメールソフトを起動します。">
            <p class="top_btn-text_primary">Tap to send Mail</p>
          </button>
        </address>
      </section>
  </main>
  <!-- <footer></footer> -->
  <script>
  feather.replace()
  </script>
</body>

</html>
