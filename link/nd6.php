<?php
    if(isset($_GET['get'])) {
        $color = 'green';
    }
    if(isset($_POST['post'])) {
        $color = 'yellow';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='background-color:<?php echo $color ?>;'>
    <form action="" method="get">
    <button type="submit" name='get'>GET</button>
    </form>

    <form action="" method="post">
    <button type="submit" name='post'>POST</button>
    </form>
</body>
</html>