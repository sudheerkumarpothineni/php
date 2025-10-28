<?php
    function countTotalWordsInAString($type){
        $string = "I am learning PHP today";
        $count = 0;
        if ($type == 'recursive') {
            for ($i=0; $i < strlen($string); $i++) { 
                if ($string[$i] == ' ') {
                    $count++;
                }
            }
            return $count + 1;
        } else {
            return str_word_count($string);
        } 
    }
    echo countTotalWordsInAString('recursive');
?>