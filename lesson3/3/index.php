<?php

//Ввод данных

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Петров Петр' => 2,
        'Романов Роман' => 4,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Андреев Андрей' => 2,
        'Вадимов Вадим' => 5,
    ],
];

$totalMark = 0;
$midMark = 0;
$newArr = [];
$markArr = [];

 //Логика

foreach($students as $group => $values){
    foreach($values as $student => $mark){
        $totalMark += $mark;
        if ($mark < 3){
            $newArr[$group] = $student;
        }
    }
    $midMark = $totalMark / count($values);
    $markArr[] = $midMark;
    $totalMark = 0;
}

print_r($markArr);

$current = current($markArr);
$next = next($markArr);
echo "Группа с наивысшей средней оценкой \n";
if ($current > $next){
    print_r(array_key_first($students));
}else{
    print_r(array_key_last($students));
}

 //Вывод данных

echo "\nСписок студентов на отчисление \n";
print_r($newArr);