<?php

session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true ){
    header("location: login.html");
    exit;
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Pagina personale</title>
</head>
<body>

    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>
    </header>
<div class="text">
    <h2>
        <?php
            echo "Ciao " . $_SESSION["nome"] . " ecco i tuoi eventi";
        ?>
    </h2>
    <a href="login.html" class="disconnetti">Disconnetti</a>
</div>
    
</body>
</html>