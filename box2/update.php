<?php 
require __DIR__.'/bootstrap.php';

//POST scenarijus
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    
    $bannanas = $_POST['count'] ?? 0; // jeigu nera count bus 0
    $bannanas = (int) $bannanas;
    update($id, $bannanas); // redaguoja
    header('Location: '.URL);
    die;

}
//GET scenarijus
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    $box = getBox($id);
    if(!$box) {
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
    <title>Update Box</title>
</head>
<body>
    <h1>Update Bannana Box ID: <?= $box['id'] ?></h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>">Index</a>

    <form action="<?= URL ?>update.php?id=<?= $box['id'] ?>" method="post">
    Bannanas in box: <input type="text" value="<?= $box['bannana'] ?>" name="count">
    <button type="submit">Update</button>
    </form>


</body>
</html>