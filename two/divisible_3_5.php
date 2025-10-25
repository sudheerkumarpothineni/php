<?php
    function divisible_3_5($a){
        if ($a%3 == 0 && $a%5 == 0) {
            echo "yes";
        } else {
            echo "No";
        } 
    }

    divisible_3_5(15);
?>