<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="descripton" content="デザイナー相澤春伽の作品「about tea」の紹介ページです。"><!-- サイトの紹介文 -->
    <script src="https://unpkg.com/feather-icons"></script><!-- feather読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/js/loading.js"></script>
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon-180x180.png">
    <?php include('../../setting.php'); ?>
    <title>about tea</title>
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
                <h1 class="works-header_work-title"><span class="works-header_text">about tea</span></h1>
                <p class="works-header_work-genre"><span class="works-header_text">infographic</span></p>
            </div>
            <section class="works-header_work-caption-container">
                <h2 class="works-header_work-caption-header">紅茶の違いが一目でわかる</h2>
                <p class="works-header_work-caption-text">紅茶屋さんやスーパーで紅茶を選ぶとき、「色々あるけど何が違うんだろう？」と思ったことはありませんか？違いを知ることでより紅茶を楽しんでほしい、そんな思いから紅茶の違いについてのインフォグラフィックを制作しました。</p>
            </section>
        </section>
    </header>
    <main>
        <a name="flow"></a>
        <section class="work-status">
            <div class="work-status_parts">
                <p class="work-status_type">Date</p>
                <p>2018.12~</p>
            </div>
            <span class="work-status_vertical-bar"></span>
            <div class="work-status_parts">
                <p class="work-status_type">Tools</p>
                <p>Illustrator</p>
            </div>
            <span class="work-status_vertical-bar"></span>
            <div class="work-status_parts">
                <p class="work-status_type">Style</p>
                <p>授業制作</p>
            </div>
        </section>
        <section class="work-explanation_container">
            <h2 class="work-explanation_title">制作の流れ</h2>
            <div class="production-flow-container">
                <div class="production-flow">
                    <p class="production-flow_period">2weeks</p>
                    <p class="production-flow_genre">テーマ決定とリサーチ</p>
                </div>
                <div class="production-flow">
                    <p class="production-flow_period">2weeks</p>
                    <p class="production-flow_genre">インフォグラフィック制作</p>
                </div>
                <div class="production-flow">
                    <p class="production-flow_period">2weeks</p>
                    <p class="production-flow_genre">モーショングラフィック制作</p>
                </div>
            </div>
        </section>
        <section class="work-explanation_container">
            <a name="infographic"></a>
            <h2 class="work-explanation_title">インフォグラフィック</h2>
            <div class="infographic_container">
                <div class="infographic_img_container">
                    <img class="infographic_img" src="assets/img/infographic.jpg" alt="">
                </div>
                <p class="infographic_caption">ターゲットは紅茶に興味を持ち始めた若い女性です。<br>若い女性に興味を持ってもらいやすいよう、イラストを多めに取り入れて柔らかくポップな印象にしました。紅茶屋さんのメニューに挟んだり紅茶売り場に掲示して使えるようポスターサイズになっています。</p>
            </div>
        </section>
        <section class="work-explanation_container">
            <a name="motiongraphic"></a>
            <h2 class="work-explanation_title">モーショングラフィック</h2>
            <div class="motiongraphic_container">
                <p class="motiongraphic_caption">紅茶の違いのインフォグラフィックスに合わせて紅茶の美味しい入れ方を解説するモーショングラフィックスを制作しました。二つを合わせることでより紅茶を楽しむことができます。</p>
                <img class="motiongraphic_header-img" src="assets/img/motion01.png" alt="">
            </div>
            <div class="motiongraphic_img_container">
                <img class="motiongraphic_img" src="assets/img/motion02.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion03.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion04.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion05.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion06.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion07.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion08.png" alt="">
                <img class="motiongraphic_img" src="assets/img/motion09.png" alt="">
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
