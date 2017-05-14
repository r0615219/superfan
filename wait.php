<?php
    session_start();

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    if(empty($_SESSION['vak'])){
        header('Location: index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <title>Superfan</title>
</head>
<body>

<div class="container-wait">

        <h1>H e y !</h1>

    <p>Fijn dat je zo goed supportert! </br>
        Even geduld voor de volgende opdracht...</p>

        <div class="logo"><img src="img/LogoSuperfan-01.png" alt="logo"></div>





</div>

</body>
</html>