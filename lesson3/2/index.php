<?php

//Ввод данных

$name = readline("Напишите имя \n");
$str = "";
$newArr = [];

$secondArr = ["счастья", "здоровья", "позитива", "долголетия", "терпения", "обаяния"];
$firstArr = ["бесконечного", "крепкого", "нового", "радостного", "кривого"];

//Логика

for ($i = 0; $i < 3; $i++){
    $newArr[] = $firstArr[array_rand($firstArr)];
    $newArr[] = $secondArr[array_rand($secondArr)];
    ${"newArr".$i}[] = $newArr;
    $newArr = [];
}

$firstPhrase = implode(' ', $newArr0[0]);
$secondPhrase = implode(' ', $newArr1[0]);
$thirdPhrase = implode(' ', $newArr2[0]);

$str = "$firstPhrase, $secondPhrase и $thirdPhrase";

//Вывод данных

echo <<<HERE
Дорогой $name, от всего сердца поздравляю тебя с днем рождения, 
желаю $str!
HERE;

