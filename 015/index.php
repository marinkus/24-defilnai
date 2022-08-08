<?php
echo '<h2>Funkcijos</h2>';


echo '<pre>';

function fun (string $s = 'Hi', array|string $v = 'Vardas') : string {
    return "$s $v, KDR? SDZ. KR? KPZ.";
}

$kibiras = fun('Labas', 'Vasya');
echo $kibiras;
echo '<br>';

$kibiras = fun(); //grazina 7 eilutej duota defaulta - 'Hi', 'Vardas'
echo $kibiras;



function moreFun($f, ...$something) {
    print_r($something);

}

moreFun(2, 5, 7, 44);


$moreFun = function() {
    $notFun = function($a) {
        print_r('Labukas'. $a);
    };

    return $notFun;
};

$moreFun()('Name'); // same bellow
$a = $moreFun();
$a('Name');

$abc = function ($str) {
    echo $str;
};

function doPrint($fun, $ka) {
    return $fun($ka);
}
doPrint($abc, 'Balvonas');

$burbulas = 'Baravykas';


doPrint( // Callbackas
    function ($str) use ($burbulas){
        echo $str . $burbulas;
    }
    ,
    'GRYBAS2'
);

echo doPrint( // Vienoje eiluteje, reikia returno doPrint'e
    fn($str) => $str . $burbulas
    ,
    'GRYBAS2777'
);

