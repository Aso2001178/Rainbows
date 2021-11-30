<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>購入手続き</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
  echo '名前： ', $_SESSION['m_customers']['name'], '<br>';
  echo '住所： ', $_SESSION['m_customers']['address'];
  echo '<hr>';
if (!empty($_SESSION['product'])) {
    echo '<table>';
    echo '<th>商品番号</th><th>商品名</th>';
    echo '<th>価格</th><th>数量</th><th>小計</th>';
    $total=0;
    foreach ($_SESSION['product'] as $item_code=>$product) {
        echo '<tr>';
        echo '<td>', $item_code, '</td>';
        echo '<td>', $product['item_name'], '</td>';
        echo '<td>', $product['price'], '</td>';
        echo '<td>', $product['count'], '</td>';
        $subtotal=$product['price']*$product['count'];
        $total+=$subtotal;
        echo '<td>', $subtotal, '</td>';
        echo '<td><a href="cart-delete.php?item_code=', $item_code, '">削除</a></td>';
        echo '</tr>';
    }
    echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total,
    '</td><td></td></tr>';
    echo '</table>';
} else {
    echo 'カートに商品がありません。';
}

  echo '<hr>';
  echo '<p>内容をご確認いただき、購入を確定してください。</p>';
  echo '<a href="purchase-output.php">購入を確定する</a>';

?>
</body>
</html>

