<?php
session_start();

spl_autoload_register(function ($class) {
    include_once("classes/" . $class . ".class.php");
});

/*if(empty($_SESSION['vak'])){
    header('Location: index.php');
}*/

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

    <script src="js/audiodisplay.js"></script>
    <script src="js/recorderjs/recorder.js"></script>
    <script src="js/recordOfficial.js"></script>

    <title>Superfan</title>

    <style>
        #wavedisplay{
            margin: 50px auto;
            border: 1px solid black;
            /*width: 1024px;
            height: 500px;*/
        }
    </style>

</head>
<body>
<?php if(isset($error)){ echo $error; }; ?>

<div class="container">
    <div class="red-banner header"><h2 id="timerEnd">30</h2></div>

    <div class="content content-fixed">

        <h1>Clublied</h1>

        <h1 id="opdracht-timer">Klaar ?</h1>

        <p>Wie voegt zich bij de rangen <br>
            onzer supportersschaar <br>
            Wie voelt niet het verlangen <br>
            om toe te juichen waar <br>
            Ons elftal is ten strijde <br>
            en keurig spel vertoont <br>
            Dat hen ten allen tijde <br>
            met lauweren heeft bekroond <br>
            Komt allen toegesneld <br>
            recht naar het voetbalveld!</p>


        <p>De club zal zegepralen <br>
            t'is de club van Geel en Rood <br>
            Trotseert de hinderpalen <br>
            door dapperheid in nood <br>
            De vlaggen zullen wapperen <br>
            gezangen galmen luid <br>
            Ter ere onzer dapperen <br>
            toe Malinwa vooruit!</p>

        <p>Het edel spel van voetbal <br>
            verheft lichaam en geest <br>
            En heeft dan ook veel bijval <br>
            onder de jonkheid meest. <br>
            Zo heeft iedere sportkring <br>
            liefhebbers bij de vleet, <br>
            Die gaan uit op ontwikkeling <br>
            hun tijd is wel besteed, <br>
            En is 't niet wonderschoon <br>
            dat Mechelen spant de kroon?</p>

        <p>De club zal zegepralen <br>
            t'is de club van Geel en Rood <br>
            Trotseert de hinderpalen <br>
            door dapperheid in nood <br>
            De vlaggen zullen wapperen <br>
            gezangen galmen luid <br>
            Ter ere onzer dapperen <br>
            toe Malinwa vooruit!</p>

        <p>De voetbalcompetitie <br>
            hernieuwt zich ieder jaar <br>
            Vol hoop en vol ambitie <br>
            staan d'ereploegen klaar <br>
            Om zich opnieuw te meten <br>
            met FC Malinois <br>
            En is d'uitkomst geweten <br>
            dan roepen wij te gaar <br>
            Er is niks aan te doen <br>
            de club wordt kampioen!</p>

        <p>De club zal zegepralen <br>
            t'is de club van Geel en Rood <br>
            Trotseert de hinderpalen <br>
            door dapperheid in nood <br>
            De vlaggen zullen wapperen <br>
            gezangen galmen luid <br>
            Ter ere onzer dapperen <br>
            toe Malinwa vooruit!</p>

        <canvas id="wavedisplay" width="1024" height="500"></canvas>


    </div>

    <div class="red-banner footer">
        <div class="logo"><img src="img/LogoSuperfan-01.png" alt="logo"></div>
    </div>
</div>

</body>

<script>
    //TIMER OPDRACHT
    var count=6;

    var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

    var output =  $('#opdracht-timer');

    var print;

    var recordEnd = false;

    function timer()
    {
        count=count-1;
        if (count < 0)
        {
            clearInterval(counter);
            output.hide();
            recordEnd = true;
            toggleRecording();
            return;
        }

        if(count == 0){
            print = 'GO';
        } else {
            print = count;
        }

        output.html(print);
    }

    //TIMER EINDE OPDRACHT
    var countEnd=30;

    var counterEnd=setInterval(timerEnd, 1000); //1000 will  run it every 1 second

    var outputEnd =  $('#timerEnd');

    function timerEnd()
    {
        countEnd=countEnd-1;
        if (countEnd < 0)
        {
            clearInterval(counterEnd);
            recordEnd = false;
            toggleRecording();
            return;
        }

        outputEnd.html(countEnd);
    }
</script>

</html>