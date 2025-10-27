<?php
    function reverseNumber($number){
        $reverse = 0;
        $reminder = 0;
        while($number > 0){
            $reminder = $number % 10;

            $reverse = $reverse * 10 + $reminder;

            $number = (int)($number / 10);
            // echo $number;

        }
        return $reverse;
    }

    echo reverseNumber(54311);
?>