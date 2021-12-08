<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Russo+One&display=swap">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<div class="container">
    <div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>
    <div class="title" >comic store</div><br>
    <div class="main">
        <?php
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
        ?>
    </div>
    <div class="btn">
        <div class="button">
            <a href="purchase-input.php">購入手続きへ</a>
        </div>
        <div class="button2">
            <a href="toppage.php">トップページへ</a>
        </div>
    </div>
</div>
</body>
</html>
