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

<p id="addMemo"><a href="input.html">新規メモ</a></p>
<button id="target" onclick="clickBtn()">このアプリの使い方</button>
<p id="explain">メモは要件を簡単に書き留めておくものです</p>
<p id="content">メモ一覧</p>

<?php
require('database.php');

$memos = $db->query('SELECT * FROM memo ORDER BY id DESC');
?>

<article>
   <?php while($memo = $memos->fetch()): ?>
   <p><a href="memo.php?id=<?php print($memo['id']) ?>"><?php print(mb_substr($memo['memo'], 0,50)); ?></a></php>
   <?php endwhile; ?>
</article>
    
<script src="main.js"></script>
</body>
</html>