<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>購入履歴</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
if (isset($_SESSION['m_customers'])) {
	$pdo = new PDO('mysql:host=mysql147.phy.lolipop.lan;
                dbname=LAA1291127-rainbows;charset=utf8',
		'LAA1291127',
		'1234123');
	$sql_purchase=$pdo->prepare(
		'select * from d_purchase where custom_code= ? order by order_id desc');
	$sql_purchase->execute([$_SESSION['m_customers']['custom_code']]);
	foreach ($sql_purchase as $row_purchase) {
		$sql_detail=$pdo->prepare(
			'select * from d_purchase_detail, m_items where order_id=? and d_purchase_detail.item_code=m_items.item_code');
		$sql_detail->execute([$row_purchase['order_id']]);
		echo '<table>';
		echo '<tr><th>商品番号</th><th>商品名</th>', 
			'<th>価格</th><th>個数</th><th>小計</th></tr>';
		$total=0;
		foreach ($sql_detail as $row_detail) {
			echo '<tr>';
			echo '<td>', $row_detail['item_code'], '</td>';
			echo '<td>', $row_detail['item_name'], '</td>';
			echo '<td>', $row_detail['price'], '</td>';
			echo '<td>', $row_detail['num'], '</td>';
			$subtotal=$row_detail['price']*$row_detail['num'];
			$total+=$subtotal;
			echo '<td>', $subtotal, '</td>';
			echo '</tr>';
		}
		echo '<tr><td>合計</td><td></td><td></td><td></td><td>', 
			$total, '</td></tr>';
		echo '</table>';
		echo '<hr>';
	}
} else {
	echo '購入履歴を表示するには、ログインしてください。';
}
?>
<a href="toppage.php">トップページへ</a>
</body>
</html>