<?php
require __DIR__.'/bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Bankas</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="<?= URL ?>saskaitos.php">Saskaitu sarasas</a>
    <a href="<?= URL ?>create.php">Saskaitos kurimas</a>
    <a href="<?= URL ?>add.php">Prideti lesas</a>
    <a href="<?= URL ?>delete.php">Nuskaiciuoti lesas</a>
    </div>
</body>
</html>