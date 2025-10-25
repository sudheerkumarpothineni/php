<?php
    function pnz ($value){
        if ($value>0) {
            echo "Positive";
        } elseif($value<0) {
            echo "Negative";
        } elseif($value==0){
            echo "Zero";
        }    
    }

pnz(0);
?>