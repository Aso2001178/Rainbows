<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>退会</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>退会されますか？</h2>
<form action="withdraw-result.php" method="post">
    <input type="text" name="pass">
    <button type="submit">退会する</button>
</form>
<hr>
<?php
$pdo=new PDO('mysql:host=mysql147.phy.lolipop.lan;
            dbname=LAA1291127-rainbows;charset=utf8',
            'LAA1291127',
            '1234123');

foreach ($pdo->query('select * from m_customers')as $row) {
}
$pdo = null;
?>
</body>
</html>
