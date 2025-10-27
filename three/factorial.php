<?php
    function factorial($number){
        $result = 1;
        for($i = $number; $i > 0; $i--){
            $result = $result * $i;
        }
        return $result;
    }
    echo factorial(5);
?>