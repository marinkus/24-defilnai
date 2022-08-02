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

