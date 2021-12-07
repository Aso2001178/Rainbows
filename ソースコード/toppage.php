<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>toppage</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap">
    <link rel="stylesheet" href="./css/topstyle.css">
</head>
<body>
<div class="container">
    <div id="parent">
        <div id="child1">
            <header>
                <div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>
                <div class="title"><h1>comic store</h1></div>
            </header>


            <div class="link_btn">
                <div class="btn2"><a href="customer-input.php" >会員登録はこちら！</a></div>
            </div>


            <div class="login">
                <div class="content">
                    <h1>ログイン</h1>
                    <div class="control">
                        <label for="login"><p>メールアドレス</p></label>
                        <form action="login-out.php" method="post">
                            <input type="text" name="mail" id="login">
                    </div>
                    <div class="control">
                        <label for="login"><p>パスワード</p></label>
                        <input type="password" name="pass" id="login"required>
                    </div>
                    <p><button type="submit" id="action" value="認証">認証</button></p>
                    </form>
                </div>
            </div>

            <div class="search">

            </div>
            <div class="btn">
                <a href="cart.php" class="button">カート</a><br>
                <a href="customer-list.php" class="button">登録情報</a><br>
                <a href="history.php" class="button">購入履歴</a><br>
                <a href="withdraw.php" class="button">退会</a>
            </div>
        </div>
        <div id="child2">
            <div class="comic">
                <div class="onepiece"><a href="comic1.php" style="float: left;color: black;"><img src="img/ワンピース.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="zyuzyutu"><a href="comic2.php" style="float: left;color: black;"><img src="img/呪術廻戦.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
            <div class="comic2">
                <div class="zyozyo"><a href="comic3.php" style="float: left;color: black;"><img src="img/ジョジョ.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="naruto"><a href="comic4.php" style="float: left;color: black;"><img src="img/ナルト.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
            <div class="comic3">
                <div class="doragon"><a href="comic5.php" style="float: left;color: black;"><img src="img/ドラゴンボール.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="shingeki"><a href="comic6.php" style="float: left;color: black;"><img src="img/進撃の巨人.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
            <div class="comic4">
                <div class="kimetu"><a href="comic7.php" style="float: left;color: black;"><img src="img/鬼滅の刃.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="gotoubun"><a href="comic8.php" style="float: left;color: black;"><img src="img/五等分の花嫁.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
            <div class="comic5">
                <div class="kimetu"><a href="comic9.php" style="float: left;color: black;"><img src="img/キングダム.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="gotoubun"><a href="comic10.php" style="float: left;color: black;"><img src="img/かぐや様は告らせたい.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
            <div class="comic6">
                <div class="kimetu"><a href="comic11.php" style="float: left;color: black;"><img src="img/転生したらスライムだった件.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="gotoubun"><a href="comic12.php" style="float: left;color: black;"><img src="img/からかい上手の高木さん.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
            <div class="comic7">
                <div class="kimetu"><a href="comic13.php" style="float: left;color: black;"><img src="img/カイジ.png" width="130" height="193" class="funciton_img1"></a></div>
                <div class="gotoubun"><a href="comic14.php" style="float: left;color: black;"><img src="img/ヒロアカ.png" width="130" height="193" class="funciton_img1"></a></div><br>
            </div>
        </div>
    </div>
</div>
</body>
</html>
