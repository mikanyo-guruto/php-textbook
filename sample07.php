<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <select name="age" id="age">
    <?php
    $i = 10;
    while($i <= 70){
        print('<option value="' . $i . '">' . $i . '歳</option>');
        $i++;
    }
    /*
    for($i=10; $i<=70; $i+=2){
        print('<option value="' . $i . '">' . $i . '歳</option>');
    }
    */
    ?>
    </select>
</body>
</html>