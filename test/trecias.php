<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->

<?php
_d($_GET);
if(isset($_GET['color'])){
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
<body style='background-color:#<?= $color ?>;'>
    <a href="?">pirmas</a>
    <a href="?color=ff1234">antras</a>

    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">Siusti</button>
    </form>
</body>
</html>