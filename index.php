<?php

//mac adres van gsm ook in databank steken

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    if(isset($_POST["vak-submit"])){
        session_start();
        $_SESSION['vak'] = $_POST['vak'];
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
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Superfan</title>
</head>
<body>

<div class="container">
    <div class="red-banner"></div>

    <div class="content">

        <h1>Welkom</h1>

        <p>Connecteer met jouw supportersvak via wifi of QR-code</p>

        <a href="#" class="connect">wifi</a>

        <p>of</p>

        <a href="#" data-toggle="modal" data-target="#QRinfo">QR Code</a>

        <p>of</p>

        <a href="#" data-toggle="modal" data-target="#kiesVak">handmatig</a>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="QRinfo" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">QR Code</h4>
                </div>
                <div class="modal-body">
                    <p>Open QR reader applicatie op je smartphone. <br>
                    Scan de QR code op de affiche in jouw supportersvak.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal">Oké</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="kiesVak" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">In welk supportersvak bevindt u zich?</h4>
                </div>
                <div class="modal-body">
                    <p>Kies een supportersvak</p>
                    <form action="" method="post">
                        <div class="vakken">
                            <!--<label for="A">
                                <input type="radio" name="vak"  value="A" id="A">A
                            </label>
                            <label for="B">
                                <input type="radio" name="vak"  value="B" id="B">B
                            </label>
                            <label for="C">
                                <input type="radio" name="vak"  value="C" id="C">C
                            </label>
                            <label for="D">
                                <input type="radio" name="vak"  value="D" id="D">D
                            </label>
                            <label for="E1">
                                <input type="radio" name="vak"  value="E1" id="E1">E1
                            </label>
                            <label for="E2">
                                <input type="radio" name="vak"  value="E2" id="E2">E2
                            </label>
                            <label for="E3">
                                <input type="radio" name="vak"  value="E3" id="E3">E3
                            </label>
                            <label for="F">
                                <input type="radio" name="vak"  value="F" id="F">F
                            </label>
                            <label for="G">
                                <input type="radio" name="vak"  value="G" id="G">G
                            </label>
                            <label for="H1">
                                <input type="radio" name="vak"  value="H1" id="H1">H1
                            </label>
                            <label for="H2">
                                <input type="radio" name="vak"  value="H2" id="H2">H2
                            </label>
                            <label for="H3">
                                <input type="radio" name="vak"  value="H3" id="H3">H3
                            </label>
                            <label for="H4">
                                <input type="radio" name="vak"  value="H4" id="H4">H4
                            </label>
                            <label for="H5">
                                <input type="radio" name="vak"  value="H5" id="H5">H5
                            </label>
                            <label for="I">
                                <input type="radio" name="vak"  value="I" id="I">I
                            </label>
                            <label for="J">
                                <input type="radio" name="vak"  value="J" id="J">J
                            </label>
                            <label for="K1">
                                <input type="radio" name="vak"  value="K1" id="K1">K1
                            </label>
                            <label for="K2">
                                <input type="radio" name="vak"  value="K2" id="K2">K2
                            </label>-->

                            <input type="radio" id="A" value="A" name="vak">
                            <label for="A" class="btn">A</label>

                            <input type="radio" id="B" value="B" name="vak">
                            <label for="B" class="btn">B</label>

                            <input type="radio" id="C" value="C" name="vak">
                            <label for="C" class="btn">C</label>

                            <input type="radio" id="D" value="D" name="vak">
                            <label for="D" class="btn">D</label>

                            <input type="radio" id="E1" value="E1" name="vak">
                            <label for="E1" class="btn">E1</label>

                            <input type="radio" id="E2" value="E2" name="vak">
                            <label for="E2" class="btn">E2</label>

                            <input type="radio" id="F" value="F" name="vak">
                            <label for="F" class="btn">F</label>

                            <input type="radio" id="G" value="G" name="vak">
                            <label for="G" class="btn">G</label>

                            <input type="radio" id="H1" value="H1" name="vak">
                            <label for="H1" class="btn">H1</label>

                            <input type="radio" id="H2" value="H2" name="vak">
                            <label for="H2" class="btn">H2</label>

                            <input type="radio" id="H3" value="H3" name="vak">
                            <label for="H3" class="btn">H3</label>

                            <input type="radio" id="H4" value="H4" name="vak">
                            <label for="H4" class="btn">H4</label>

                            <input type="radio" id="H5" value="H5" name="vak">
                            <label for="H5" class="btn">H5</label>

                            <input type="radio" id="I" value="I" name="vak">
                            <label for="I" class="btn">I</label>

                            <input type="radio" id="J" value="J" name="vak">
                            <label for="J" class="btn">J</label>

                            <input type="radio" id="K1" value="K1" name="vak">
                            <label for="K1" class="btn">K1</label>

                            <input type="radio" id="K2" value="K2" name="vak">
                            <label for="K2" class="btn">K2</label>



                        </div>
                        <button type="submit" name="vak-submit" id="vak-submit">Volgende</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal">Annuleer</button>
                </div>
            </div>

        </div>
    </div>

    <div class="red-banner">
        <div class="logo"></div>
    </div>

</div>

</body>
</html>