<?php require DIR.'views/top.php' ?>
<h1><?= $pageTitle ?></h1>
<?php require DIR.'views/menu.php' ?>

<form action="<?= URL ?>update/<?= $box->id ?>" method="post">
    Bannanas in box: <input type="text" name="count" value="<?= $box->bannana ?>">
    <button type="submit">Edit</button>
</form>

<?php require DIR.'views/bottom.php' ?>