<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <h1>String1</h1>
        <input type="text" name="text1">
        <h1>String2</h1>
        <input type="text" name="text2">
        <br>
        <br>
        <input type="submit" /> 
    </form>

    <br>

    <?php

        $t1 = (isset($_POST['text1'])) ? $_POST['text1'] : "";
        $t2 = (isset($_POST['text2'])) ? $_POST['text2'] : "";

        $t3 = $t1 . $t2;

        echo "<h1>Output - $t3</h1>";
    ?>
    
</body>
</html>