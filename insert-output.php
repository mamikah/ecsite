<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品登録</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>商品登録</h1>
<?php
require 'DBManager.php';
$pdo = getDB();

//SQL作成
//全列に値を入れる場合  --->   insert into a values(1,2)
//特定の列に値を入れる場合 ->  insert into a(1,2) values(1,2)
$stmt = $pdo->prepare("insert into item values(null,?,?,?)");

//SQl発行
$stmt->execute([$_POST["name"],$_POST["cate"],$_POST['price']]);
echo '登録完了しました。';
?>

<br>
<a href="menu.php">メニューに戻る</a>
</body>
</html>

