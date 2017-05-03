<?php
    session_start();

    spl_autoload_register(function ($class) {
        include_once("classes/" . $class . ".class.php");
    });

    try {
        if (isset($_POST["ja"])) {
            $supporter = new Vak();
            $supporter->vak = $_SESSION['vak'];
            $supporter->MACadres = $_SERVER['REMOTE_ADDR'];
            $supporter->saveVak();
            header('Location: voorkeuren.php');
        }
    } catch(Exception $e){
        $error = $e->getMessage();
    }

    if(isset($_POST["nee"])){
        session_destroy();
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
<?php if(isset($error)){ echo $error; }; ?>

<div class="container">
    <div class="red-banner"></div>

    <div class="content">

        <h1>C h e c k !</h1>

        <p>Supporter je in dit vak?</p>

        <div class="btn-square"><p><?php echo $_SESSION['vak']; ?></p></div>

        <div class="btns">

        <form action="" method="post">

            <button type="submit" name="ja" id="btn-ja">V</button>

            <button type="submit" name="nee" id="btn-nee">X</button>

        </form>

        </div>


    </div>

    <div class="red-banner">
        <div class="logo"><img src="img/LogoSuperfan-01.png" alt="logo"></div>
    </div>
</div>

</body>
</html>