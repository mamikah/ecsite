<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品更新</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php require 'menu.php';?>
<h1>商品更新</h1>

<form method="post" action="update-output.php">
<?php

//DB接続
require 'DBManager.php';
$pdo = getDB();

//SQL作成、発行、戻り値の処理
foreach ($pdo->query("select * from item") as $row){
    echo '<p>';
    echo '<input type="radio" name="item" value="',$row['id'],'">',$row['name'];
    echo '</p>';
}
?>
<input type="submit" value="変更">
</form>
</body>
</html>