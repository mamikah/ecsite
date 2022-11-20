<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ITEM</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php require 'menu.php';?>
    <h1>商品一覧</h1>

    <?php require 'DBManager.php';
    $pdo = getDB();
    //sqlに接続する
//    $pdo = new PDO('mysql:host=mysql206.phy.lolipop.lan;dbname=LAA1419703-shop;charset=utf8',
//        '	LAA1419703','mami082121P');

    //sqlを作成する
    $sql = "select * from item";

    //sqlを発行する
    $stmt = $pdo->query($sql);

    //戻り値を処理する
    echo '<table border="1">';
    echo '<tr><th>商品名</th><th>区分</th><th>価格</th></tr>';
    foreach ($stmt as $row){
        echo '<tr>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['category'],'</td>';
        echo '<td>',$row['price'],'</td>';
        echo '</tr>';
    }

    echo '</table>';
    ?>

    <a href="./menu.php">メニューに戻る</a>

