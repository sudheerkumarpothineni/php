<?php
    function simpleInterest($a, $r, $t){
        $result = ($a * $r * $t)/100;
        echo $result;
    }

    simpleInterest(10,2,10);
?>