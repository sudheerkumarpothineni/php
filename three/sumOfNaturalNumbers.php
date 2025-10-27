<?php
    function sumOfNaturalNumbers($range){
        $sum = 0;
        for($i =1; $i <= $range; $i++){
            $sum  += $i;
        }
        echo "Natural Numbers are - $sum" . PHP_EOL;
    }

    sumOfNaturalNumbers(10);
?>