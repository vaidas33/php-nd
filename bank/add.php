<?php
require __DIR__.'/bootstrap.php';
//POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    $addAmount = (float) $_POST['addAmount'] ?? 0;
    add($id, $addAmount);
    header('Location: '.URL);
    die;
}
//GET
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    $user = getUser($id);
    if(!$user) {
        header('Location: '.URL);
        die; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/add.css">
    <title>Prideti Lesas</title>
</head>
<body>
    <?php include_once(__DIR__.'./components/navbar.php')?>
    <section class='main_add'>
        <div class="person_info_header">
            <h3>Prideti Lesas</h3>
        </div>
        <div class="person_info_body">
            <p>Kliento Vardas: <?= $user['fName'] ?></p>
            <p>Kliento Pavarde: <?= $user['lName'] ?></p>
            <p>Kliento Saskaitos Nr.: <?= $user['accountNum'] ?></p>
            <p>Kliento Saskaitos Likutis: <?= $user['currentAmount'] ?>Eur</p>

            <form action="<?= URL ?>add.php?id=<?= $user['id'] ?>" method="post">
                <p>Iveskite skaiciu kiek norite prideti:</p>
                <input type="text" name="addAmount" value="<?= $user['currentAmount'] ?>">
                <p>Eur</p>
                <button type="submit">Prideti</button>
            </form>
        </div>
    </section>
</body>
</html>