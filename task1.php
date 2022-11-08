<!-- 1. Алгоритм
Вставить $a в индексный (простой) массив целых чисел после всех элементов, в которых есть цифра 2. Новый массив создавать нельзя. Использовать функцию array_splice нельзя. -->
<?php
$numbers = array(1, 2, 3, 9, 8, 15, 2, 3);      //main array contain '2'
$a = 0;                                         // interptter number

foreach ($numbers as $key => $value) {
    if ( $value == 2) {
        $numbers[$key] = $a;
    }
}

print_r($numbers);