<!-- 1 Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį : -->
<?php
    $vardas = 'Vaidas';
    $pavarde = 'Dačinskas';
    $gymimoMetai = '11-05-1995';
    $metai = date("Y-m-d");
    $amzius = date_diff(date_create($metai), date_create($gymimoMetai));

    echo "Aš esu  $vardas $pavarde. Man yra ".$amzius->format('%y')." metai.";
    echo '<br><br><br>';
?>
<!-- 2 Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->
<?php
    $value1 = rand(0, 4);
    $value2 = rand(0, 4);
    
    echo "Pirmas skaičius: $value1 <br>";
    echo "Antras skaičius: $value2 <br>";

    if ($value1 == 0 || $value2 == 0) {
        echo 'Pabaiga';
        // return;
    } elseif ($value1 > $value2) {
        echo round(($value1 / $value2), 2);
    } elseif ($value2 > $value1) {
        echo round(($value2 / $value1), 2);
    } else {
        echo 'Abi reiksmės lygios';
    }
    echo '<br><br><br>';
?>
<!-- 3 Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. -->
<?php
    $num1 = rand(0, 25);
    $num2 = rand(0, 25);
    $num3 = rand(0, 25);

    echo "Pirmas skaičius: $num1 <br>";
    echo "Antras skaičius: $num2 <br>";
    echo "Trecia skaičius: $num3 <br>";

    if ($num1 > $num2 && $num1 < $num3) {
        echo $num1;
    } elseif ($num1 > $num3 && $num1 < $num2) {
        echo $num1;
    } elseif ($num2 > $num3 && $num2 < $num1) {
        echo $num2;
    } elseif ($num2 > $num1 && $num2 < $num3) {
        echo $num2;
    } elseif ($num3 > $num2 && $num3 < $num1) {
        echo $num3;
    } elseif ($num3 > $num1 && $num3 < $num2) {
        echo $num3;
    } else {
        echo 'du vienodi';
    }
    echo '<br><br><br>';
?>
<!-- 4 Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  -->
<?php
    $krastine1 = rand(1, 10);
    $krastine2 = rand(1, 10);
    $krastine3 = rand(1, 10);

    echo "Krasinės: $krastine1, $krastine2, $krastine3 <br>";

    if ($krastine1 > ($krastine2 + $krastine3)) {
        echo 'Trikampio sudaryti negalima';
    } elseif ($krastine2 > ($krastine1 + $krastine3)) {
        echo 'Trikampio sudaryti negalima';
    } elseif ($krastine3 > ($krastine2 + $krastine1)) {
        echo 'Trikampio sudaryti negalima';
    } else {
        echo 'Trikampi sudaryti galima';
    }
    echo '<br><br><br>';
?>
<!-- 5 Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). -->
<?php
    $kint1 = rand(0, 2);
    $kint2 = rand(0, 2);
    $kint3 = rand(0, 2);
    $kint4 = rand(0, 2);
    $nuliai = 0;
    $vienetai = 0;
    $dvejetai = 0;
    
    echo "Skaičiai: $kint1, $kint2, $kint3, $kint4";

    if($kint1 == 0) {
        ++$nuliai;
    } elseif ($kint1 == 1) {
        ++$vienetai;
    } elseif ($kint1 == 2) {
        ++$dvejetai;
    }


    if($kint2 == 0) {
        ++$nuliai;
    } elseif ($kint2 == 1) {
        ++$vienetai;
    } elseif ($kint2 == 2) {
        ++$dvejetai;
    }

    if($kint3 == 0) {
        ++$nuliai;
    } elseif ($kint3 == 1) {
        ++$vienetai;
    } elseif ($kint3 == 2) {
        ++$dvejetai;
    }

    if($kint4 == 0) {
        ++$nuliai;
    } elseif ($kint4 == 1) {
        ++$vienetai;
    } elseif ($kint4 == 2) {
        ++$dvejetai;
    }
    echo "<br> nuliu: $nuliai";
    echo "<br> vienetu: $vienetai";
    echo "<br> dvejetu: $dvejetai";
    echo '<br><br><br>';
?>
<!-- 6 Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3> -->
<?php
    $random = rand(1, 6);

    echo "H tago skaicius: ";
    echo '<h' . $random . '>' . $random . '</h' . $random . '>';
    echo '<br><br><br>';
?>
<!-- 7 Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.  -->
<?php
    $num1 = rand(-10, 10);
    $num2 = rand(-10, 10);
    $num3 = rand(-10, 10);

    if ($num1 < 0) {
        echo '<span style="color:green">'.$num1.',</span>';
    } elseif ($num1 == 0) {
        echo '<span style="color:red">'.$num1.',</span>';
    } elseif ($num1 > 0) {
        echo '<span style="color:blue">'.$num1.',</span>';
    }

    if ($num2 < 0) {
        echo '<span style="color:green">'.$num2.',</span>';
    } elseif ($num2 == 0) {
        echo '<span style="color:red">'.$num2.',</span>';
    } elseif ($num2 > 0) {
        echo '<span style="color:blue">'.$num2.',</span>';
    }

    if ($num3 < 0) {
        echo '<span style="color:green">'.$num3.'</span>';
    } elseif ($num3 == 0) {
        echo '<span style="color:red">'.$num3.'</span>';
    } elseif ($num3 > 0) {
        echo '<span style="color:blue">'.$num3.'</span>';
    }
    echo '<br><br><br>';
?>
<!-- 8 Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000. -->
<?php
    $zvakes = rand(5, 3000);

    $proc3 = ($zvakes * 3 / 100);
    $proc4 = ($zvakes * 4 / 100);

    echo "Kiekis: $zvakes <br>";

    if ($zvakes > 1000) {
        echo 'Kaina: '.($zvakes - $proc3).' EUR';
    } elseif ($zvakes > 2000) {
        echo 'Kaina: '.($zvakes - $proc4).' EUR';
    } else {
        echo "Kaina $zvakes EUR";
    }
    echo '<br><br><br>';
?>
<!-- 9 Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus. -->
<?php
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $num3 = rand(0, 100);

    echo "Reiksmes: $num1, $num2, $num3 <br>";
    $vidurkis = (($num1 + $num2 + $num3) / 3);
    echo 'Vidurkis: '.round($vidurkis);
    echo '<br>';

    $suma = 0;
    $kiekis = 0;

    if ($num1 < 10 || $num1 > 90) {
        $suma += $num1;
        $kiekis++;
    }

    if ($num2 < 10 || $num2 > 90) {
        $suma += $num2;    
        $kiekis++; 
    }

    if ($num3 < 10 || $num3 > 90) {
        $suma += $num3;    
        $kiekis++;
    }

    if ($suma == 0) {
        echo "Dalyba is 0 negalima";
    } else {
    echo 'Vidurkis2:'.($suma / $kiekis);
    }
    echo '<br><br><br>';
?>
<!-- 10 Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių. -->
<?php

    // $skaicius = new DateTime();
    // $skaicius->setTime(mt_rand(0, 23), mt_rand(0, 59), mt_rand(0, 59));
    // $sekundes = rand(0, 300);

    // $laikas = $skaicius->format('H:i:s');
    
    // echo "Laikrodis: $laikas <br>";
    // echo "Sekundes: $sekundes <br>";

    $valandos = rand(0, 23);
    $minutes = rand(0, 59);
    $sekundes = rand(0, 59);
    $papildomosSekundes = rand(0, 300);

    echo "Laikrodis: $valandos : $minutes : $sekundes <br>";
    echo "Sekundes: $papildomosSekundes <br>";

    $suma = $sekundes + $papildomosSekundes;
    echo $suma;

    if ($suma >= 60) {
        
    }

?>
