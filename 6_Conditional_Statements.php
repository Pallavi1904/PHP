<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container {
    max-width: 80%;
    background-color: red;
    margin: auto;
    padding: 50px;
    color: white;
    font-size: 30px;
    border: 5px solid black;
}

</style>
</head>


<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your Party Status is here:</p>
   <?php
      $age = 7;
      if($age>18){
        echo "You can go to party";
      }
      else if($age == 7){
        echo "You are just 7!!";
      }
      else{
        echo "You cannot go to party"; 
      }
    


    
    ?>
    </div>
</body>
</html>










<!-- type this to run php on localhost: php -S localhost:8000 -->
