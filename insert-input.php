<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品登録</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<?php require 'menu.php';?>
<h1>商品一覧</h1>
<form method="post" action="insert-output.php">
    <div>
        <span class="col-1">商品</span>
        <span class="col-2">
            <input type="text" name="name">
        </span>
    </div>
    <div>
        <span class="col-1">商品区分</span>
        <span class="col-2">
            <input type="text" name="cate">
        </span>
    </div>
    <div>
        <span class="col-1">価格</span>
        <span class="col-2">
            <input type="text" name="price">
        </span>
    </div>
    <input type="submit" value="登録">
</form>
</body>
</html>