<?php

$numbers_array = [];

while (count($numbers_array) < 15) {
    $random_number = rand(1, 100);
    if(!in_aray($random_number, $numbers_array)){
        array_push($numbers_array, $random_number);
    }
}

echo '<pre>';
var_dump($numbers_array);
echo '</pre>';







?>