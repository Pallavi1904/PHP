<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body>
   <?php

    echo "Data Types in PHP";
    echo "<br>";
     
    define('pi',3.14);
    
    $var = "This is string";
    echo var_dump($var);
    echo "<br>";

    $var1 = 67;
    echo var_dump($var1);
    echo "<br>";

     $var2 = 67.9;
    echo var_dump($var2);
    echo "<br>";

     $var3 = true;
    echo var_dump($var3);
    echo "<br>";

    echo pi;


    
    ?>
</body>
</html>










<!-- type this to run php on localhost: php -S localhost:8000 -->
