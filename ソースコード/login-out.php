<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php

   $pdo = new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
        'LAA1291127',
        '1234123');

    $sql = $pdo->prepare('SELECT * FROM m_customers WHERE   mail = ? AND pass = ?');
    $sql->execute([$_POST['mail'], $_POST['pass']]);
    foreach ($sql as $row){
        $_SESSION['m_customers'] = [
                'mail'=>$row['mail'], 'pass'=>$row['pass'],
                'name'=>$row['name'], 'custom_code'=>$row['custom_code'],
                'address'=>$row['address']
        ];
    }
    if(isset($_SESSION['m_customers'])){
        echo '<p>ようこそ、', $_SESSION['m_customers']['name'], 'さん！</p>';
    }else{
        echo 'メールアドレスまたはパスワードが違います。';
    }

    $pdo = null;

?>
<a href="toppage.php">トップページへ</a>
</body>
</html>
