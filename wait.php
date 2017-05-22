<?php
    session_start();

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    if(empty($_SESSION['vak'])){
        header('Location: index.php');
    }

    if (isset($_POST["ja"])) {
        header('Location: opdracht.php');
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

<div class="container container-wait">

        <h1>H e y !</h1>

    <p>Even geduld voor de volgende opdracht...</p>

    <div class="logo"><img src="img/LogoSuperfan-01.png" alt="logo"></div>




    <!-- Modal -->
    <div class="modal fade" id="opdracht" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Opdracht</h4>
                </div>
                <div class="modal-body">

                    <h2 id="timer">30</h2>
                    <h1> Zin om ... </h1>
                    <p>uit volle borst mee te zingen met ons clublied?</p>



                    <img src="img/logozingen-02.png" id="logoOpdracht">
                    <p><span>Maak een keuze!</span></p>

                    
                    <div class="btnsOpdracht">

                        <form action="" method="post">

                            <button type="submit" name="ja" id="btn-ja">Ja</button>

                            <button type="submit" name="nee" id="btn-nee" data-dismiss="modal">Nee</button>

                        </form>

                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>

        </div>
    </div>



</div>

</body>

<script>
   // var s = new Date().getSeconds();
    //$('#outputseconds').html(s);

        //OPEN MODAL
        window.onload = function(){

            $('#opdracht').modal('show');

        };

        //TIMER OPDRACHT
        var count=30;

        var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

        function timer()
        {
            count=count-1;
            if (count < 0)
            {
                clearInterval(counter);
                $('#opdracht').modal('hide');
                return;
            }

            $('#timer').html(count);
        }
</script>

</html>