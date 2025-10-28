<?php
    function vowelsAndConsonants($string, $index = 0, $vCount = 0, $cCount = 0){
        if (!isset($string[$index])) {
            echo "Vowels - " . $vCount;
            echo "Consonants - " . $cCount;
            return;
        }
        $ch = strtolower($string[$index]);
        if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u') {
            $vCount++;
        }else{
            $cCount++;
        }
        $index++;
        vowelsAndConsonants($string, $index, $vCount, $cCount);
    }
    vowelsAndConsonants("Sudheer", 0, 0, 0);
?>