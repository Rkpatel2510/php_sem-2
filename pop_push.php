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
        $my_array=["tic","tac","toe"];
        $adjectives=["bad","good","super","fentastick"];
        echo $removed= array_shift($adjectives);
        echo("<br>");
        echo implode(":",$adjectives);
        echo("<br>");

        echo $add= array_unshift($adjectives);
        echo implode("?",$adjectives);

        $nested_array = [ [2,5],[8,5],[12,19] ];



        
        $popped = array_pop($my_array);
        echo "deleted $popped";
        echo implode("|",$my_array);

        $pushedd = array_push($my_array, 40, "Red");
        echo implode($my_array);
        echo("<br>");
    ?>
</body>
</html>