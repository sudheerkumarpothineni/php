<?php
    function vowelConsonant($v){
        if ($v == 'a' || $v == 'e' || $v == 'i' || $v == 'o' || $v == 'u') {
            echo "Vowel";
        }else{
            echo "Consonant";
        }
    }

    vowelConsonant("a");
?>