<?php
require __DIR__.'/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    delete($_POST['id']); //sukuria
    header('Location: '.URL.'saskaitos.php');
}

?>