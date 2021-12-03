<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>退会</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>退会</h2>
<?php
$pdo=new PDO('mysql:host=mysql147.phy.lolipop.lan;
            dbname=LAA1291127-rainbows;charset=utf8',
            'LAA1291127',
            '1234123');

$sql = $pdo->prepare('delete from m_customers where pass = ?');
$sql->bindValue(1,($_POST['pass']));
$sql->execute();

if($sql->rowCount()>0){
    echo '<p>退会しました</p>';
}else{
    echo '<p>退会出来ませんでした</p>';
}
$pdo = null;
?>
<a href="toppage.php">トップページに戻る</a>
</body>
</html>
