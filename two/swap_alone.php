<?php
    function swap_alone($a,$b){
        $a=$a+$b;
        $b=$a-$b;
        $a=$a-$b;

        echo "A value is - $a & B value is - $b";
    }

    swap_alone(10,20);
?>