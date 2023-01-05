<?php

//Ввод данных

$arr = range(1, 12);

//Логика

$func = function (int $number): string
{
    return $number & 1 ? "nechetnoe" : "chetnoe";
};

$result = array_map($func, $arr);

print_r($result);