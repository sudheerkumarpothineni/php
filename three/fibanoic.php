<?php
    function fibanoic($limit){
        $n1 = 0; $n2 = 1;
        $i = 2;
        echo $n1.PHP_EOL;
            echo $n2.PHP_EOL;
        while ($i < $limit) {
            // echo $i;exit;
            $n3 = $n1 + $n2;
            echo $n3.PHP_EOL;
            $n1 = $n2;
            $n2 = $n3;
            // echo $n1;
            // echo $n2;
            // echo $n3;exit;
            $i++;
        }
    }
    fibanoic(10);
?>