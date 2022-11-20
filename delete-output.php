<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品削除</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>商品削除</h1>

<?php if(isset($_POST['item'])): ?>

<?php
$id = $_POST['item'];

//DB接続
require 'DBManager.php';
$pdo = getDB();
$stmt = $pdo->prepare("delete from item where id = ?");
$stmt->bindValue(1,$id);
$stmt->execute();
echo "削除完了しました。";
?>
<?php else: ?>
<p>削除する商品が選択されていません</p><br>
<a href="./delete-input.php">商品選択に戻る</a>
<?php endif; ?>

<br>
<a href="menu.php">メニューに戻る</a>
</body>
</html>



