<?php

require __DIR__.'/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    editBalance($_POST['id'], $_POST['suma']); //sukuria
    header('Location: '.URL.'saskaitos.php');
    exit;
}

$id = $_GET['id'];
$saskaita = getRecord($id);
print_r($saskaita);

?>

<form action="<?= URL ?>add.php" method="post">
Vardas<input type="text" name="suma" value="<?= $saskaita['suma'] ?>">
<input type="hidden" name='id' value="<?= $id ?>">
<button type="submit">Create</button>
</form>