<?php
    function digitsCount($number){
        // echo strlen($number); - This is with predefined function
        $count = 0;
        while ($number > 0) {
            $number = (int)($number/10);
            $count++;
        }
        echo $count;
    }
    digitsCount(100);
?>