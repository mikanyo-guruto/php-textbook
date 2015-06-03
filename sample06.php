<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $name = htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES);
    ?>
    <p>ようこそ<?php print($name); ?>さん</p>
    <ul>
        <li><a href="#"><?php print($name); ?>さんのマイページを見る</a></li>
    </ul>
    
</body>
</html>