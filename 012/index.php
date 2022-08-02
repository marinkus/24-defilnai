<?php

echo 'Hello world';
echo '<br>';

$_1 = rand(0, 2);
$_2 = rand(0, 2);
$_3 = rand(0, 2);
$_4 = rand(0, 2);

$two = 0;

if ($_1 == 2)
{
    $two++;
};
if ($_2 == 2)
{
    $two++;
};
if ($_3 == 2)
{
    $two++;
};
if ($_4 == 2)
{
    $two++;
};

$suma = $_1 + $_2 + $_3 + $_4;

$one = $suma - (2 * $two);
$zero = 4 - $one - $two;

echo "$_1 $_2 $_3 $_4 ----- $zero : $one : $two";
echo '<br>';

$drambliai = 3;
$raganosiai = 2;
$begemotai = 6;
if ($begemotai > $raganosiai && $begemotai > $drambliai) echo 'Begemotų yra daugiausiai';
echo '<br>';
echo '<br>';

// 6 > 2 && 6 > 3;
// true && true
// true

$a = 5 > 9 ? 'Jo' : 'Labai abejotina';

echo $a;
echo '<br>';

// $i=1;
// var_dump(isset($i)); // gražina FALSE
// isset($i); // gražina TRUE
// $i=null; 
// isset($i); //gražina FALSE


$rezultatas = $vienas ?? 8; // gražina 8
$vienas = 1;
$rezultatas = $vienas ?? 8; // gražina 1
echo '<br>';
echo '<br>';
echo '<br>';

$siuntinukoDydis = ['S', 'M', 'L', 'XL'][rand(0, 3)];
echo "Senukas atnešė $siuntinukoDydis dydžio siuntą.";

// if ($siuntinukoDydis == 'S') {
//     echo '<br>Tikrinam S';
// }
// if ($siuntinukoDydis == 'S' || $siuntinukoDydis == 'M') {
//     echo '<br>Tikrinam M';
// }
// if ($siuntinukoDydis == 'S' || $siuntinukoDydis == 'M' || $siuntinukoDydis == 'L') {
//     echo '<br>Tikrinam L';
// }
// if ($siuntinukoDydis == 'S' || $siuntinukoDydis == 'M' || $siuntinukoDydis == 'L' || $siuntinukoDydis == 'XL') {
//     echo '<br>Tikrinam XL';
// }

switch ($siuntinukoDydis) {
    case 'S':
        echo "<br>Tikriname S";
    case 'M':
        echo "<br>Tikriname M";
    case 'L':
        echo "<br>Tikriname L";
    case 'XL':
        echo "<br>Tikriname XL";
};

$zodis = 'Pernuogąbybį';

echo mb_strlen($zodis);