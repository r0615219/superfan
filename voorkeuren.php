<?php

    session_start();

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    if(empty($_SESSION['vak'])){
        header('Location: index.php');
    }

    try{
        if(isset($_POST['ja'])){
            $voorkeurenUser = new Voorkeuren();

            $voorkeurenUser->user_id = $_SESSION['id'];

            if(isset($_POST['zingen'])){
                $voorkeurenUser->Zingen = 1;
            } else {
                $voorkeurenUser->Zingen = 0;
            }

            if(isset($_POST['wave'])){
                $voorkeurenUser->Wave = 1;
            } else {
                $voorkeurenUser->Wave = 0;
            }

            if(isset($_POST['springen'])){
                $voorkeurenUser->Springen = 1;
            } else {
                $voorkeurenUser->Springen = 0;
            }

            if(isset($_POST['pintje'])){
                $voorkeurenUser->Pintje = 1;
            } else {
                $voorkeurenUser->Pintje = 0;
            }

            if(isset($_POST['klappen'])){
                $voorkeurenUser->Klappen = 1;
            } else {
                $voorkeurenUser->Klappen = 0;
            }

            $voorkeurenUser->saveVoorkeuren();
            header('Location: wait.php');
        }
    } catch(Exception $e){
        $error = $e->getMessage();
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
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/LogoSuperfan-01.png">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Superfan</title>
</head>
<body>

<div class="container">
    <div class="red-banner header"></div>

    <div class="content content-fixed">

        <?php if(!empty($error)){ echo '<p>'.$error.'</p>'; } ?>

        <h1>D e e l n e m e n <br> a a n . . .</h1>

        <form action="" method="post">

            <div class="voorkeuren">


                <label for="zingen" id="btn">Clublied zingen</label>

                <div class="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideZingen" name="zingen" checked />
                    <label for="checkboxSlideZingen"></label>
                </div>

                <label for="wave" id="btn">Wave starten</label>

                <div class="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideWave" name="wave" checked />
                    <label for="checkboxSlideWave"></label>
                </div>


                <label for="springen" id="btn">Springen</label>

                <div class="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideSpringen" name="springen" checked />
                    <label for="checkboxSlideSpringen"></label>
                </div>


                <label for="drinken" id="btn">Pintje drinken</label>

                <div class="checkboxSlide">
                    <input type="checkbox" id="checkboxSlidePintje" name="pintje" checked />
                    <label for="checkboxSlidePintje"></label>
                </div>


                <label for="klappen" id="btn">Klappen</label>

                <div class="checkboxSlide">
                    <input type="checkbox" id="checkboxSlideKlappen" name="klappen" checked />
                    <label for="checkboxSlideKlappen"></label>
                </div>

            </div>

            <div class="submitBtns">

                <button type="submit" name="ja" id="btn-go">Ready to go!</button>

            </div>

        </form>

    </div>

    <div class="red-banner footer">
        <div class="logo"><img src="img/LogoSuperfan-01.png" alt="logo"></div>
    </div>

</div>

</body>
</html>