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

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <title>Superfan</title>
</head>
<body>

<div class="container">
    <div class="red-banner"></div>

    <div class="content">

        <h1>D e e l n e m e n <br> a a n . . .</h1>

        <p>Laat weten welke opdrachten je wil uitvoeren.</p>

        <form action="" method="post">
            
            <div class="voorkeuren">


                <label for="zingen" class="btn">Clublied zingen</label>

                <div id="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideInput" name="zingen" />
                    <label for="checkboxSlideInput"></label>
                </div>

                <label for="wave" class="btn">Wave starten</label>

                <div id="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideInput" name="wave" />
                    <label for="checkboxSlideInput"></label>
                </div>


                <label for="springen" class="btn">Springen</label>

                <div id="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideInput" name="springen" />
                    <label for="checkboxSlideInput"></label>
                </div>


                <label for="drinken" class="btn">Pintje drinken</label>

                <div id="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideInput" name="pintje" />
                    <label for="checkboxSlideInput"></label>
                </div>


                <label for="klappen" class="btn">Klappen</label>

                <div id="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideInput" name="klappen" />
                    <label for="checkboxSlideInput"></label>
                </div>

            </div>



            <div class="submitBtns">

            <form action="" method="post">

                <button type="submit" name="ja" id="btn-ja">V</button>

                <button type="submit" name="nee" id="btn-nee">X</button>

            </form>

            </div>

        </form>

        


    </div>

    <div class="red-banner">
        <div class="logo"><img src="img/LogoSuperfan-01.png" alt="logo"></div>
    </div>
</div>

</body>
</html>