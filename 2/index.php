<?php

//Ввод данных

$arr = range(1, 5);

//Логика

function func (array $array): array
{
    $maxNumber = max($array);
    $minNumber = min($array);
    $avgNumber = array_sum($array) / count($array);
    $newArr['max'] = $maxNumber;
    $newArr['min'] = $minNumber;
    $newArr['avg'] = $avgNumber;
    return $newArr;
}


$result = func($arr);

//Вывод данных

print_r($result);