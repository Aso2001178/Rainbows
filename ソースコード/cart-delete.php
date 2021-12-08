<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="container">
<?php
unset($_SESSION['product'][$_REQUEST['item_code']]);
echo 'カートから商品を削除しました。';
require 'cart.php';
?>
</div>
</body>
</html>
