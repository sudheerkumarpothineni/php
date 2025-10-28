<?php
    function stringReverse($type){
        $string = "Hello";
        $reverse = '';
        if ($type == 'recursive') {
            for ($i=strlen($string) - 1; $i >= 0 ; $i--) { 
                $reverse .= $string[$i];
            }
            return $reverse;
        } else {
            return strrev($string);
        }
    }
    echo stringReverse('recursive');
?>