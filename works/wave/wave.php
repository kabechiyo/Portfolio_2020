<!DOCTYPE html>
<html>
<head>
<title>流れ展　webヘッダー</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../../style.css?<?php echo time(); ?>">
<link rel="stylesheet" href="wave.css?<?php echo time(); ?>">
<script type="text/javascript"  src="lib/jquery-3.2.1.min.js" ></script>
<script type="text/javascript"  src="main.js?<?php echo time(); ?>"" ></script>
<link rel="icon" type="image/x-icon" href="../../favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="../../favicons/apple-touch-icon-180x180.png">　
</head>

<body>
    <?php include("../../header.php"); ?>
    <div id="title">
        <h3>-流れ展　webヘッダー-</h3>
        <p>INTERACTION/2018/p5.js</p>
        <p>コンセプト：「『流れ』に触れる、『流れ』で遊ぶ」</p>
        <iframe id="p5" src="https://editor.p5js.org/shunka/present/9zkV5-KWR" frameborder="none"></iframe>
    </div>
    <div id="contents">
        <div class="summary">
            <p>所属する映像制作サークル『mov』のインスタレーション作品展示「流れ展」のwebサイトのwebヘッダーを制作しました。<br>
            展示のコンセプト「『流れ』に触れる、『流れ』で遊ぶ」を端的に伝えるため、マウスの動きに合わせて表示されている波の動きが変化するインタラクション作品を制作しました。p5.jsを用いたアニメーション作品を制作するのはこの作品が初めてで困難な部分も多かったですが、サークルメンバーの協力の元、作品を完成させることが出来ました。
        </p>
        </div>
        <div class="summary">
            <img class="ex-img" src="images/ex.png">
            <p>マウスを頂点にした美しい曲線がなかなか描けず非常に苦労しました。いくつかの方法を試すうちにマウスの位置を頂点とするガウス曲線を仮定することで滑らかな曲線が描けるのではないかと思いつきました。そこで描画される波が緩やかにマウスが頂点のガウス曲線に近づくように設定することでマウスに引き寄せられる波の描画に成功しました。</p>
        </div>
        <div id="footer"></div>
    </div>
    
</body>

</html>
