<?php
// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo "<br><h3>Pirma Uzduotis</h3><br>";

function tekstas($tekstas)
{
    return "<h1>$tekstas</h1>";
}
echo tekstas('vienas');


// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
echo "<br><h3>Antra Uzduotis</h3><br>";

function tagoNumberis($tekstas, $numeris)
{
    return "<h$numeris>$tekstas</h$numeris>";
}
echo tagoNumberis('labas', rand(1,6));

// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();
echo "<br><h3>Trecias Uzduotis</h3><br>";

$string = md5(time());
echo $string;
$pattern = '/[0-9]+/';

function skaiciai($tekstas)
{
    return ("<h1>$tekstas</h1>");
}
$result = preg_replace_callback($pattern, function($matches){return skaiciai($matches[0]);}, $string);
print_r($result); //raides

// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo "<br><h3>Ketvirta Uzduotis</h3><br>";

function dalyba($num)
{
    // print_r($num);
    $count = 0;

    if (!is_int($num)) {
        return 'Paduotas ne int tipo kintamasis';
    } else {
        for ($i=2; $i < $num; $i++) { 
            if ($num % $i === 0) {
                $count++;
                echo $i . '<br>'; // paziureti deviderius
            }
        }
        return $count;
    }
}

echo dalyba(100);

// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
echo "<br><h3>Penkta Uzduotis</h3><br>";

//usort skaiciuoja dalikliu skaiciu be liekanos ir pagal tai sortina


echo "<br><h3>Septintas Uzduotis</h3><br>";

// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

// gmp_prob_prime patikrina ar skaicius pirminis !=2 jei nera 2 tada toliau
// array_spilce($array, -3) ima ir tikrina paskutinius tris is masyvo