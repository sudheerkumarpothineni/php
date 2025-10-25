<?php
$vowels="aeiou";
$string="sudheeeer";
$count=0;
$noDupCount=0;
$vLen=strlen($vowels);
$sLen=strlen($string);
for ($i=0; $i<=$sLen-1 ; $i++) { 
    // echo $i;
    for ($j=0; $j<=$vLen-1 ; $j++) { 
        // echo $j;
        if ($string[$i]==$vowels[$j]) {
            $count=$count+1;
        }
    }
}
echo $count;
?>