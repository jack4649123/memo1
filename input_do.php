<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
<pre>

<?php

require('database.php');
    $statement = $db->prepare('INSERT INTO memo SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo '登録しました';

?>

<a href="index.php">戻る</a>

</pre>    
</body>
</html>