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

<h1>FetchALL</h1>

<?php
    //DB接続
    require 'DBManager.php';
    $pdo = getDB();

    //SQLを作成する
    $sql = 'select * from item';

    //SQLを発行する
    $stmt = $pdo->query($sql);

    //FETCHAllで全データを配列に格納する
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //出力
    echo '<h2>配列に格納したデータを表示</h2>';
    echo '<pre>';

    //配列をechoで表示するとエラーになる
    print_r($list);
    echo '</pre>';

    //出力２
    echo '<h2>配列の各要素を出力</h2>';
    foreach ($list as $row) {
        echo '<p>id:',$row['id'],'</p>';
        echo '<p>name:',$row['name'],'</p>';
        echo '<p>category:',$row['category'],'</p>';
        echo '<p>price:',$row['price'],'</p>';

    }

    //出力３
    echo '<h2>セッション変数に格納して出力</h2>';
    $_SESSION['item'] = $list;
    echo '<p>セッション変数をitemからnameを出力</p>';
    //['item']から[0]行目['name']列を取る
    echo '<p>name:',$_SESSION['item'][0]['name'],'</p>';
?>

</body>
</html>
