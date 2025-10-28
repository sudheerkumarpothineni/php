<?php
    function stringProgram($string){
        if (empty($string)) {
            return "String must be valid";
        }
        $string = trim($string);
        $string = strtoupper($string);
        $strings = str_replace("PHP", "LARAVEL", $string);
        // echo $strings;exit;
        return $strings;
    }

    echo stringProgram("i love php programming");
?>