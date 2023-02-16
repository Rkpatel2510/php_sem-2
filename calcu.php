<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
      function add()
         {
             $a=5;
             $b=6;
             $c=$a+$b;
             return $c;
         }  
         
      function sub()
           { 
             $a=15;
             $b=5;
             $c=$a-$b;
             return $c;
           }

      function mul()
           {
             $a=23;
             $b=12;
             $c=$a*$b;
             return $c;
           }

      function div()
           {  $a=6;
             $b=2;
             $c=$a/$b;
             return $c;
           }

          $A=add();
          echo "answer is=$A<br>";
          $B=sub();
          echo "answer is=$B<br>";
          $r=mul();
          echo "answer is=$r<br>";
          $x=div();
          echo "answer is=$x";

    ?>
    
</body>
</html>