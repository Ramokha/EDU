<?php

//Ввод данных


$i = 1;
$totalTime = 0;
$totalTask = "Задачи на сегодня \n";

//Логика

while(true){
    $count = readline("Сколько задач у вас запланировано сегодня? \n");
    if ((int)$count <= 10 && (int)$count > 0){
        while($i <= $count){
            $task = readline("Какая задача перед вами стоит? \n");
            $time = (int)readline("Сколько времени займет эта задача? \n");
            if ($time > 8){
                echo "Эта задача требует многог времени, рекумендуем ограничиться ею \n";
            } elseif ($time < 8) {
                echo "Отлично, задача будет добавлена \n";
            }
            $totalTime += $time;
            $totalTask = $totalTask . "- {$task}({$time}ч) \n";
            $i++;
        }
        break;
    } else {
        echo "Ошибка! Вы ввели более 10 задач или некорректное значение, повторите запрос! \n";
    }
}

//Вывод данных

echo <<<HERE
    $totalTask
    Общее время на выполнение задач - {$totalTime}ч
HERE;