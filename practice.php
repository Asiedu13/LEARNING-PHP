<?php 
/* Match expression */
$color = 'pink';
$whatToDo = match($color) {
    'blue' => "Kill the cat blood",
    'green' => "Drug the pirate",
    'orange', 'pink' => 'Throw a bomb',
    default => "You got lucky. No task!"
};

echo $whatToDo;

// Inlucde and require statements
include 'challenges/flowing_string.php';


// Functions and their return types
function sayMyName(string $myName) : int {
    echo "$myName is back!";
    return 1;
}

sayMyName("Prince");

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

$sum = function(...$nums) {
    return array_sum($nums);
};
echo '<br/>';

echo $sum(1, 2, 3, 4, 5, 6);