<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>


<body>
    <div class="container">
      
   <?php
      $languages = array("cpp","python");
     echo $languages[0]; 
     echo "<br>";
     echo count($languages);

     $a = 0;
     while ($a <= 10) {
        echo "The value of a is: ";
        echo $a;
        echo "<br>";
        $a++;
     }

     // Iterating array using while loop
     $a = 0;
     while ($a < count($languages)) {
        echo "The languages are: ";
        echo $languages[$a];
        echo "<br>";
        $a++;
     }

     $a = 0;
    do {
        echo "The languages are: ";
        echo $languages[$a];
        echo "<br>";
        $a++;
     }while ($a < count($languages)) ;
    


    for($i=0; $i < 10; $i++) { 
        echo "The number are: ";
        echo $i;
        echo "<br>";
     };

    foreach ($languages as $value) {
        echo "<br>Value are: ".$value;
       
    };
    
    ?>
    </div>
</body>
</html>










<!-- type this to run php on localhost: php -S localhost:8000 -->
