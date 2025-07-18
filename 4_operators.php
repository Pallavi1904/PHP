<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body>
    
    <?php
    $var1 = 33;
    $var2 = 4.5; 

    echo "Arithmetic Operators";
    echo "<br>";

        echo "Addition: ";
        echo $var1 + $var2;
        echo "<br>";

        echo "Subtraction: ";
        echo $var1 - $var2;
        echo "<br>";

        echo "Multiplication: ";
        echo $var1 * $var2;
        echo "<br>";

        echo "Division: ";
        echo $var1 / $var2;
        echo "<br>";

    echo "Assignment Operators";
    echo "<br>";
    $newvar = $var1;
    echo $newvar;
    echo "<br>";

    $newvar += 10;
    echo $newvar;
    echo "<br>";

    $newvar -= 10;
    echo $newvar;
    echo "<br>";

    $newvar *= 10;
    echo $newvar;
    echo "<br>";

    $newvar /= 10;
    echo $newvar;
    echo "<br>";

    echo "Comparison Operators";
    echo "<br>";

    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "Increment and Decrement Operators";
    echo "<br>";
    echo $var1++; //33
    echo "<br>";  

    echo $var1--; //34
    echo "<br>";

    echo ++$var1; //34
    echo "<br>";

    echo --$var1; //33
    echo "<br>";
    
    echo "Logical Operators";
    echo "<br>";

    $myvar = (true and true);
    echo var_dump($myvar);
    echo "<br>";

    $myvar2 = (false and false);
    echo var_dump($myvar2);
    echo "<br>";

    $myvar3 = (false or false);
    echo var_dump($myvar3);
    echo "<br>";

    $myvar4 = (false or true);
    echo var_dump($myvar4);
    echo "<br>";

    $myvar5 = (false xor true);
    echo var_dump($myvar5);
    echo "<br>";





    ?>
</body>
</html>










<!-- type this to run php on localhost: php -S localhost:8000 -->
