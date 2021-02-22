<!-- 1 Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25. -->
<?php
// $masyvas = [];
// foreach (range(0,29) as $number) {
//     $number = rand(5,25);
//     echo "$number, ";
//     array_push($masyvas, $number);
// }
// echo "<pre>";
// print_r ($masyvas);
// echo "<br><br><br>";

echo "Pirmas -----------------------------------------------<br>";
$masyvas = [];
foreach (range(0,29) as $number) {
    $number = rand(5,25);
    // echo "$number, ";
    $masyvas[] = $number;
}
echo implode(", ", $masyvas);
echo "<pre>";
print_r ($masyvas);
echo "<br><br><br>";
echo "</pre>";
echo "<hr>";
?>
<!-- 2 Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
Raskite didžiausią masyvo reikšmę;
Suskaičiuokite visų reikšmių sumą;
Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą; -->
<?php
echo "Antras -----------------------------------------------<br>";
$masyvas = [];
$naujasMasyvas = [];
$naujasMasyvas2 = [];
$count = 0;
$countSuma = 0;
$suma = 0;
foreach (range(0,29) as $index => $number) {
    $number = rand(5,25);
    $masyvas[] = $number;
    $countSuma++;
    $suma += $countSuma;

    // $naujasMasyvas[] = $number - $index;
    // $naujasMasyvas = $masyvas;
    $naujasMasyvas[$index] = $masyvas[$index] - $index;

    if ($number > 10) {
        $count++;
    }
}
echo implode(", ", $masyvas); // istrinam paskutini kableli
echo "<br>";
echo $count; // daugiau nei 10
echo "<br>";
echo max($masyvas); // didziausia reiksme
echo "<br>";
echo $suma; // masyvo reiksmiu suma
echo "<br>";
echo implode(", ", $naujasMasyvas); // 1 masyvo reiksmes - tos reiksmes indeksas;
echo "<br>";
// echo "<pre>";
// print_r ($naujasMasyvas);
echo "<br><br><br>";

for ($i = 0; $i < 10; $i++) {
    $random = rand(5,25);
    array_push($naujasMasyvas, $random);
}
// echo "<pre>";
// print_r ($naujasMasyvas);

$poriniai = [];
$neporiniai = [];

foreach ($naujasMasyvas as $value){
    if ($value % 2 == 0){
        echo $value.',';
        $poriniai[] = $value;
    } else {
        $neporiniai[] = $value;
    }
}
// echo "<pre>";
// print_r ($neporiniai);

if ($poriniai > 15) {
    $poriniai[] = 0;
}

echo "<br>";
$min = 0;

echo "<pre>";
print_r ($naujasMasyvas);

for ($i = 0; $i <= count($naujasMasyvas); $i++){
    if ($naujasMasyvas[$i] > 10){
        // $min = $naujasMasyvas[$i];
        $min = $i;
        break;
    }
    }
    echo "Maziausias skaicius masyve: $min";


for ($i = 0; $i < count($naujasMasyvas); $i++) {
    if ($i % 2 == 0) {
        unset($naujasMasyvas[$i]);
    } 
}

echo "<pre>";
print_r ($naujasMasyvas);
echo "<hr>";
?>

<!-- 3 Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės. -->
<?php
echo "Trecias -----------------------------------------------<br>";
$masyvas = range("A", "D");
$raides = [];
// shuffle($masyvas);
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

for ($i=0; $i < 200; $i++) { 
    $raides[] = $masyvas[rand(0,3)];
    if ($raides[$i] == "A") {
        $countA++;
    } elseif ($raides[$i] == "B") {
        $countB++;
    } elseif ($raides[$i] == "C") {
        $countC++;
    } else {
        $countD++;
    }
} 

echo 'A raides: '. $countA;
echo '<br>B raides: '. $countB;
echo '<br>C raides: '. $countC;
echo '<br>D raides: '. $countD;
echo "<pre>";
// print_r ($raides);
echo "<hr>";
?>
<!-- 4 Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. -->

<?php 
echo "Ketvirtas -----------------------------------------------<br>";
$masyvas = range("A", "D");
$raides = [];
// shuffle($masyvas);
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

for ($i=0; $i < 200; $i++) { 
    $raides[] = $masyvas[rand(0,3)];
    if ($raides[$i] == "A") {
        $countA++;
    } elseif ($raides[$i] == "B") {
        $countB++;
    } elseif ($raides[$i] == "C") {
        $countC++;
    } else {
        $countD++;
    }
} 


sort($raides);
// print_r ($raides);  // Raides is eiles, abecele
echo "<hr>";
?>
<!-- 5 Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote. -->
<?php
echo "Penktas -----------------------------------------------<br>";
$masyvas = range("A", "D");
$raides = [];

for ($i=0; $i < 200; $i++) { 
    $raides[] = $masyvas[rand(0,3)];
} 

$masyvas2 = range("A", "D");
$raides2 = [];

for ($i=0; $i < 200; $i++) { 
    $raides2[] = $masyvas2[rand(0,3)];
} 

$masyvas3 = range("A", "D");
$raides3 = [];

for ($i=0; $i < 200; $i++) { 
    $raides3[] = $masyvas3[rand(0,3)];
} 

// $result = array_merge($raides, $raides2, $raides3);

$bendrasMasyvas = [];
for ($i=0; $i < 200; $i++) { 
    $sum = $raides[$i] . $raides2[$i] . $raides3[$i];
    array_push($bendrasMasyvas, $sum);
} 
// print_r($bendrasMasyvas);

$unikalus = array_count_values($bendrasMasyvas); //kiek tokiu paciu
$count = 0;
foreach ($unikalus as $index => $value) {
    if ($value === 1) {
        echo "Unikaslus yra: $index <br>";
        $count++;
    }
}
echo $count.' Unikalus<br>';
print_r ($unikalus);
echo "<hr>";
?>
<!-- 6 Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). -->
<?php
echo "Sestas -----------------------------------------------<br>";
$masyvas = [];

for ($i=0; $i < 100; $i++) { 
    $skaiciai = rand(100, 999);
    // $unikalus = array_unique($masyvas);
    if (!in_array($skaiciai, $masyvas)) { // jei nera masyve
        array_push($masyvas, $skaiciai);
    } else {
        $skaiciai = rand(100, 999);
        array_push($masyvas, $skaiciai);
    }
}

$masyvas2 = [];

for ($i=0; $i < 100; $i++) { 
    $skaiciai2 = rand(100, 999);
    // $unikalus = array_unique($masyvas2);
    if (!in_array($skaiciai2, $masyvas2)) { // jei nera masyve
        array_push($masyvas2, $skaiciai2);
    } else {
        $skaiciai2 = rand(100, 999);
        array_push($masyvas2, $skaiciai2);
    }
}

echo "<pre>";
// $unikalus = array_count_values($masyvas);
print_r($masyvas);
echo "<hr>";
?>
<!-- 7  Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. -->
<?php
echo "Septintas -----------------------------------------------<br>";
$masyvas = [];

for ($i=0; $i < 100; $i++) { 
    $skaiciai = rand(100, 999);
    // $unikalus = array_unique($masyvas);
    if (!in_array($skaiciai, $masyvas)) { // jei nera masyve
        array_push($masyvas, $skaiciai);
    } else {
        $skaiciai = rand(100, 999);
        array_push($masyvas, $skaiciai);
    }
}

$masyvas2 = [];

for ($i=0; $i < 100; $i++) { 
    $skaiciai2 = rand(100, 999);
    // $unikalus = array_unique($masyvas2);
    if (!in_array($skaiciai2, $masyvas2)) { // jei nera masyve
        array_push($masyvas2, $skaiciai2);
    } else {
        $skaiciai2 = rand(100, 999);
        array_push($masyvas2, $skaiciai2);
    }
}

echo "<pre>";
// $unikalus = array_count_values($masyvas);
// print_r($masyvas);

$bendrasMasyvas = [];

for ($i=0; $i < count($masyvas); $i++) { 
    if(in_array($masyvas[$i], $masyvas2)) { // jei yra masyve
        continue;
    } else {
        array_push($bendrasMasyvas, $masyvas[$i]);
    }
}

print_r($bendrasMasyvas);
echo "<hr>";

// 8 Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
echo "Astuntas -----------------------------------------------<br>";

$pasikartojanciosReiksmes = [];
for ($i=0; $i < count($masyvas); $i++) { 
    if (in_array($masyvas[$i], $masyvas2)) {
        // $pasikartojanciosReiksmes = array_unique($masyvas);
        array_push($pasikartojanciosReiksmes, $masyvas[$i]);
    }
}
print_r($pasikartojanciosReiksmes);
echo "<hr>";

// 9 Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
echo "Devintas -----------------------------------------------<br>";
for ($i=0; $i < count($masyvas); $i++) { 
    $mixas = array_combine($masyvas, $masyvas2);
}
print_r($mixas);

// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
echo "Desimtas -----------------------------------------------<br>";
$masyvas = [];
for ($i=0; $i < 10; $i++) { 
    if ($i < 2) {
        $random = rand(5, 25);
        array_push($masyvas, $random);
    }
    if ($i == 2) {
        $trecias = $masyvas[0] + $masyvas[1];
        array_push($masyvas, $trecias);
    }
    if ($i == 3) {
        $trecias = $masyvas[1] + $masyvas[2];
        array_push($masyvas, $trecias);
    }
    if ($i == 4) {
        $trecias = $masyvas[2] + $masyvas[3];
        array_push($masyvas, $trecias);
    }
    if ($i == 5) {
        $trecias = $masyvas[3] + $masyvas[4];
        array_push($masyvas, $trecias);
    }
    if ($i == 6) {
        $trecias = $masyvas[4] + $masyvas[5];
        array_push($masyvas, $trecias);
    }
    if ($i == 7) {
        $trecias = $masyvas[5] + $masyvas[6];
        array_push($masyvas, $trecias);
    }
    if ($i == 8) {
        $trecias = $masyvas[6] + $masyvas[7];
        array_push($masyvas, $trecias);
    }
    if ($i == 9) {
        $trecias = $masyvas[7] + $masyvas[8];
        array_push($masyvas, $trecias);
    }

}
print_r($masyvas);