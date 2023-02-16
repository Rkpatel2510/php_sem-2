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

    function Raxit()
    {
        echo strrev("Raxit is a editor");
        echo("<br>");
        echo strtolower("RAXIT IS A PHOTOGRAPHER");
        echo("<br>");
        echo str_repeat("Raxit is a chess player",3);
        echo("<br>");
        $raxit="Hello! HOw are you? I am fine";
        echo substr_count($raxit, "Hello");
    }
    Raxit();

    ?>
</body>
</html>