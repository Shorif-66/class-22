<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

<style>
    p{
        font-size:18px;s
        color:red;
    }
    body{
        text-align:center;
    }
</style>


</head>
<body>
  
    <?php echo "<h1>Simple Calculator</h1>";?>
 <p>First number is 66</p>
 <p>Second number is 12</p>
   <?php
    $first_number = 66 ;
    $second_number =12 ;
    echo "Sum is:". $first_number+$second_number;
    echo "<br>";
    echo "<br>";
    echo "Sub is:". $first_number-$second_number;
    echo "<br>";
    echo "<br>";
    echo "Mul is:". $first_number*$second_number;
    echo "<br>";
    echo "<br>";
    echo "Div is:". $first_number/$second_number;
    echo "<br>";
    echo "<br>";
    echo "Modu is:". $first_number%$second_number;
    echo "<br>";
    echo "<br>";  
     ?>
     <br>
     <br>
     <?php
     $first_name = "Shoriful";
     $last_name = " Islam";
     echo "by " .$first_name.$last_name;
      ?>
</body>
</html>