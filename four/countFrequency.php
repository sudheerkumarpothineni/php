<?php
    // $a = [1,2,3,4,5,5,5,5,6,6,6,67,8];
    // $x = array_count_values($a);
    // print_r($x);

    $a = [1,2,3,4,5,5,5,5,6,6,6,67,8];
    $results = [];
    // for ($i=0; $i < count($a); $i++) { 
    //     $count = 1;
    //     if (isset($results[$a[$i]])) {
    //     continue;
    // }
    //     for ($j=$i+1; $j < count($a) ; $j++) {
    //         if ($a[$i] == $a[$j]) {
    //             $count++;
    //         }
    //     }
    //     $results[$a[$i]] = $count;
    // }

    for($i = 0; $i < count($a); $i++){
        if (isset($results[$a[$i]])) {
            $results[$a[$i]]++;
        }else{
            $results[$a[$i]] = 1;
        }
    }
    print_r($results);
?>