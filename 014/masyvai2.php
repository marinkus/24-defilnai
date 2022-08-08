<style>
    .square {
        width: 10%;
        display: flex;
        flex-wrap: wrap;
    }
</style>
<h2>Homework: Masyvai 2</h2>

<?php

echo '<pre>';
// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
echo '<br><br>Uzduotis nr. 1 ----- <br><br>';

$array = [];

foreach (range(0, 9) as $value) {
    $arr = [];
    foreach (range(0, 4) as $value) {
        $arr[] = rand(5, 25);
    }
    $array[] = $arr;
}

print_r($array);

// 2. Naudodamiesi 1 uždavinio masyvu:
// 2a Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '<br><br>Uzduotis nr. 2a ----- <br><br>';
$count = 0;

foreach ($array as $arr) {
    foreach($arr as $num) {
        if ($num > 10) {
            $count++;
        }
    }
}
echo $count;

// 2b Raskite didžiausio elemento reikšmę;
echo '<br><br>Uzduotis nr. 2b ----- <br><br>';

$maxValue = 0;

foreach ($array as $arr) {
    foreach($arr as $num) {
        if ($num > $maxValue) {
            $maxValue = $num;
        }
    }
}
echo $maxValue;

// 2c Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '<br><br>Uzduotis nr. 2c ----- <br><br>';

$sumOfSameIndex = range(0, 4);

foreach ($array as $index => $arr) {
    foreach($arr as $ind => $num) {
        $sumOfSameIndex[$ind] += $num;
    }
}
print_r($sumOfSameIndex);

// 2d Visus masyvus “pailginkite” iki 7 elementų
echo '<br><br>Uzduotis nr. 2d ----- <br><br>';

foreach($array as &$arr) {
    $arr[]=rand(5, 25);
    $arr[]=rand(5, 25);
}
unset($arr);

print_r($array);

// 2e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai
echo '<br><br>Uzduotis nr. 2e ----- <br><br>';

$arraySum = range(0, 9);

foreach($array as $ind => $arr) {
    foreach ($arr as $index => $val) {
        $arraySum[$ind] += $val;
    }
}

print_r($arraySum);

// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
echo '<br><br>Uzduotis nr. 3 ----- <br><br>';

$arrayOfLetters = [];

foreach(range(0, 9) as $arr) {
    $masyvas = [];
    foreach(range(0, rand(2, 20)) as $val) {
        $masyvas[]=chr(rand(65,90));
    }
    $arrayOfLetters[] = $masyvas;
}

foreach($arrayOfLetters as &$arr) {
    sort($arr);
}
unset($arr);

print_r($arrayOfLetters);

// 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
echo '<br><br>Uzduotis nr. 4 ----- <br><br>';

function func($a, $b)
{
    return count($a) <=> count($b);
}
function func2($a, $b)
{

    if ( in_array('K', $a) && in_array('K', $b)) {
        return 0;
    }
    return ((in_array('K', $a) && !in_array('K', $b)) || (!in_array('K', $a) && in_array('K', $b))) ? 1 : -1;
}

usort($arrayOfLetters, 'func');
usort($arrayOfLetters, 'func2');
print_r($arrayOfLetters);


// 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
echo '<br><br>Uzduotis nr. 5 ----- <br><br>';

$keys = ['user_id', 'place_in_row', 'name', 'surname'];
$users = [];

foreach (range(0, 29) as $user) {
    foreach($keys as $key) {
        if ($key == 'user_id') {
            $users[$user][$key] = rand(0, 1000000);
        } elseif ($key == 'place_in_row') {
            $users[$user][$key] = rand(1, 100);
        }
    }
}

print_r($users);




// 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
echo '<br><br>Uzduotis nr. 6 ----- <br><br>';
function idSort($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
}
function placeSort($a, $b) {
    return $a['place_in_row'] <=> $b['place_in_row'];
}

echo 'Sorted by ID<br>';
usort($users, 'idSort');
print_r($users);
echo 'Sorted by place_in_row<br>';
usort($users, 'placeSort');
print_r($users);

// 7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
echo '<br><br>Uzduotis nr. 7 ----- <br><br>';

$characters = explode(' ', 'a b c d e f g h i j k l m n o p q r s t u v w x y z');

foreach (range(0, 29) as $user) {
    foreach ($keys as $key) {
        if ($key == 'name') {
            $randomString = '';
            for ($i = 0; $i < rand(5, 15); $i++) {
                $randomString = $randomString . $characters[rand(0, count($characters) - 1)];
            }
            $users[$user][$key] = ucfirst($randomString);
        }
        if ($key == 'surname') {
            $randomString = '';
            for ($i = 0; $i < rand(5, 15); $i++) {
                $randomString = $randomString . $characters[rand(0, count($characters) - 1)];
            }
            $users[$user][$key] = ucfirst($randomString);
        }
    }
}

// foreach ($users as &$user) {
//     $randomString = '';
//     for ($i = 0; $i < rand(5, 15); $i++) {
//         $randomString = $randomString . $characters[rand(0, count($characters) - 1)];
//     $user['name'] = ucfirst($randomString);
// }
// $randomString = '';
// for ($i = 0; $i < rand(5, 15); $i++) {
//     $randomString = $randomString . $characters[rand(0, count($characters) - 1)];
// $user['surname'] = ucfirst($randomString);
// }
// }
print_r($users);


// 8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
echo '<br><br>Uzduotis nr. 8 ----- <br><br>';

$arrayOf10 = [];
foreach(range(0, 9) as $arr) {
    $number = rand(0, 5);
    foreach(range(0, $number) as $_) {
        if ($number !== 0) {
            $arrayOf10[$arr][] = rand(0, 10);
        } else {
            $arrayOf10[] = rand(0, 10);
        }
    }
}
print_r($arrayOf10);



// 9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
echo '<br><br>Uzduotis nr. 9 ----- <br><br>';

$sum = 0;
foreach($arrayOf10 as $_) {
    if (is_numeric($_)) {
        $sum += $_;
    } else {
        foreach($_ as $num) {
            $sum += $num;
        }
    }
}
echo "Suma: $sum <br>";

function sortArray($a, $b) {
    return (!is_numeric($a) ? array_sum($a) : $a) <=> (!is_numeric($b) ? array_sum($b) : $b);
}
usort($arrayOf10, 'sortArray');
print_r($arrayOf10);



// 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
echo '<br><br>Uzduotis nr. 10 ----- <br><br>';

$zenklai = ['#', '%', '+', '*', '@', '裡'];
$masyvas10 = [];
foreach(range(0, 9) as $arr) {
    foreach(range(0, 1) as $_) {
        $masyvas10[$arr]['value'] = $zenklai[rand(0, 5)];
        $masyvas10[$arr]['color'] = '#' . str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);;
    }
}

print_r($masyvas10);
?>
<div class='square'>
    <?php
for ($i = 0; $i < 10; $i++) {
foreach ($masyvas10 as $symbol) {
    ?>
    <p style="font-size: 12px; color: <?php echo $symbol['color'] ?>"><?php echo $symbol['value']?></p>
<?php
}
}
?>
</div>