<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品更新</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>商品更新</h1>

<?php if(isset($_POST['item'])): ?>
<?php
    //変数の宣言
    $id = $_POST['item'];
    $name = "";
    $cate = "";
    $price = "";

    //DB接続
    require 'DBManager.php';
    $pdo = getDB();

    //SQLを発行
    $stmt = $pdo->prepare("select * from item where id = ?");
    $stmt->execute([$id]);
    foreach ($stmt as $row){
        $name = $row['name'];
        $cate = $row['category'];
        $price = $row['price'];
    }
?>

<form method="post" action="update-output2.php">
    <p><input type="hidden" name="id" value="<?=$id?>"> </p>
    <p>商品<input type="text" name="name" value="<?=$name?>"></p>
    <p>商品区分<input type="text" name="cate" value="<?=$cate?>"></p>
    <p>価格<input type="text" name="price" value="<?=$price?>"></p>
    <input type="submit" value="再登録">
</form>
<?php else: ?>
    <p>変更する商品が選択されていません。</p>
    <br>
    <a href="./update-input.php">商品選択に戻る</a><br>
<?php endif; ?>
</body>
</html>
