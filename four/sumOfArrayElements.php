<?php
    function sumOfArrayElements($type){
        $number = [10,20,30];
        if ($type == 'recursive') {
            $sum = 0;
            foreach ($number as $value) {
                $sum = $sum + $value;
            }
            echo $sum;
        } else {
            echo array_sum($number);
        }
        
    }
    sumOfArrayElements('recursive');
?>