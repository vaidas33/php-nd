<!-- 1 Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;  -->

<div style="word-break: break-all">
    <?php
        for ($i=0; $i < 400; $i++) { 
            if ($i % 50 == 0) {
                echo "<br>";
            }
            echo "*";
        }
        echo "<br><br><br>";
    ?>
</div>
<!-- 2 Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos. -->
<?php 
$count = 0;
    for ($i=0; $i < 300; $i++) { 
        $random = rand(0, 300);
        echo "$random \n";
        if ($random > 150) {
            $count++;
        }
        if ($random > 275) {
            echo "<span style=\"color:red\">$random </span>";
        }
    }
    echo "<br><br><br>";
    echo $count;
    echo "<br><br><br>";
?>
<!-- 3 Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. -->
<?php
 $random = rand(3000, 4000);
 $array = [];
    for($i = 1; $i < $random; $i++) { 
        if ($i % 77 === 0) {
            // echo "$i".",";
            array_push($array, $i);
        } 
    } 
    echo implode(", ", $array);
    echo "<br><br><br>";
?>
<!-- 4 Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis. -->
<?php
for ($row=1; $row <= 10; $row++) { 

    for ($col=1; $col <= 10; $col++) { 
        echo "<span style=\"font-size:10px;padding:4px;\">*</span>";
    }
    echo "<br>";
}
echo "<br><br><br>";
?>
<!-- 5 Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines. -->
<?php
for ($row=1; $row <= 10; $row++) { 

    for ($col=1; $col <= 10; $col++) { 

        if ($row == $col || (11-$row) == $col){
            echo "<span style=\"font-size:10px;padding:4px;color:red;\">*</span>";
        } else {
            echo "<span style=\"font-size:10px;padding:4px;\">*</span>";
        }
        
    }
    echo "<br>";
}
echo "<br><br><br>";
?>

<!-- 6 Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui; -->
<?php
$moneta = rand(0, 1);
$count = 0;

do {
    if ($moneta == 1) {
        echo "S";
    } else {
        echo "H";
    }
} while ($moneta !== 0);
echo "<br>";
do {
    if ($moneta == 1) {
        echo "S";
    } else {
        echo "H";
        $count++;
    }
} while ($count !== 3);
echo "<br>";

$flip = '';
do {
    if ($moneta == 1) {
        echo "S";
        $flip .= 'S';
        break;
    } else {
        echo "H";
        $flip .= 'H';
    }
} while (!str_contains($flip, 'HHH'));



echo "<br><br><br>";
?>
<!-- 7 Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. -->
<?php 
$player = 'Petras';
$player2 = 'Kazys';

$scorePetras = 0;
$scoreKazys = 0;

do {
    $kazys = rand(5, 25);
    $petras = rand(10, 20);
    $scorePetras += $petras;
    $scoreKazys += $kazys;
    if ($kazys > $petras) {
        echo "Petras: $scorePetras, Kazys: $scoreKazys <br>";
        echo "Partija laimejo: $player2 <br>";
    } else {
        echo "Petras: $scorePetras, Kazys: $scoreKazys <br>";
        echo "Partija laimejo: $player <br>";
    }
} while ($scoreKazys <= 222 || $scorePetras <= 222);
    if ($scorePetras > $scoreKazys) {
        echo "Zaidima laimejo: $player";
    } else {
        echo "<b>Zaidima laimejo: $player2 </b>";
    }

    echo "<br><br><br>";
?>
<!-- 8 Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). -->
<?php
echo '<br>' . '<h3>' . 'Astunta Uzduotis' . '</h3>' . '<br>';
echo '<p>' . 'Rombas 21 x 21:' . '</p>' . '<br>';

echo "<pre>";
for ($i = 1; $i < 11; $i++) {
    for ($j = $i; $j < 11; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
        echo "&nbsp;<span style=\"padding:0px;color:rgb($colorRGB);\">*</span>";
    }
    echo "<br>";
}

for ($i = 11; $i > 0; $i--) {
    for ($j = 11 - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
        echo "&nbsp;<span style=\"padding:0px;color:rgb($colorRGB);\">*</span>";
    }
    echo "<br>";
}

echo '<p>' . 'Kvadratas 21 x 21:' . '</p>';

for ($i = 1; $i <= 21; $i++) {
    $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
    echo '<br>' . "<span style=\"padding:1px;color:rgb($colorRGB);\">*</span> ";
    for ($j = 1; $j <= 20; $j++) {
        $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
        echo "<span style=\"padding:1px;color:rgb($colorRGB);\">*</span> ";
    }
}
echo '</pre>';
?>