<?php

$fruits = ['apples', 'bannanas', 'oranges'];
$fruits[] = 'kiwi';

// asort($fruits);
// arsort($fruits);
krsort($fruits);

var_dump($fruits);

echo $fruits[2];

$numbers = range("A","F");
var_dump($numbers);

?>