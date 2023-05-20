<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="descripton" content="デザイナー相澤春伽の作品「nagare.mov」の紹介ページです。"><!-- サイトの紹介文 -->
    <script src="https://unpkg.com/feather-icons"></script><!-- feather読み込み -->
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
        <?php include('nav.php'); ?>
        <section class="works-header">
            <div class="works-header_img-container">
                <img class="works-header_img" src="assets/img/header.jpg" alt=""> 
            </div>
            <a name="about"></a>
            <div class="works-header_text-container">
                <h1 class="works-header_work-title"><span class="works-header_text">nagare.mov</span></h1>
                <p class="works-header_work-genre"><span class="works-header_text">logo design・generative art</span></p>
            </div>
            <section class="works-header_work-caption-container">
                <h2 class="works-header_work-caption-header">流れに「触れる」、流れで「遊ぶ」</h2>
                <p class="works-header_work-caption-text">所属するクリエイティブサークル「mov」で制作したインスタレーション展示「nagare.mov」でVI制作を担当しました。スクリーンには一面の海と魚たちが映し出されており、コントローラーに手をかざすことで、映し出された魚たちの流れに干渉することができます。普段だったら触れることのできない「流れ」に触れて、遊ぶことで流れの不思議さを感じることができます。</p>
            </section>
        </section>
    </header>
    <main>
        <a name="flow"></a>
        <section class="work-status">
            <div class="work-status_parts">
                <p class="work-status_type">Date</p>
                <p>2018.7~</p>
            </div>
            <span class="work-status_vertical-bar"></span>
            <div class="work-status_parts">
                <p class="work-status_type">Tools</p>
                <p>Illustrator/p5.js</p>
            </div>
            <span class="work-status_vertical-bar"></span>
            <div class="work-status_parts">
                <p class="work-status_type">Style</p>
                <p>サークル制作</p>
            </div>
        </section>
        <section class="work-explanation_container">
            <h2 class="work-explanation_title">制作の流れ</h2>
            <div class="production-flow-container">
                <div class="production-flow">
                    <p class="production-flow_period">2weeks</p>
                    <p class="production-flow_genre">コンセプト設計</p>
                </div>
                <div class="production-flow">
                    <p class="production-flow_period">3weeks</p>
                    <p class="production-flow_genre">ロゴ制作</p>
                </div>
                <div class="production-flow">
                    <p class="production-flow_period">3weeks</p>
                    <p class="production-flow_genre">webヘッダー制作</p>
                </div>
            </div>
        </section>
        <section class="work-explanation_container">
            <a name="logodesign"></a>
            <h2 class="work-explanation_title">ロゴデザイン</h2>
            <div class="work-header-img-container">
                <img class="work-header-img" src="assets/img/logo-header.svg" alt="">
            </div>
            <p class="work-header_caption">展示のコンセプトと内容を端的に表すために波の止まった「凪」の状態と波の荒れている「時化」の状態、両者間に干渉する「手」をモチーフに、ロゴマークを作成しました。</p>
            <div class="logo_img-container">
                <div class="logo_img_large-wrapper">
                    <img class="logo_img" src="assets/img/logorough01.png" alt="凪と時化をテーマに4つの案を制作しました">
                </div>
                <div class="logo_img_wrapper">
                    <img class="logo_img" src="assets/img/logorough02.svg" alt="案を一つに絞りブラッシュアップをしました。">
                </div>
                <div class="logo_img_wrapper">
                    <img class="logo_img" src="assets/img/logorough03.svg" alt="">
                </div>
                <div class="logo_img_wrapper">
                    <img class="logo_img" src="assets/img/logorough04.svg" alt="">
                </div>  
            </div>
            <p class="work-header_caption">メンバーの展示に対する認識とズレのないよう、メンバーの意見をもとにラフスケッチから案の絞り込み、細部のブラッシュアップを行いました。</p>
        </section>
        <section class="work-explanation_container">
            <a name="generativeart"></a>
            <h2 class="work-explanation_title">ジェネラティブアート</h2>
            <div class="generativeart_container">
                <iframe class="generativeart" alt="" src="https://editor.p5js.org/shunka/embed/ZfkDPDF7l"></iframe>
            </div>
            <!-- <div class="generativeart_img_containr">
                <img class="generativeart_img" src="assets/img/generativeart-img01.png" alt="">
                <img class="generativeart_img" src="assets/img/generativeart-img02.png" alt="">
            </div> -->
            <p class="work-header_caption">企画展示特設サイトのヘッダーで用いるために、p5.jsでgenerative artを制作しました。スクリーン上に映し出された常にゆらゆらと揺らめいています。マウスに反応して波の形が変わります。</p>
            <div class="generativeart_process_container">
                <div class="generativeart_process-img_container">
                    <img class="generativeart_process-img" src="assets/img/generativeart-process01.png" alt="">
                    <!-- <img class="generativeart_process-img" src="assets/img/generativeart-process02.png" alt=""> -->
                </div>
                <p class="generativeart_process-caption">スクリーンに描画されている波が、マウスを頂点とするガウス曲線に緩やかに近づいていくことでインタラクションを表現しています。</p>
            </div>
        </section>
    </main>
    <!-- <footer>
        <p class="footer-text">aizawa design</p>
    </footer> -->
    <script>
      feather.replace()
    </script>
</body>
</html>
