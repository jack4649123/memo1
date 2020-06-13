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


$id=$_REQUEST['id'];

$memos=$db->prepare('SELECT * FROM memo WHERE id=?');
$memos->execute(array($id));
$memo=$memos->fetch();


?>
<form action="update_do.php" method="post">
    <input type="hidden" name="id" value="<?php print($memo['id']) ?>">
    <textarea name="memo" cols="30" rows="10">
        <?php print($memo['memo']); ?>
    </textarea><br>
    <button type="submit">変更します</button>
</form>

<p><a href="index.php">戻る</a></p>
    
</body>
</html>