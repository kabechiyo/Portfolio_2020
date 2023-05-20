<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="descripton" content="デザイナー相澤春伽の作品「uniwork」の紹介ページです。"><!-- サイトの紹介文 -->
    <script src="https://unpkg.com/feather-icons"></script><!-- feather読み込み -->
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
        <?php include('nav.php'); ?>
        <section class="works-header">
            <div class="works-header_img-container">
                <img class="works-header_img" src="assets/img/header.jpg" alt=""> 
            </div>
            <a name="about"></a>
            <div class="works-header_text-container">
                <h1 class="works-header_work-title"><span class="works-header_text">uniwork</span></h1>
                <p class="works-header_work-genre"><span class="works-header_text">UX/UI design・web design</span></p>
            </div>
            <section class="works-header_work-caption-container">
                <h2 class="works-header_work-caption-header">業務単位でリモートワーク</h2>
                <p class="works-header_work-caption-text">就職活動の早期化とインターンシップの浸透が年々進んでいます。これにより、地方学生の就職活動の負担が増加傾向にあります。uniworkはそんな学生の負担を減らしたいという想いから生まれました。</p>
            </section>
        </section>
    </header>
    <main>
        <a name="flow"></a>
        <section class="work-status">
            <div class="work-status_parts">
                <p class="work-status_type">Date</p>
                <p>2019.9~</p>
            </div>
            <span class="work-status_vertical-bar"></span>
            <div class="work-status_parts">
                <p class="work-status_type">Tools</p>
                <p>XD/HTML/CSS/jQuery</p>
            </div>
            <span class="work-status_vertical-bar"></span>
            <div class="work-status_parts">
                <p class="work-status_type">Style</p>
                <p>グループ制作</p>
            </div>
        </section>
        <section class="work-explanation_container">
            <h2 class="work-explanation_title">制作の流れ</h2>
            <div class="production-flow-container">
                <div class="production-flow">
                    <p class="production-flow_period">1.5weeks</p>
                    <p class="production-flow_genre">サービス企画</p>
                </div>
                <div class="production-flow">
                    <p class="production-flow_period">1.5weeks</p>
                    <p class="production-flow_genre">UX/UI設計</p>
                </div>
                <div class="production-flow">
                    <p class="production-flow_period">1weeks</p>
                    <p class="production-flow_genre">プロトタイプ制作</p>
                </div>
            </div>
        </section>
        <section class="work-explanation_container">
            <a name="persona"></a>
            <h2 class="work-explanation_title">ペルソナ</h2>
            <div class="work-persona-container student">
                <div class="work-persona_profile-container student">
                    <p class="work-persona_profile-text">
                        青樹 恵美子<br>
                        岩手大学3年の大学生<br>
                        就職活動で頻繁に県外へ行く<br>
                        就活でお金がかかる上にバイトに入れないのが悩み<br>
                        統計や経営の勉強をしておりoffice製品が得意
                    </p>
                    <div class="work-persona_profile-img-container">
                        <img class="work-persona_profile-img" src="assets/img/persona-student.svg" alt="">
                    </div>
                </div>
                <div class="work-persona_pain-container student">
                    <p class="work-persona_pain-title">Pain</p>
                    <p class="work-persona_pain-text">
                    就職活動を始めてお金と時間がなくなってしまった、、、頻繁に東京に行くので交通費がかかるしまとまった時間も取れなくてバイトができないし、なるべく業界研究や自分のスキルアップの時間を取りたい
                    </p>
                </div>
            </div>
            <div class="work-persona-container company">
                <div class="work-persona_pain-container company">
                    <p class="work-persona_pain-title">Pain</p>
                    <p class="work-persona_pain-text">
                        事業が軌道に乗ってきて、人手が足りなくなってきた、、、かといって一人社員を雇うのは、閑散期やスペース、採用までにかかるコストが悩ましい。
                        社内の平均年齢が低く業務もほぼペーパーレスなのでパートを雇うのは少し抵抗がある。
                    </p>
                </div>
                <div class="work-persona_profile-container left">
                    <p class="work-persona_profile-text">
                        広村 高亮<br>
                        ホームページ制作会社Zenplanet社長<br>
                        設立3年目で、事業が軌道に乗ってた<br>
                        制作から遠い業務まで手が回らなくなってきた<br>
                        コワーキングオフィスを借りて仕事をしている
                    </p>
                    <div class="work-persona_profile-img-container">
                        <img class="work-persona_profile-img" src="assets/img/persona-company.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="work-explanation_container">
            <a name="service"></a>
            <h2 class="work-explanation_title">サービス概要</h2>
            <section class="service-summary_container">
                <h3 class="service-summary_title">企業と学生を「業務単位」の「リモートワーク」でつなぐことで両者の課題を解決</h3>
                <div class="service-summary_illustration">
                    <p class="service-summary_illustration_circle">学生</p>
                    <div class="service-summary_illustration_flow-container">
                        <div class="service-summary_illustration_flow"> 
                            <p class="service-summary_illustration_text">仕事をする</p>
                            <img src="assets/img/arrow.svg" class="service-summary_illustration_arrow" alt="学生から企業へ">
                        </div>
                        <div class="service-summary_illustration_flow">
                            <p class="service-summary_illustration_text">仕事を依頼する</p>
                            <img src="assets/img/arrow.svg" class="service-summary_illustration_arrow left" alt="企業から学生へ">
                        </div>
                    </div>
                    <p class="service-summary_illustration_circle">企業</p>
                </div>
            </section>
        </section>
        <section class="work-explanation_container">
            <a name="solution"></a>
            <h2 class="work-explanation_title">学生側の解決策</h2>
            <section class="solution-point_container">
                <div class="solution-point_card">
                    <h3 class="solution-point_circle">業務単位で募集</h3>
                    <p class="solution-point_text">空いてる時間に<br>必要な分だけ</p>
                </div>
                <img class="solution-point_multiply" src="assets/img/multiply.svg" alt="×">
                <div class="solution-point_card">
                    <h3 class="solution-point_circle">リモートワーク</h3>
                    <p class="solution-point_text">交通費不要で<br>自分の好きな場所で</p>
                </div>
                <img class="solution-point_multiply" src="assets/img/multiply.svg" alt="×">
                <div class="solution-point_card">
                    <h3 class="solution-point_circle">給料即日入金</h3>
                    <p class="solution-point_text">必要なお金が<br>すぐに稼げる！</p>
                </div>
            </section>
            <section>
                <h3 class="solution_work-contents-title">都内企業で実践的・実務的な業務内容</h3>
                <div class="solution_work-contents-container">
                    <section class="solution_work-contents-card">
                        <h4 class="solution_work-contents-genre">リサーチ</h4>
                        <p class="solution_work-contents-genre-text">集計分析<br>アンケート設計<br>など</p>
                    </section>
                    <section class="solution_work-contents-card">
                        <h4 class="solution_work-contents-genre">受付対応</h4>
                        <p class="solution_work-contents-genre-text">問い合わせ対応<br>採用媒体の対応<br>など</p>
                    </section>
                    <section class="solution_work-contents-card">
                        <h4 class="solution_work-contents-genre">データ整備</h4>
                        <p class="solution_work-contents-genre-text">文字起こし<br>資料作成<br>など</p>
                    </section>
                    <section class="solution_work-contents-card">
                        <h4 class="solution_work-contents-genre">web運用</h4>
                        <p class="solution_work-contents-genre-text">SNS運用<br>サイト運用<br>など</p>
                    </section>
                    <section class="solution_work-contents-card">
                        <h4 class="solution_work-contents-genre">デザイン</h4>
                        <p class="solution_work-contents-genre-text">チラシ制作<br>webデザイン<br>など</p>
                    </section>
                    <section class="solution_work-contents-card">
                        <h4 class="solution_work-contents-genre">エンジニア</h4>
                        <p class="solution_work-contents-genre-text">アプリ開発<br>web制作<br>など</p>
                    </section>
                </div>
                <p class="solution_work-contents-text">スキルアップ・業界研究につながる！</p>
            </section>
        </section>
        <section class="work-explanation_container">
            <h2 class="work-explanation_title">企業側の解決策</h2>
            <section class="solution-point_container">
                <div class="solution-point_card">
                    <h3 class="solution-point_circle">業務単位で募集</h3>
                    <p class="solution-point_text">必要な時に<br>必要な分だけ</p>
                </div>
                <img class="solution-point_multiply" src="assets/img/multiply.svg" alt="×">
                <div class="solution-point_card">
                    <h3 class="solution-point_circle">リモートワーク</h3>
                    <p class="solution-point_text">業務スペース<br>などの準備不要で</p>
                </div>
                <img class="solution-point_multiply" src="assets/img/multiply.svg" alt="×">
                <div class="solution-point_card">
                    <h3 class="solution-point_circle">業務の外部化</h3>
                    <p class="solution-point_text">業務の負担軽減<br>ができる！</p>
                </div>
            </section>
        </section>
        <section class="work-explanation_container">
            <a name="ui"></a>
            <h2 class="work-explanation_title">UIデザイン</h2>
            <p class="uxuidesign-caption">uniworkは学生と企業、二つの利用者層があります。学生がハードルを感じ辛い軽快さと企業が不安感を感じにくいきちんと感が出るようにデザインしました。</p>
            <section class="uidesign-card-container">
                <section class="uidesign-card">
                    <div class="uidesign_img-box">  
                        <img class="uidesign_img" src="assets/img/home-student.png" alt="">
                    </div>
                    <div class="uidesign_contents">
                        <h3 class="uidesign_contents-title">Home/student</h3>
                        <h4 class="uidesign_contents-subtitle">すぐに仕事が探せる</h4>
                        <p class="uidesign_contents-text">学生側のホームページは募集一覧ページになっているため、すぐに仕事を探して応募することができます。</p>
                    </div>
                </section>
                <section class="uidesign-card">
                    <div class="uidesign_contents">
                        <h3 class="uidesign_contents-title">Profile/student</h3>
                        <h4 class="uidesign_contents-subtitle">自分の魅力を伝える</h4>
                        <p class="uidesign_contents-text">自己紹介やスキル、スケジュールを登録することで企業とマッチングしやすくなります。</p>
                    </div>
                    <div class="uidesign_img-box">  
                        <img class="uidesign_img" src="assets/img/profile.png" alt="">
                    </div>
                </section>
                <section class="uidesign-card">
                    <div class="uidesign_img-box">  
                        <img class="uidesign_img" src="assets/img/message.png" alt="">
                    </div>
                    <div class="uidesign_contents">
                        <h3 class="uidesign_contents-title">Message</h3>
                        <h4 class="uidesign_contents-subtitle">交流をする</h4>
                        <p class="uidesign_contents-text">企業とメッセージのやり取りができるので応募前に詳細の確認などもできます</p>
                    </div>
                </section>
                <section class="uidesign-card">
                    <div class="uidesign_contents">
                        <h3 class="uidesign_contents-title">Feedback</h3>
                        <h4 class="uidesign_contents-subtitle">誠実に仕事をする</h4>
                        <p class="uidesign_contents-text">学生と企業が業務完了後に相互にフィードバックをつけることで、誠実な仕事をサポートします。</p>
                    </div>
                    <div class="uidesign_img-box">  
                        <img class="uidesign_img" src="assets/img/feedback.png" alt="">
                    </div>
                </section>
                <section class="uidesign-card">
                    <div class="uidesign_img-box">  
                        <img class="uidesign_img" src="assets/img/home-company.png" alt="">
                    </div>
                    <div class="uidesign_contents">
                        <h3 class="uidesign_contents-title">Home/company</h3>
                        <h4 class="uidesign_contents-subtitle">業務を管理する</h4>
                        <p class="uidesign_contents-text">企業側のホーム画面では募集中の業務の内容や新規の応募を確認することができます。</p>
                    </div>
                </section>
                <section class="uidesign-card">
                    <div class="uidesign_contents">
                        <h3 class="uidesign_contents-title">Detail/company</h3>
                        <h4 class="uidesign_contents-subtitle">応募者を確認する</h4>
                        <p class="uidesign_contents-text">募集詳細ページでは業務への応募者を確認することができます。気になる応募者とはメッセージのやり取りもできます。</p>
                    </div>
                    <div class="uidesign_img-box">  
                        <img class="uidesign_img" src="assets/img/detail-company.png" alt="">
                    </div>
                </section>
            </section>
        </section>
        <section class="work-explanation_container">
            <a name="lp"></a>
            <h2 class="work-explanation_title">LPデザイン</h2>
            <div class="lpdesign_contents">
                <div class="lpdesign_explanation">
                    <div class="lpdesign_caption-container">
                        <h3 class="lpdesign_title">「やってみようかな」<br> &nbsp;&nbsp;と思ってもらう</h3>
                        <p class="lpdesign_text">をコンセプトにuniworkのLPページのデザイン制作と実装を担当しました。<br>
                            学生が不安やハードルを感じないようイラストや画像を用いて親しみやすさを演出しました。一方で既存のバイト探しサービスとの違いを表現するためにシンプルでフラットなデザインにしました。
                        </p>
                    </div>
                    <div class="lpdesign_mockup-img-container">
                        <img class="lpdesign_mockup-img" src="assets/img/uniwork-mockup.png" alt="">
                    </div>
                </div>
                <div class="lpdesign_img-container">
                    <img class="lpdesign_img" src="assets/img/lp.png" alt="">
                </div>
            </div>
        </section>
        <section class="work-explanation_container">
            <a name="logo"></a>
            <h2 class="work-explanation_title">ロゴデザイン</h2>
            <div class="logodesign_illustration-container">
                <p class="logodesign_illustration-text">unit</p>
                <img class="logodesign_illustration-plus" src="assets/img/plus.svg" alt="＋">
                <p class="logodesign_illustration-text">work</p>
            </div>
            <div class="logodesign_img-container">
                <img class="logodesign_img" src="assets/img/uniwork-logo.svg" alt="uniwork">
            </div>
            <div class="logodesign_color-code_container">
                <div class="logodesign_color-code yellow"></div>
                <div class="logodesign_color-code black"></div>
                <div class="logodesign_color-code gray"></div>
                <div class="logodesign_color-code white"></div>
            </div>
            <p class="logodesign_text">黄色で学生らしさ・新しさを演出しつつ少し渋めの色合いにすることで落ち着きと安心感を表現しました。</p>
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
