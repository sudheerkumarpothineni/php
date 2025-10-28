<?php
    function stringLength($type){
        $string = "Sudheer";
        $count = 0;
        if ($type == 'recursive') {
            for ($i=0; $i < strlen($string) ; $i++) { 
                $count++;
                // echo $count;
            }
            return $count;
        } else {
            return strlen($string);
        }
    }
    echo stringLength('recursive');
?>