<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品検索</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php require 'menu.php';?>
    <h1>商品検索</h1>
    <form method="post" action="search-output.php">
        <input type="text" name="keyword">
        <input type="submit" value="検索">
    </form>
</body>
</html>