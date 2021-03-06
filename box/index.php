<?php 
require __DIR__.'/bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?ver=<?= time() ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Bannana Boxes</title>
</head>
<body>
    <h1>Bannana Boxes</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>">Index</a>

    <ul>
    <?php foreach(readData() as $box) : ?>
        <li style="padding: 10px;">
        <span>ID: <?= $box['id'] ?></span> 
        <span>Count: <?= $box['bannana'] ?></span>
        <a href="<?= URL ?>update.php?id=<?= $box['id'] ?>">[EDIT]</a>
        <form style="display:inline-block;" action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
        <!-- <button type="submit">DELETE</button> -->
        <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
        
        </li>
    <?php endforeach ?>
    </ul>

</body>
</html>