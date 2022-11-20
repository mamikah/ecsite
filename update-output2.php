<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品更新</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>商品更新</h1>

<?php
//DB接続
require 'DBManager.php';
$pdo = getDB();

$stmt = $pdo->prepare("update item set name=?,category=?,price=? where id=?");
$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['cate']);
$stmt->bindValue(3,$_POST['price']);
$stmt->bindValue(4,$_POST['id']);
$stmt->execute();
echo '更新完了しました。';
?>
<br>
<a href="./menu.php">メニューに戻る</a><br>
</body>
</html>