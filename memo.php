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


$id= $_REQUEST['id'];
if(!is_numeric($id) || $id<=0) {
    print('１以上の数字で入力してください');
    exit();
}

$memos=$db->prepare('SELECT * FROM memo WHERE id=?');
$memos->execute(array($id));
$memo=$memos->fetch();

?>

<article>
    <p><?php print($memo['memo'])?></p>

<p><a href="delete.php?id=<?php print($memo['id']); ?>">削除する<a></p>
<p><a href="update.php?id=<?php print($memo['id']); ?>">変更する<a></p>

    <a href="index.php">戻る</a>
</article>



    
</body>
</html>