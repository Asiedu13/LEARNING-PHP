<?php 
$array_1 = ['a' => 'Ama', 'b' => 'ball', 'c' => 'cat', 'd' => 'dog', 'e'  => 'elephant', 'f' => 'fish', 'g' => 'goat'];

$array2 = ['toyota', 'nissan', 'subaru'];
$array3 = ['Agera', 'Aston Martin', 'Lexus'];

print_r(array_chunk($array_1, 2, true));

echo '<br />';
print_r(array_combine($array2, $array3));


$nums = [1, 2, 3, 4, 6, 7, 8, 9, 10];

echo '<br /> <br />';
$even = array_filter($nums, fn($elem) => $elem % 2 == 0);

print_r(array_values($even));

$array = array_map(fn($nums, $even) => $nums * $even, $nums, $even);
print_r($array);

echo '<br/>';
$diff =  array_diff($array_1, $even);
print_r($diff);

$combed = array_merge($array_1, $even);
echo '<br/>';

print_r($combed);


echo '<h2>Playing with Search </h2>';
print_r($even);
echo '<br/>';

if (in_array(7, $even)) {
    echo array_search(2, $even);
}else {
    echo "Value not in array!";
}

echo '<h2>Playing with Destructors </h2>';

// Destructuring an array
[$a, $b, $c] = [1, 2, 4];
echo $b;

