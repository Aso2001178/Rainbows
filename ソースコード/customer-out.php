<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>customer</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Russo+One&display=swap">
        <link rel="stylesheet" href="css/sanitize.css">
        <link rel="stylesheet" href="./css/customer.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body>
    <div class="container">
        <div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>
        <div class="title" >comic store</div><br>
        <div class="main">
    <?php
    $pdo=new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
        'LAA1291127',
        '1234123');
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];
    $sql = $pdo->prepare('insert into m_customers(pass, name, address, mail) values(?, ?, ?, ?)');
    $sql->bindValue(1,$pass);
    $sql->bindValue(2,$name);
    $sql->bindValue(3,$address);
    $sql->bindValue(4,$mail);
    $sql->execute();
    echo '<p>登録しました</p>';
    $pdo = null;
    ?>
        </div>
        <div class="button">
    <a href="toppage.php">トップページに戻る</a><br>
        </div>
    </div>
    </body>
    </html>
