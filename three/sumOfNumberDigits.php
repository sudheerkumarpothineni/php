<?php
    function sumOfNumberDigits($number){
        $sum = 0;
        while ($number > 0) {
            $reminder = (int)($number % 10);
            $sum = (int)($sum + $reminder);
            $number = (int)($number / 10);
        }
        echo $sum;
    }
    sumOfNumberDigits(125);
?>