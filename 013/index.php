<?php

echo '<pre>';


// for ($i = rand(0, 25); $i != 10; $i=rand(0, 25)) {
//     echo "Dabar: $i \n";
// };

$x = 0;

do {
    echo "Dabar: $x \n";
    $x++;
    $y = 0;
    
    while ($y < 5) {
        echo "O Dabar: $y \n";
        $y++;
        for ($i = 0; $i != 10; $i++) {
    echo "Ir ateina FOras $i \n";
};
    };
} while ($x < 7);