<?php
    function grade($s1, $s2, $s3){
        $average = ($s1 + $s2 + $s3)/3;
        if($average >= 90){
            echo "Grade A";
        }elseif ($average >= 75) {
            echo "Grade B";
        }else {
            echo "Grade C";
        }
    }

    grade(100,90,80);
?>