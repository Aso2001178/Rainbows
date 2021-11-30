<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>購入</title>
	<link rel="stylesheet" href="">
</head>
<body>
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
    echo '購入手続きが完了しました。ありがとうございます。';
} else {
    echo '購入手続き中にエラーが発生しました。申し訳ございません。';
}
?>
<a href="toppage.php">トップページへ</a>
</body>
</html>

