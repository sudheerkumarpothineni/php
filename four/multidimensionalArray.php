<?php
    $students = [
    ["name" => "Sudheer", "marks" => 85],
    ["name" => "Rahul", "marks" => 78],
    ["name" => "Priya", "marks" => 92],
    ["name" => "Ankit", "marks" => 67],
    ["name" => "Neha", "marks" => 88]
];
foreach ($students as $key => $value) {
    if ($value['marks'] > 80) {
        echo $value['name']. ', ';
    }
}
?>