<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>

<h1><a href="index.php">メモアプリ</a></h1>


<?php
require('database.php');

if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
$statement = $db->prepare('DELETE FROM memo WHERE id=?');
$statement->execute(array($id));
}
?>
<p>削除しました</p>
<p><a href="index.php">戻る</a></p>
    
</body>
</html>