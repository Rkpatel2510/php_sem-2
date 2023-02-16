<?php
//set cookie 
setcookie("name","Raxit Kotadiya", time()+3600,"/","",0);

setcookie("age","19",time()+3600,"/","",0);


echo $_COOKIE["age"];
echo("</br>");

//delete cookie(past ni value set karvi)
setcookie("name","Raxit Kotadiya", time()-60,"/","",0);

if(isset($_COOKIE["name"]))
{
    echo $_COOKIE["name"];
}
else
{
    echo ("cookies is expire");
}
echo "<br>";

//session
session_start();
if(isset($_SESSION["counter"]))
{
    $_SESSION["counter"]+=1;
}

else
{
    $_SESSION["counter"]=1;
}

$msg="You have visited this page". $_SESSION["counter"];
$msg .="in this session.";

echo $msg;

//email
$to="xyz@somedomain.com";
$subject="this is subject";
$message="this is simple text message.";
$header="From:abc@somedomain.com \r\n";
$retval=mail($to,$subject,$message,$header);
if ($retval ==true)
{
    echo "message sent successfully...";
}
else
{
    echo "unsucsessfull";
}
?>