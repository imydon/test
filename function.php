<?php

function debug ($v) {
    echo '<pre>';
    print_r($v);
    echo '</pre>';
}

$myArray = [
    'Самолёт' => '1',
    'Машина'=> '2'
];

echo '<pre>';
print_r($myArray);
echo '</pre>';
