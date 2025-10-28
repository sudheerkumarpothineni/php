<?php
    $str = "madam";
    $rev = strrev($str);
    if ($str == $rev) {
        echo "Palindrome";
    } else {
        echo "Not a palindrome";
    }
?>