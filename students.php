<?php

$students = array("Sana", "Zayan", "Irfa",  "Ashaz", "Rizz");


echo "Array of students: ";
print_r($students);


sort($students);
echo "<br>Sorted Array (ascending order): ";
print_r($students);


$students = array("Sana" => 2, "Zayan" => 1, "Irfa" => 3, "Ashaz" => 0, "Rizz" => 4);
asort($students);
echo "<br>After asort: ";
print_r($students);


arsort($students);
echo "<br>After arsort: ";
print_r($students);
?>
