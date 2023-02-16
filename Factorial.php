<?php

function fac($n)
{
    $factorial=1;
    for ($i = $n; $i >= 1; $i--) {
        $factorial=$factorial*$i;
    }
    return $factorial;
}

$n = 5;
echo fac($n);
?>
