<?php

// declare(strict_types=1);

// // function foo(): ?int {
// //     print "Working function <br/>";
// //     return 24;
// // }

// // echo var_dump(foo());

// // Function params
// function foo(int | float &$x, int | float $y = 20):  int | float {
//     if ($x % 2 == 0) {
//         $x /= 2;
//     }
//     return $x * $y;
// }

// $a = 18;
// $b = 4;

// echo foo($a, $b) . '<br />';

// var_dump($a, $b);

// // Variadic arrays
// function sum (...$numbers) {
//     // $sum = 0;
//     // foreach($numbers as $number) {
//     //     $sum += $number;

//     // }

//     return array_sum($numbers);
// }

// echo sum(1, 34, 54, 23, 67, 56) . '<br />';

// // named arguments
// function sayMyName($firstname, $lastname) {
//     return $firstname . $lastname . '<br/>';

// }

// echo sayMyName(firstname: "Prince", lastname : 'Agyemang');

// $names = ['firstname'=> "Prince", 'lastname'=>"Asiedu"];

// echo sayMyName(...$names);


// // Variable functions
// // This is funny

// $z = 'saymyName';

// if (is_callable($z)) {
//     echo $z('Prince Kofi', 'Asiedu');
// }else {
//     echo "Not callable";
// }

$x = 10;

$sum = function (callable $callback, int | float ...$numbers): int | float {
    return $callback(array_sum($numbers));
};
function dob($element) {
    return $element * 2;
};
echo $sum('dob', 10, 20, 34, 322);
echo "<br/>";
echo $sum(fn($element)=> $element * 3, 3, 4, 5, 6, 7, 8);
// $array = [2, 3, 4, 5, 6];

// $array_2 = array_map(function($element) {
//     return $element * 2; 
// }, $array);

// echo "Before <br/>";
// print_r($array);

// echo "After <br/>";
// print_r($array_2);
