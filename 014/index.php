<?php

echo '<pre>';

$arr = ['balta', 8 =>'juoda', 'c' => 'red', 'yellow'];
$arr[] = 'Katė';
$arr[7] = 'Šuo';
$arr[0] = 'Dramblys'; // override 'balta'
$arr['indeksas'] = 'Pienas';
$arr[] = 'Katė';


echo count($arr);
echo '<br>';

print_r($arr);

foreach(range(0, 4) as $val) {
    echo "Dabar: $val \n";
}; // tas pats buvo su for #013 paskaitoje

$colors = ['red', 'black', 'yellow', 'green'];

foreach ($colors as $index => $value) {
    echo "Spalva: $index : $value\n";
};


foreach ($colors as &$value) {
    $value = 'black';
}; // "&"pakeicia originala, tai yra tik shortcutas i originala, privaloma ji unsetinti, nes kita karta panaudojus ta pati shortcuta jis bus pasilikes ant sustojusio kintamojo

unset($value);

print_r($colors);

$unitedColorsOfBenneton = [
    ['red', 'black', 'yellow', 'green'],
    ['roplys', 'gyvate', 'ozys', 'runkelis'],
    [77, 12]
];

echo $unitedColorsOfBenneton[1][0];
echo '<br>';

foreach ($unitedColorsOfBenneton as $stalcius) {
    foreach ($stalcius as $daiktas) {
        echo "$daiktas \n";
    };
};

$masyvas = [[range(1, 3)],[range(4, 6)],[range(7, 9)]];

var_dump($masyvas);

$_3x3 = [];
$count = 0;
foreach (range(1, 3) as $_) {
    $_3 = [];
    foreach (range(1, 3) as $_) {
        $_3[] = ++$count;
    };
    $_3x3[] = $_3;
};

print_r($_3x3);