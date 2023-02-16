<?php
    
   if (isset($_REQUEST["email"]) || isset($_REQUEST["password"]))
   {
       $a=$_REQUEST["email"];
       $b=$_REQUEST["password"];
       
       echo($a);
       echo("<br>");
       echo($b);
   }
?>