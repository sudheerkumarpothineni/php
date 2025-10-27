<?php
    $a = [1,2,3,4,5];
    $b = [2,3,4,5,78,12,3];
    $c = array_merge($a, $b);
    print_r(array_unique($c));

    $a = ["x" => 1, "y" => 2];
$b = ["y" => 3, "z" => 4];
$c = array_merge($a, $b);
print_r($c);
?>