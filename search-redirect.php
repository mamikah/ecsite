<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品検索</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>商品検索</h1>
<form method="post" action="">
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>
<?php
    if(isset($_POST['keyword'])){
        echo '<p>検索結果を表示します。</p>';
        //DB接続
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
    }
?>
</body>
</html>