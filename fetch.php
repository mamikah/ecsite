<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ITEM</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h1>Fetch</h1>

<?php
    //DB接続
    require 'DBManager.php';
    $pdo = getDB();

    //SQLを作成する
    $sql = 'select * from item';

    //SQLを発行する
    $stmt = $pdo->query($sql);

    //FETCHで1件のデータを配列に格納する
    $list = $stmt->fetch(PDO::FETCH_ASSOC);

    //出力
    echo '<h2>配列に格納したデータを表示</h2>';
    echo '<pre>';

    //配列をechoで表示するとエラーになる
    print_r($list);
    echo '</pre>';

    //出力２
    echo '<h2>配列の各要素を出力</h2>';
    echo '<p>id:',$list['id'],'</p>';
    echo '<p>name:',$list['name'],'</p>';
    echo '<p>category:',$list['category'],'</p>';
    echo '<p>price:',$list['price'],'</p>';

    //出力３
    echo '<h2>セッション変数に格納して出力</h2>';
    $_SESSION['item'] = $list;
    echo '<p>セッション変数をitemからnameを出力</p>';
    //セッション変数['item']から['name']を指定
    echo '<p>name:',$_SESSION['item']['name'],'</p>';
?>

</body>
</html>
