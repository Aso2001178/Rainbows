<?php session_start();?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員情報</title>
    <link rel="stylesheet" href="./css/customer-list.css">
</head>
<body>
<?php

$pdo = new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
    'LAA1291127',
    '1234123');

/*
 * 青木くんのログイン認証ができてから統合する
 * その際に、22行目のコメントをはずし、23行目をコメントアウトする
 */
$sql = $pdo->prepare('SELECT * FROM m_customers WHERE mail = ?');
$sql->execute([$_SESSION['m_customers']['mail']]);
//$sql->execute(['1234567@111']);
if(isset($_SESSION['m_customers'])){
    foreach ($sql as $row){
        echo "氏名 : ",$row['name'];
        echo "<br />";
        echo "住所 : ",$row['address'];
        echo "<br />";
        echo "メールアドレス : ",$row['mail'];
        echo "<br />";
        echo "パスワード : ",$row['pass'];
        echo "<br />";
    }
}else {
    echo 'ログインしてください。';
}
$pdo = null;

?>
<a href="toppage.php">トップページへ</a>
</body>
</html>
