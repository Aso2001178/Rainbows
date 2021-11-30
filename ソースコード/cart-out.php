<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php
session_start();
//POSTデータをカート用のセッションに保存
if($_SERVER['REQUEST_METHOD']==='POST'){
$product=$_POST['item_name'];
$num=$_POST['num'];
$_SESSION['cart'][$product]=$num; //セッションにデータを格納
}
$cart=array();
if(isset($_SESSION['cart'])){
$cart=$_SESSION['cart'];
}
var_dump($cart);
?>
</body>
</html>
