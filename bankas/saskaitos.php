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
    <title>Saskaitos</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="<?= URL ?>saskaitos.php">Saskaitu sarasas</a>
    <a href="<?= URL ?>create.php">Saskaitos kurimas</a>
    </div>

    <ul>
    <?php foreach(readData() as $saskaita) : ?>
        <li>
        <span>Vardas: <?= $saskaita['vardas'] ?></span>
        <span>Pavardė: <?= $saskaita['pavarde'] ?></span>
        <span>Sąskaitos numeris: <?= $saskaita['id'] ?></span>
        <span>Asmens kodas: <?= $saskaita['kodas'] ?></span>
        <span>Balansas: <?= $saskaita['suma'] ?></span>

        <form action="<?= URL ?>delete.php" method="post">
        <input type="hidden" name="id" value="<?= $saskaita['id'] ?>">
        <button type="submit">Delete</button>
        </form>
        <a href="<?= URL ?>add.php?id=<?= $saskaita['id'] ?> ">Add</a>
        </li>


    <?php endforeach ?>
    </ul>



</body>
</html>