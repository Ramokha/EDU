<?php

//Ввод данных

$firstArr = [1, 2, 5, 6, 3, 4, 9, 11, 21, 12];
$secondArr = [1, 2, 5, 6, 3, 4, 9, 11, 21, 12];
$thirdArr = [];

//Логика

for ($i = 0; $i <= count($firstArr); $i++){
    $thirdNumber = $firstArr[$i] * $secondArr[$i];
    $thirdArr[] = $thirdNumber;
}

//Вывод данных

print_r($thirdArr);