<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>introduction of php</title>
</head>
<body>
    <div class="container">
         this is my first php 
         <?php
         echo"hello";
         $var1=23;
         $var2=34;
         echo $var1;
         echo $var2;
         echo "<br>";
         echo "the value of var1+var2 is";
         echo "<br>";
         echo $var1 +$var2;
         echo "<br>";
         $newvar=$var1;
         $newvar +=1;
         echo "the value of new var is";
         echo "<br>";
         echo $newvar;
         echo "the value of 1==4 is";
         echo var_dump(1==4);
         echo "<br>";
         echo "the value of 1<=4 is";
         echo var_dump(1<=4);
         echo "<br>";

         echo "the value of 1>=4 is";
         echo var_dump(1>=4);
         echo "<br>";

         echo "the value of 1!=4 is";
         echo var_dump(1!=4);
         echo "<br>";


         ?>
    </div>

</body>
</html>