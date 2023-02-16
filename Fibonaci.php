<?php
function fibo($n){
    if ($n<=1){
        return $n;
    }else{
        return fibo($n-1)+fibo($n-2);
    }
}
    $n=10;
    for ($i=0; $i < $n ; $i++) { 
        echo fibo($i), ",";
    }
?>