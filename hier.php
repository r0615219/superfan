<?php
    session_start();
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

        <h1>Check</h1>

        <p>Supporter je in dit vak?</p>

        <div class="btn-square"><p><?php echo $_SESSION['vak']; ?></p></div>

        <a href="voorkeuren.php">V</a>

        <a href="index.php">X</a>


    </div>

    <div class="red-banner">
        <div class="logo"></div>
    </div>
</div>

</body>
</html>