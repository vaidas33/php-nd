<?php
_d($_GET);

if(isset($_GET['color'])) {
    // _d($color);
    $color = $_GET['color'];
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
<body style = 'background-color: #<?php echo $color?>';>

    <a href="nd3.php">Index</a>

    <form action="calc.php" method="get">
    <input type="text" name="color">
    <button type="submit">PUSH</button>
    </form>


</body>
</html>