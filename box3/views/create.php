<?php require DIR.'views/top.php' ?>
<h1><?= $pageTitle ?></h1>
<?php require DIR.'views/menu.php' ?>

<form action="<?= URL ?>store" method="post">
    Bannanas in box: <input type="text" name="count">
    <button type="submit">Create</button>
</form>

<?php require DIR.'views/bottom.php' ?>