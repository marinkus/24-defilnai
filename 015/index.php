<?php

echo '<pre>';

$arr = [];

foreach(range(1, 30) as $_) {
    $arr[] = rand(5, 25);
}

print_r($arr);

$max = $arr[0];

$indexes = [];

foreach ($arr as $ind => $val) {
    if ($val > $max) {
        $max = $val;
        $indexes = [];
        $indexes[]=$ind;
    } elseif ($max == $val) {
        $indexes[] = $ind;
    }
}
print_r($indexes);