<?php

    session_start();

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    if(isset($_POST['submit'])){
        //haal alle checked values op
        //in database steken
        //linken aan id? vak?
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
    <title>Superfan</title>
</head>
<body>

<div class="container">
    <div class="red-banner"></div>

    <div class="content">

        <h1>Voorkeuren</h1>

        <p>Deelnemen aan</p>

        <form action="" method="post">
            
            <div class="voorkeuren">
                <input type="checkbox" id="zingen" value="zingen" name="voorkeuren">
                <label for="zingen" class="btn">Clublied zingen</label>

                <input type="checkbox" id="wave" value="wave" name="voorkeuren">
                <label for="wave" class="btn">Wave starten</label>

                <input type="checkbox" id="springen" value="springen" name="voorkeuren">
                <label for="springen" class="btn">Springen</label>

                <input type="checkbox" id="drinken" value="drinken" name="voorkeuren">
                <label for="drinken" class="btn">Pintje drinken</label>

                <input type="checkbox" id="klappen" value="klappen" name="voorkeuren">
                <label for="klappen" class="btn">Klappen</label>
            </div>

            <button type="submit">Opslaan</button>
            
        </form>

        


    </div>

    <div class="red-banner">
        <div class="logo"></div>
    </div>
</div>

</body>
</html>