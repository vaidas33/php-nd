<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->
<?php
_d($_GET);

if(isset($_GET['color'])) {
    // _d($color);
    $color = $_GET['color'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = 'background-color: #<?php echo $color?>';>
    <a href="nd2.php">Pirmas</a>
    <a href="nd2.php?color=ff1234">Antras</a>
</body>
</html>