<?php
echo "<h1>Flowing string program</h1> <br/>";

$text = "I am working perfectly";
$flowing_text = "sand should suffer sunlight";


// Check for fluidity
$broken = explode(" ", $text);

$test_letter = $broken[0][0];

$hasflow = true;

foreach($broken as $word) {   
    if ($word[0] !== $test_letter) {
        $hasflow = false;

    }
}

$isAFlow = array_map(fn($element) => $element[0] == $test_letter, $broken);

var_dump($isAFlow);
echo "<h2>$flowing_text</h2> <br/>";

if ($isAFlow) echo "The sentence has flow <br/>";
else echo "This sentence does not float <br/>";