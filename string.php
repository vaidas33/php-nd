<?php
// 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

$vardas = "Jonas";
$pavarde = "Jonaitis";

if (strlen($vardas) > strlen($pavarde)) {
    echo $vardas;
} elseif (strlen($pavarde) > strlen($vardas)) {
    echo $pavarde;
} else {
    echo "Stringai vienodo ilgio";
}

echo "<hr>";

// 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

$vardas = "Jonas";
$pavarde = "Jonaitis";

echo strtoupper($vardas);
echo "<br>";
echo strtolower($pavarde);
echo "<hr>";

// 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas = "Jonas";
$pavarde = "Jonaitis";

$raides = $vardas[0].$pavarde[0];
echo $raides;
echo "<hr>";

// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas = "Jonas";
$pavarde = "Jonaitis";

// $raides = substr("Jonas", -3);
$raides = substr(($vardas), -3).substr(($pavarde), -3);

echo $raides;
echo "<hr>";

// 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$name = "An American in Paris";

$pakeistasName = str_replace("An American in Paris", "*n *meric*n in P*ris", $name);

echo $pakeistasName;
echo "<hr>";

// 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$name = "An American in Paris";

// $count = count_chars($name, 0);
// $acount = $count[ord("a")];
// $Acount = $count[ord("A")];
// echo $acount + $Acount;

$count1 = substr_count($name,"a");
$count2 = substr_count($name,"A");

$count = $count1 + $count2;
echo $count;
echo "<hr>";

// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$name = "An American in Paris";
$name2 = "Breakfast at Tiffany's";
$name3 = "2001: A Space Odyssey";
$name4 = "It's a Wonderful Life";

$vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

$remove = str_replace($vowels, "", $name);
$remove2 = str_replace($vowels, "", $name2);
$remove3 = str_replace($vowels, "", $name3);
$remove4 = str_replace($vowels, "", $name4);

echo "$remove <br>";
echo "$remove2 <br>";
echo "$remove3 <br>";
echo "$remove4 <br>";
echo "<hr>";

// 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

$name = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $name;
echo "<br>";
echo (int)filter_var($name, FILTER_SANITIZE_NUMBER_INT);
echo "<hr>";

// 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$name = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$zodziai = explode(' ', $name);
echo count($zodziai);
echo "<br>";
print_r($zodziai);

$suma = 0;

for ($i = 0; $i < count($zodziai); $i++) {
    if (mb_strlen($zodziai[$i]) <= 5) { //mb multibaitine
        $suma++;
    }
}

echo $suma;
echo "<br>";
echo "<hr>";

// 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

$raides = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
$ilgis = substr(str_shuffle($raides), -3);

echo $ilgis;



// function generateRandomString($length = 3) {
//     $characters = 'abcdefghijklmnopqrstuvwxyz';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 3)];
//     }
//     return $randomString;
// }
// echo generateRandomString();