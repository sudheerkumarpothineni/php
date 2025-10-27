<?php
    function minAndMax($type){
        if ($type == 'recursive') {
            $x = [10,20,50,40,30];
            $min = PHP_INT_MAX;
            $max = PHP_INT_MIN;
            // for ($i=0; $i < count($x); $i++) { 
            //     for ($j=$i+1; $j < count($x) ; $j++) { 
            //         if($x[$i] < $x[$j]){
            //             $temp = $x[$i];
            //             $x[$i] = $x[$j];
            //             $x[$j] = $temp;
            //         }
            //     }
            // }
            // print_r($x);exit;
            foreach ($x as $value) {

                if($value <= $min){
                    $min = $value;
                }
                
                if ($value >= $max) {
                    $max = $value;
                }
                
            }
            echo $max;
            echo $min;
        } else {
            $x = [10,20,50,40,30];
            print_r($x);
            $max = max($x);
            echo $max;
            $min = min($x);
            echo $min;
        }
    }
    minAndMax('recursive');
?>