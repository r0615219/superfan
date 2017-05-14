<?php
    session_start();

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    $_SESSION['vak'] = 'H5';

    if(!empty($_SESSION['vak'])){
        header('Location: hier.php');
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

    <title>Superfan | Vak H5</title>
</head>
<body>

<div class="container-wait">

    <h1>V a k :  <?php echo $_SESSION['vak']; ?></h1>

</div>

</body>
</html>