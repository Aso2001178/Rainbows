<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>購入</title>
	<link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/purchase.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Russo+One&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<div class="container">
    <div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>
    <div class="title" >comic store</div><br>
<?php
$pdo = new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
	'LAA1291127',
	'1234123');
$order_id=1;
foreach ($pdo->query('select max(order_id) from d_purchase') as $row) {
	$order_id=$row['max(order_id)']+1;
}
$sql=$pdo->prepare('insert into d_purchase(order_id, custom_code) values(?,?)');
if($sql->execute([$order_id, $_SESSION['m_customers']['custom_code']])){

foreach ($_SESSION['product'] as $item_code=>$product) {
        $sql=$pdo->prepare('insert into d_purchase_detail(order_id, item_code, price, num) values(?,?,?,?)');
        $sql->execute([$order_id, $item_code, $product['price'], $product['count']]);
    }
    unset($_SESSION['product']);
    echo '<div class="content">';
    echo '<p>購入手続きが完了しました。</p><br>';
    echo '<p>Thank You !!</p><br>';
} else {
    echo '<p>購入手続き中にエラーが発生しました。申し訳ございません。</p>';
    echo '</div>';
}
?>
<div class="button"> <a href="toppage.php">トップページへ</a></div>
</div>
</body>
</html>

