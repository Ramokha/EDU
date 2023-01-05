<?php

//Ввод данных

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];

 $result = findSubject(readline("Введите искомый предмет\n"), $box);

//Логика

function findSubject (string $subject, array $arr): bool
{
    foreach ($arr as $key => $value){
        if ($subject == $value){
            return true;
        }
        if (is_array($value)){
            $result = findSubject($subject, $value);
            if ($result != false){
                return true;
            }
        }
    }
    return false;
};

//Вывод данных

echo $result ? "Предмет найден" : "Предлет не найден";