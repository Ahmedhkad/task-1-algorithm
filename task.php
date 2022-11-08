<?php
//  1. Алгоритм
// Вставить $a в индексный (простой) массив целых чисел после всех элементов, в которых есть цифра 2. Новый массив создавать нельзя. Использовать функцию array_splice нельзя. 

$a = 0;
$numbers = array(1, 2, 3, 15, 8, 20, 11, 2, 626, 9, 1 );

$length = count($numbers);
echo ($length);
echo ("\n");
for ($i = 0; $i < $length; $i++) {
    if (strpos($numbers[$i], "2") !== false) {      //search for repeated 2
        $length++;
        echo ($length);
        echo ("\n");
        for ($j = $length - 1; $j > $i; $j--) {     //loop to rearrange 
          //  j =  (11)   ;  j > 2 ; j--        //first 2
            $numbers[$j] = $numbers[$j - 1];     //change the key of each number
        }
        $i++;                   //after rearranging, move to next key 
        $numbers[$i] = $a;          //and repaced it with $a
    }
}

print_r($numbers);