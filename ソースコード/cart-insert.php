<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<title>カート</title>
	<link rel="stylesheet" href="./css/cart.css">
</head>
<body>
<div class="container">
<?php
$item_code=$_REQUEST['item_code'];
if (!isset($_SESSION['product'])) {
    $_SESSION['product']=[];
}
$count=0;
if (isset($_SESSION['product'][$item_code])) {
    $count=$_SESSION['product'][$item_code]['count'];
}
$_SESSION['product'][$item_code]=[
    'item_name'=>$_REQUEST['item_name'],
    'price'=>$_REQUEST['price'],
    'count'=>$count+$_REQUEST['count']
];
echo '<p>カートに商品を追加しました。</p>';
require 'cart.php';
?>
</div>
</body>
</html>
