<?php
    $student = [
    "name" => "Sudheer",
    "age" => 25,
    "course" => "PHP",
    "city" => "Hyderabad"
];

asort($student);
arsort($student);
ksort($student);
krsort($student);
print_r($student);
?>