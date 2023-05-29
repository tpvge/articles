<?php
require_once __DIR__ . '/engine/connect.php';
require_once __DIR__ . '/engine/article_func.php';

$article = article();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="contein">
            <h1><?= $article['title'] ?></h1>
            <p style="font-size: 20px;"><?= $article['text_small'] ?></p>
            <p><?= $article['text_big'] ?></p>
            <h3><?= $article['date'] ?></h3>
            <h4><?= $article['author'] ?></h4>
        </div>
    </div>
</body>

</html>