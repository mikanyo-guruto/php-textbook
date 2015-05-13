<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    print("お名前:" .htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));
    ?>
    
    <form action="sample04.php" method="get">
    <label for="my_name">お名前:</label>
    <input id="my_name" type="text" name="my_name" size="35" maxlength="255" value="" />
    <input type="submit" value="送信する">
    </from>
</body>
</html>