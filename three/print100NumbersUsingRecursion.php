<?php
    function print100NumbersUsingRecursion($number){
        if ($number <= 100) {
            echo $number.PHP_EOL;
            print100NumbersUsingRecursion($number + 1);
        }
    }
    print100NumbersUsingRecursion(1);
?>