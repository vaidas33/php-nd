<?php
require __DIR__.'/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vardas = $_POST['vardas'] ?? '';
    $pavarde = $_POST['pavarde'] ?? '';
    $kodas = $_POST['kodas'] ?? 0;
    $kodas = (int) $kodas;
    create($vardas, $pavarde, $kodas); //sukuria
    header('Location: '.URL.'saskaitos.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Saskaitos sukurimas</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="<?= URL ?>saskaitos.php">Saskaitu sarasas</a>
    <a href="<?= URL ?>create.php">Saskaitos kurimas</a>
    <a href="<?= URL ?>add.php">Prideti lesas</a>
    <a href="<?= URL ?>delete.php">Nuskaiciuoti lesas</a>
    </div>

    <form action="<?= URL ?>create.php" method="post">
    Vardas<input type="text" name="vardas">
    Pavarde<input type="text" name="pavarde">
    Asmens kodas<input type="text" name="kodas">
    <button type="submit">Create</button>
    </form>

</body>
</html>