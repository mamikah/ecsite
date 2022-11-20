<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品削除</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php require 'menu.php';?>
<h1>商品削除</h1>

<form method="post" action="delete-output.php">
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
    <input type="submit" value="削除">
</form>
</body>
</html>
