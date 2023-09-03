<?php
    echo "Prince this is working!";
    echo "<br />";
    $color = "blue";
    switch($color) {
        case "blue":
            echo "Feeling blue already";
            break;
        case "pink":
            echo "Feeling like a barbie";
            break;
        case 'black':
            echo 'Ready to play my role';
            break;
        default:
            echo "It's a color. I just don't know which one";
            break;
    }

    echo "<br />";

    // Match expression
    $numeric = 6;
    $whatISaid = match($numeric) {
        1 => "I am the first number though",
        2, 3 => "We do similar things ",

        default => "I wouldn't want to intrude",
    };

    echo $whatISaid;


?>