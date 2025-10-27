<?php
    function multiplicationTable($number){
        $number = (int)$number;
        if ($number == 0) {
            echo "Only non zero numbers are allowed". PHP_EOL;
            return;
        }
        for($i = 1; $i <= 10; $i++){
            $result = $number * $i;
            echo "$number Table is $number x $i = $result". PHP_EOL;
        }
    }

    multiplicationTable(10);
?>