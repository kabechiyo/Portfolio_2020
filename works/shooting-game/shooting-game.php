<!DOCTYPE html>
<html>
<head>
<title>コイン集めゲーム</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../../style.css?<?php echo time(); ?>">
<link rel="stylesheet" href="shooting-game.css?<?php echo time(); ?>">
<script type="text/javascript"  src="lib/jquery-3.2.1.min.js" ></script>
<script type="text/javascript"  src="main.js?<?php echo time(); ?>"" ></script>
<link rel="icon" type="image/x-icon" href="../../favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="../../favicons/apple-touch-icon-180x180.png">
</head>

<body>
    <?php include("../../header.php"); ?>
    <div id="title">
        <h3>-コイン集めゲーム-</h3>
        <p>MINIGAME/2018/OpenFrameworks/Illustrator</p>
        <p>コンセプト：「見た目も楽しいシューティングゲーム」</p>
        <img id="header-img" src="images/header-img.png">
    </div>
    <div id="contents">
        <div class="summary">
            <p>シューティングで敵を倒しながらコインを集めるミニゲームを作りました。最初のライフが３つで敵にぶつかるとライフが−１になります。また、敵を倒すとコインが＋３、画面上のコインをゲットすると＋１になります。ライフ０になるまでにどれだけコインを集められるか、というゲーム内容です。<br>
            ミニゲームの制作にはOpenFrameworks、ゲームのイラスト素材の制作にはIllustratorを用いています。キャラクタがふわふわ動いていたり、ランダムにウィンクしたりビジュアル的にも楽しくなるようこだわって制作しました。
            </p>
        </div>
        <div class="summary">
            <img class="ex-img" src="images/ex1.png">
            <p>ー操作方法<br>
            キャラクターは左下にあるコントローラーで操作できます。<br>
            コントローラーは赤丸の部分をドラッグで動かすことが出来、ドラッグした同じ方向にキャラクターが動きます。<br>
            wasd/矢印キーで指定の方向に攻撃を出すことができます。<br>
            また、スペースキーでポーズ画面が表示され、スコアを確認出来ます。
            </p>
        </div>
        <div class="summary">
            <img class="ex-img" src="images/ex2.png">
            <p>キャラクターのふわふわする動きを作る際に、そのままy座標にパーリンノイズで出した値を足し続て動かすようにするとたまにキャラクターが上にいき過ぎたりして画面から出て行ってしまうので、それぞれの要素に軸となるy座標を用意し、そこから上下ここまで移動できる、という範囲を決めてその範囲の中でふわふわ移動するというように設定しました。
            </p>
        </div>
        <div class="summary">
            <p>ゲーム画面キャプチャ</p>
            <div class="game-container">
                <img class="game-img" src="images/how.png">
                <img class="game-img" src="images/game.png">
            </div>
            <div class="game-container">
                <img class="game-img" src="images/gameover.png">
                <img class="game-img" src="images/gameover2.png">
            </div>
        </div>
        <div id="footer"></div>
    </div>
    
</body>

</html>
