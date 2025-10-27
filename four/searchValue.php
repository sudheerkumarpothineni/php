<?php
    $a = [10,20,30,40,50];
    $y = 30;
    foreach ($a as $value) {
        if($y == $value){
            echo "Match found";
            break;
        }
    }
?>