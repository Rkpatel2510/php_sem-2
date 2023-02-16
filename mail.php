<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>

<body>
    <?php
    $to = "ryankline.cis@gmail.com";
    $subject = "Testing mail using php";
    $message = "This is simple text message. send from php code.";
    $header ="From:raxit2510@gmail.com \r\n";
    $retval = mail($to, $subject, $message, $header);
    
    if($retval ==true)
    {
        echo "Message sent successfully...";
    }
    else
    {
        echo "Message could not send!!!";
    }
   ?>
</body>

</html>