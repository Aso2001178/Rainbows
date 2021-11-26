<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員情報</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php

$pdo = new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
    'LAA1291127',
    '1234123');

$sql = $pdo->prepare('SELECT * FROM m_customers WHERE mail = ? AND pass = ?');
$sql->execute([$_POST['mail'], $_POST['pass']]);
foreach ($sql as $row){
    $_SESSION['m_customers'] = [
        'mail'=>$row['mail'], 'pass'=>$row['pass'],
        'name'=>$row['name'], 'address'=>$row['address']
    ];
}

    echo '<p>'$_SESSION['m_customers']['name']'</p>';
    echo '<p>'$_SESSION['m_customers']['address']'</p>';
    echo '<p>'$_SESSION['m_customers']['mail']'</p>';
    echo '<p>'$_SESSION['m_customers']['pass']'</p>';

$pdo = null;

?>
</body>
</html>