<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>退会</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/withdraw.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Russo+One&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<?php
$pdo=new PDO('mysql:host=mysql147.phy.lolipop.lan;
            dbname=LAA1291127-rainbows;charset=utf8',
            'LAA1291127',
            '1234123');

$sql = $pdo->prepare('delete from m_customers where mail = ? and pass = ?');
$sql->bindValue(1,($_POST['mail']));
$sql->bindValue(2,($_POST['pass']));
$sql->execute();

echo '<div class="container">';
 echo '<div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>';
 echo '<div class="title" >comic store</div><br>';
 echo '<div class="content">';
 if($sql->rowCount()>0){
    echo '<p>退会が完了しました</p><br>';
 }else{
    echo '<p>エラーが発生しました</p><br>';
 }
 $pdo = null;
 echo '<div class="top"><a href="toppage.php"><span class="top_txt">トップページに戻る</span></a></div>';
 echo '</div>';
echo '</div>';
?>
</body>
</html>
