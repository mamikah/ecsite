<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>商品検索結果</h1>

<?php
    //DB接続
//    $pdo = new PDO('mysql:host=mysql206.phy.lolipop.lan;dbname=LAA1419703-shop;charset=utf8'
//    ,'LAA1419703'
//    ,'mami082121P');
    require 'DBManager.php';
    $pdo = getDB();

    echo '<table border="1">';
    echo '<tr><th>商品名</th><th>区分</th><th>価格</th></tr>';

    //SQL作成
    $stmt = $pdo->prepare("select * from item where name like ?");

    //SQl発行
    //echo使わない時の文字の連結はドット
    $stmt->execute(['%'.$_POST["keyword"].'%']);

    //戻り値を処理する
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
</body>
</html>

