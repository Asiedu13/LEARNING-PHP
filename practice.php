<?php 
/* Match expression */
$color = 'pink';
$whatToDo = match($color) {
    'blue' => 'Kill the cat blood',
    'green' => 'Drug the pirate',
    'orange', 'pink' => 'Throw a bomb',
    default => 'You got lucky. No task!'
};

echo $whatToDo;

// Inlucde and require statements
include 'challenges/flowing_string.php';


// Functions and their return types
function sayMyName(string $myName) : int {
    echo "$myName is back!";
    return 1;
}

sayMyName('Prince');

// function addAll(...$nums) {
//     return array_sum($nums);
// }

// Variable functions
$f = 'saymynames';

if (is_callable($f)) {
    $f('Amanda');
}else {
    echo 'function is not callable';
}

// echo addAll(1, 2, 4, 5, 6, 7);
$x = 2;

// $sum = function(...$nums) use ($x) {
//     return $x + array_sum($nums);
// };
echo '<br/>';

// echo $sum(1, 2, 3, 4, 5, 6);

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$doubledArr = array_map(function($element){
    return $element * 2;
}, $array1);

print_r($doubledArr);


function sum(Callable $callable, ...$nums): int | float {
    return $callable(array_sum($nums));
}

function doubles(int $num) {
    return $num * 2;
}

echo sum('doubles' , 1, 2, 3, 4, 5);

$dobArr = array_map(fn($element) => $element * 2, $doubledArr);
print_r($dobArr);

echo '<br/>';
// Time practice
$currentTime = time();

echo $currentTime + 6 * 24 * 60 * 60;
echo '<br/>';

echo $currentTime - 6 * 24 * 60 * 60;
echo '<br/>';

echo mktime(0, 0, 0, 9, 24);
echo '<br/>';
echo date('d F Y', mktime(0, 0, 0, 9, 24));

echo date('d M Y', strtotime('yesterday'));



// working with arrays
$cars = ['toyota', 'lamborghini', 'nissan', 'fiat', 'mazda', 'ferrari', 'koenigsegg', 'aston martin', 'rimac', 'lexus', 'hyundai', 'tesla'];

print_r( array_chunk($cars, 2));

// creating or combining with array_combine
$arr1 = ['name', 'age', 'school'];
$arr2 = ['Prince Asiedu', 19, 'KNUST'];

echo '<br/>';
$combined = array_combine($arr1, $arr2);

echo $combined['name'];


$even = array_filter($array1, fn($element) => $element % 2 == 0);

print_r(array_values($even));
echo '<br/>';
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$somethingHappened = array_map(null, $arr1, $arr2);
print_r($somethingHappened);