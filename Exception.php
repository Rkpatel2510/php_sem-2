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

    try {
        $servername = 'localhost';
        $username = 'root';
        $password = '1234';
        $mydb = 'demo';

        $conn = myspli_connect($servername, $username, $password, $mydb);
        if(! $conn ){
        throw new Exception("connection failed");
        }
     catch (Exception $error) {
        echo  $error->getMessage(), "\n";
    }
}



    ?>
</body>

</html>