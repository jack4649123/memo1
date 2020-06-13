<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>


<?php
require('database.php');

$statement = $db->prepare('UPDATE memo SET memo=? WHERE id=?');
$statement->execute(array($_POST['memo'], $_POST['id']));

?>
<p>変更しました</p>
<p><a href="index.php">戻る</a></p>
    
</body>
</html>