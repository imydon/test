<?php

// Эта функция используется для дебага
function debug ($v) {
    echo '<pre>';
    if (!is_array($v))
        $v = [$v];
    print_r($v);
    echo '</pre>';
    // Я крутой челн
}

$myArray = [
    'Самолёт' => '1',
    'Машина'=> '2'
];

echo '<pre>';
print_r($myArray);
echo '</pre>';
