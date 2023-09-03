<?php 
$array_1 = ['a' => "Ama", 'b'=>"ball", 'c'=>'cat', 'd'=> 'dog', 'e'=>'elephant', 'f'=>'fish', 'g'=> 'goat'];

$array2 = ['toyota', 'nissan', 'subaru'];
$array3 = ['Agera', 'Aston Martin', 'Lexus'];

print_r(array_chunk($array_1, 2, true));

echo "<br />";
print_r(array_combine($array2, $array3));


$nums = [1, 2, 3, 4, 6, 7, 8, 9, 10];

echo "<br /> <br />";
$even = array_filter($nums, fn($elem) => $elem % 2 == 0);

print_r(array_values($even));

$array = array_map(fn($nums, $even) => $nums * $even, $nums, $even);
print_r($array);