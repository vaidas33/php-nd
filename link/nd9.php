<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
<?php
$color = '#000';
$rand = rand(3,10);
$letters = range('A','J');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = '#fff';
}
//---------- Visi headeriai iki sitos linijos -------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 Uzdavinys</title>
</head>
<body style= "background: <?= $color ?>;">

<?php if ($_SERVER['REQUEST_METHOD'] !== 'POST') : ?>

    <form action="" method="post">
    <?php foreach($letters as $key => $letter) : ?>
        <?php if($key+1 > $rand) break ?>
        <span style ="color:pink;">
            <?= $letter ?>
        </span>
        <input type="checkbox" name="letters[]" value="<?= $letter ?>">
    <?php endforeach ?>
        <button type="submit" name="mmg">MYGTUKAS</button>
    </form>

<?php else: ?>

    <h1><?= count($_POST['letters']) ?></h1>
    <?php _d($_POST) ?>

<?php endif ?>

</body>
</html>