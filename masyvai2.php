<!-- Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25. -->
<?php
echo "<br><h3>Pirma Uzduotis</h3><br>";

$masyvas = [];
foreach (range(1,10) as $index => $_) {
    foreach (range(1,5) as $index2 => $_) {
        $masyvas[$index][$index2] = rand(5,25);
    }
}
echo "<pre>";
print_r($masyvas);

// Naudodamiesi 1 uždavinio masyvu:
echo "<br><h3>Antra Uzduotis a)</h3><br>";
// Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$counter = 0;
foreach ($masyvas as $mazas_masyvas) {
    foreach ($mazas_masyvas as $reiksmes) {
        if ($reiksmes > 10)
        $counter++;
    }
}
echo $counter;

echo "<br><h3>Antra Uzduotis b)</h3><br>";
// Raskite didžiausio elemento reikšmę;

$max = null;
foreach ($masyvas as $mazas_masyvas) {
    foreach ($mazas_masyvas as $reiksmes) {
        if ($reiksmes >= $max) {
            $max = $reiksmes;
        }
    }
}
echo $max;

echo "<br><h3>Antra Uzduotis c)</h3><br>";
// Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$indexSuma = [];

foreach ($masyvas as $key => $antro_lygio_masyvas) {
    foreach ($antro_lygio_masyvas as $key2 => $value) {
        if (!isset($indexSuma[$key2])) {
            array_push($indexSuma, $value);
        } else {
            $indexSuma[$key2]+=$value;
        }
    }
}
print_r($indexSuma);
// print_r($antro_lygio_masyvas);

echo "<br><h3>Antra Uzduotis d)</h3><br>";
// Visus masyvus “pailginkite” iki 7 elementų

foreach ($masyvas as $key => $antro_lygio_masyvas) {
    foreach (range(1,7) as $value) {
        $masyvas[$key][$value] = rand(5,25);
    }
}
_dc($masyvas);

echo "<br><h3>Antra Uzduotis e)</h3><br>";
// Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

$naujasMasyvas = [];

foreach ($masyvas as $antro_lygio_masyvas) {
    $suma = 0;
    foreach ($antro_lygio_masyvas as $value) {
        $suma += $value;
    }
    $naujasMasyvas[] = $suma;
}
print_r($naujasMasyvas);


echo "<br><h3>Trecia Uzduotis</h3><br>";
// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$masyvas3 = [];

foreach (range(1,10) as $index => $value) {
    foreach (range(2,rand(2,20)) as $index2 => $value2) {
        $masyvas3[$index][$index2] = chr(rand(65,90)); // raides nuo A-Z (random)
    }
}

foreach ($masyvas3 as &$antro_lygio_masyvas) {
    sort($antro_lygio_masyvas);
}

unset($antro_lygio_masyvas); // pakeicia pagrindinio masyvo reiksmes
print_r($masyvas3);


echo "<br><h3>Ketvirta Uzduotis</h3><br>";
// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.

sort($masyvas3);
_dc($masyvas3);


echo "<br><h3>Penkta Uzduotis</h3><br>";
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

$masyvas = [];

for ($i = 0; $i < 30; $i++) {
    $randId = rand(1,1000000);
    $randPlace = rand(0,100);
    if(!in_array($randId, $masyvas)){
    $masyvas[$i] = ['user_id' => $randId, 'place_in_row' => $randPlace];
    } else {
        $randId = rand(1,1000000);
        if(!in_array($randId,$masyvas)){
        $masyvas[$i] = ['user_id' => $randId, 'place_in_row' => $randPlace];
        }
    }
}
_dc($masyvas);




echo "<br><h3>Sestas Uzduotis</h3><br>";
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

// Didejimo pagal id
$masyvasId = [];

foreach ($masyvas as $id) {
    foreach ($id as $key => $value) {
        // if(!isset($masyvasId[$key])){
        //     $masyvasId[$key] = [];
        // }
        $masyvasId[$key][] = $value;
    }
}

$orderby = "user_id";

array_multisort($masyvasId[$orderby],SORT_REGULAR,$masyvas);

print_r($masyvas);

// Mazejimo pagal place in row
$masyvasPlace = [];

foreach($masyvas as $place){
    foreach($place as $key=>$value){
        // if(!isset($masyvasPlace[$key])){
        //     $masyvasPlace[$key] = [];
        // }
        $masyvasPlace[$key][] = $value;
    }
}

$orderby = "place_in_row"; //change this to whatever key you want from the array

array_multisort($masyvasPlace[$orderby],SORT_DESC,$masyvas);

print_r($masyvas);


echo "<br><h3>Septinta Uzduotis</h3><br>";
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.


for ($i = 0; $i < count($masyvas); $i++) {
    $randName = '';
    $randSurname = '';
    $nameRaides = rand(5,15);
    $surnameRaides = rand(5,15);
    while (strlen($randName) <= $nameRaides) {
        $randName .= chr(rand(97,122));
    }
    while (strlen($randSurname) <= $surnameRaides) {
        $randSurname .= chr(rand(97,122));
    }
    $masyvas[$i]['name'] = $randName;
    $masyvas[$i]['surname'] = $randSurname;
}
_dc($masyvas);

echo "<br><h3>Astunta Uzduotis</h3><br>";
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

$masyvas = [];
for ($i=0; $i < 10; $i++) { 
    $masyvas[$i] = [];
}

for($i = 0; $i < count($masyvas); $i++) {
    $skaicius = rand(0, 5);
    if ($skaicius === 0) {
        for ($j = 0; $j < count($masyvas); $j++) {
            $masyvas[$i] = rand(0, 10);
        }
    } else {
        for ($a = 0; $a < $skaicius; $a++) {
            $masyvas[$i][$a] = rand(0, 5);
        }
    }
}
print_r($masyvas);

echo "<br><h3>Devinta Uzduotis</h3><br>";
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

$sum = 0;
foreach ($masyvas as $value) {
    if (is_array($value)) {
        $sum += array_sum($value);
    } else {
        $sum += $value;
    }
}
echo $sum.'<br>';

usort($masyvas, function ($a, $b) {
    if (is_array($a)) {
        $a = array_sum($a);
    }
    if (is_array($b)) {
        $b = array_sum($b);
    }
    return $a <=> $b;
});

print_r($masyvas);



echo "<br><h3>Desimta Uzduotis</h3><br>";
//Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.

$tri = [];

$value = ['#','%','+','*','@','裡'];

foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 10) as $index2 => $val2) {
        $tri[$index1][$index2]['value'] = $value[rand(0,5)];
        $tri[$index1][$index2]['color'] =
        $randomColor = "#" . substr(md5(rand()), 0, 6);
        //'#'.(dechex(rand(0,255))).(dechex(rand(0,255))).(dechex(rand(0,255)));
    }
}


foreach($tri as $row) {
    echo '<div>';
    foreach($row as $el) {
        echo '<span style="display:inline-block; width: 20px;color:'.$el['color'].';">'.$el['value'].'</span>';
    }
    echo '</div>';
}