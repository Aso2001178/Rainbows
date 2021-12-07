<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>呪術廻戦</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&family=Russo+One&display=swap">
    <link rel="stylesheet" href="./css/comicstyle.css">
    <link rel="stylesheet" href="./css/selectstyle.css">
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
                <div class="btn2"><a href="register.php" >会員登録はこちら！</a></div>
            </div>
            
            <div class="search">
            </div>
            <div class="btn">
                <a href="cart.php" class="button">カート</a><br>
                <a href="customer-list.php" class="button">登録情報</a><br>
                <a href="history.php" class="button">購入履歴</a><br>
                <a href="taikai.php" class="button">退会</a>
                <a href="toppage.php" class="button">トップページ</a>
            </div>
        </div>
        <div id="child2">
            <div class="comicimg"><img src="img/呪術廻戦.png" width="260" height="386"></div><br>
            <?php
            $pdo = new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
                'LAA1291127',
                '1234123');
            foreach($pdo->query('SELECT item_code, item_name, price FROM m_items WHERE item_code = 2') as $row){
                echo '<form action="cart-insert.php" method="post">';

                echo '<div class="comictitle"><h2>', $row['item_name'], '</h2></div><br>';
                echo '<div class="comicprice"><h2>￥', $row['price'], '</h2></div><br>';
                echo '<div class="volume_number">数量</div>';
                echo '<div class="wrapper">';

                echo    '<div class="volume_select">';
                echo        '<select class="volume_select_content" name="count">';
                echo            '<option value="1">１</option>';
                echo            '<option value="2">２</option>';
                echo            '<option value="3">３</option>';
                echo            '<option value="4">４</option>';
                echo            '<option value="5">５</option>';
                echo            '<option value="6">６</option>';
                echo            '<option value="7">７</option>';
                echo            '<option value="8">８</option>';
                echo            '<option value="9">９</option>';
                echo            '<option value="10">１０</option>';
                echo        '</select>';
                echo    '</div>';

                echo '</div>';
                echo '<input type="hidden" name="item_code" value="', $row['item_code'], '">';
                echo '<input type="hidden" name="item_name" value="', $row['item_name'], '">';
                echo '<input type="hidden" name="price" value="', $row['price'], '">';
                echo '<div class="cart_btn"><input type="submit" value="カートに入れる" id="cart_btn"></div><br>';
                echo '</form>';
            }
            ?>
            <div class="summary_title"><h3>【作品内容】</h3></div>
            <div class="line"></div>
            <div class="comic_summary">
                類稀な身体能力を持つ高校生・虎杖悠仁は、<br>
                病床に伏せる祖父の見舞いを日課にしていた。<br>
                だがある日学校に眠る「呪物」の封印が解かれ、<br>
                化物が現れてしまう。取り残された先輩を救う為、<br>
                校舎へ乗り込む虎杖だが!?
            </div>
        </div>
    </div>
</div>
</body>
</html>
