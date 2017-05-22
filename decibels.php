<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/style.css">-->

    <link rel="icon" href="img/LogoSuperfan-01.png">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Superfan</title>

    <script src="js/audiodisplay.js"></script>
    <script src="js/recorderjs/recorder.js"></script>
    <script src="js/main.js"></script>
    <style>
        body {
            font: 14pt Arial, sans-serif;
            background: lightgrey;
            display: flex;
            flex-direction: column;
            height: 100vh;
            width: 100%;
            margin: 0 0;
        }
        canvas {
            display: inline-block;
            background: #202020;
            width: 95%;
            height: 45%;
            box-shadow: 0px 0px 10px blue;
        }
        #controls {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            height: 20%;
            width: 100%;
        }
        #record { height: 15vh; }
        #record.recording {
            background: red;
            background: -webkit-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%);
            background: -moz-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%);
            background: radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%);
        }
        #save, #save img { height: 10vh; }
        #save { opacity: 0.25;}
        #save[download] { opacity: 1;}
        #viz {
            height: 80%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }
        @media (orientation: landscape) {
            body { flex-direction: row;}
            #controls { flex-direction: column; height: 100%; width: 10%;}
            #viz { height: 100%; width: 90%;}
        }

    </style>

</head>
<body>

<div class="container container-wait">

    <div id="viz">
        <canvas id="analyser" width="1024" height="500"></canvas>
        <canvas id="wavedisplay" width="1024" height="500"></canvas>
    </div>
    <div id="controls">
        <img id="record" src="img/mic128.png" onclick="toggleRecording(this);">
        <a id="save" href="#"><img src="img/save.svg"></a>
    </div>


</div>

</body>


</html>