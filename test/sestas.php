<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->

<?php
    if(isset($_GET['get'])){
        $color = "style='background-color:green';";
    }
    if(isset($_POST['post'])){
        $color = "style='background-color:yellow';";
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
<body <?php echo $color?> >

    <form action="" method="get">
    <button type="submit" name="get">GET</button>
    </form>

    <form action="" method="post">
    <button type="submit" name="post">POST</button>
    </form>
</body>
</html>