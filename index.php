<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

    <form action="" method="post">
        <input type="number" name="number">
    </form>

    <?php

        $n = (isset($_POST['number'])) ? $_POST['number'] : 5;
        
        for ($i=1; $i <= $n; $i++) { 
            if ($i % 2 != 0){
                echo "<p style='color:red'>$i</p>";
            }
        }

        for ($i=1; $i <= $n; $i++) { 
            if ($i % 2 == 0){
                echo "<p style='color:blue'>$i</p>";
            }
        }

        for($i = 1; $i <= $n; $i++) {
            for($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
            // echo "\n";
        }

        echo "<br>";

        for($i = 1; $i <= $n; $i++) {
            for($j = $n; $j >= $i; $j--) {
                echo " *";
            }
            echo "<br>";
        }

        echo "<br>";

        for($i = 1; $i <= $n; $i++) {
            for($j = $n; $j >= $i; $j--){
                echo "&nbsp"; 
            }

            for ($k=$i; $k >= 1; $k--){
                echo "* ";
            }
            echo "<br>";
        }

        echo "<br>";

        for($i = 1; $i <= $n; $i++) {

            for($j = $i; $j>=1; $j--){
                echo "&nbsp";
            }


            for($j = $n-$i+1; $j>=1; $j--){
                echo "* ";
            }

            echo "<br>";
        }

        
    ?>

</body>
</html>