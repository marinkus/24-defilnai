<h2>Rekursija</h2>

<?php

echo '<pre>';

function recursive($num) {
    echo "Enter: $num \n";
    if ($num < 5) {
        recursive($num +1);
    }
    echo "Exit: $num \n";
}
$startNum = 1;
recursive($startNum);

$mas = [
    5,
    [4, 2, [
        8, 9
    ], 78, [
        87, 37
    ]],
    [4],
    8,
    [87, 96, [8, [98, [2], [69, [45, 47]]]], 66, 7]
    ];

function getSum(array|int $val, bool $resetStatic = false) {
    static $sum = 0;
    if($resetStatic) {
        $sum = 0;
    }
        if (is_int($val)) {
            $sum += $val;
        } else {
            foreach ($val as $v) {
                getSum($v);
            }
        }
        return $sum;
    }

    // function sumArray($arr) {
    //     $sum = 0;
    //     foreach ($arr as $num) {
    //     if (!is_array($num)) {
    //           $sum += $num;
    //         } else {
    //             $sum += sumArray($num);
    //         }
    //     }
    //     return $sum;
    // }

print_r(getSum($mas, true));
print_r(getSum($mas, true));
print_r(getSum($mas, true));

