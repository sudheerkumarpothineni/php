<?php
    function largest_3($a, $b, $c){
        if ($a>$b && $a>$c) {
            echo "$a is larger";
        }elseif ($c>$b && $c>$a) {
            echo "$c is larger";
        }elseif ($b>$a && $b>$c) {
            echo "$b is larger";
        }
    }

    largest_3(10, 20, 30);
?>