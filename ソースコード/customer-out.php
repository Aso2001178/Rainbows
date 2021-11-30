<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>customer</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
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
    <a href="toppage.php">トップページに戻る</a><br>
    </body>
    </html>
