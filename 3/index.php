<?php

while (true){
    $number = (int)readline("Введите число \n");
    if ((int)$number > 0){
        if ($number % 8 == 1){
            echo "finger1";
            break;
        } elseif ($number % 8 == 2 || $number % 8 == 0){
            echo "finger2";
            break;
        } elseif ($number % 8 == 3 || $number % 8 == 7){
            echo "finger3";
            break;
        } elseif ($number % 8 == 4 || $number % 8 ==6){
            echo "finger4";
            break;
        } elseif ($number % 8 == 5) {
            echo "finger5";
            break;
        }
    } else {
        echo "Введено некорректное значение, введите целое положительное число! \n";
    }
}