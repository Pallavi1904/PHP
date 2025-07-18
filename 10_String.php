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
  $str = "This is string";
  echo $str;
  echo "<br>";

  echo "Length of string str is :".strlen($str);
  echo "<br>";

  echo "words in string str are :".str_word_count($str);
  echo "<br>";

  echo "The search for is in string is ".strpos($str, "is");
  echo "<br>"; 
  
  echo "The reverse of string is ".strrev($str);
  echo "<br>"; 

  echo "The replaced string is ".str_replace("is","at", $str);
  echo "<br>"; 

    


    ?>
    </div>
</body>
</html>










<!-- type this to run php on localhost: php -S localhost:8000 -->
