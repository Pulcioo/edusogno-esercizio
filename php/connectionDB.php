<?php

    define("DB_SERVERNAME", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "edusogno");

    // connessione
    $conn = new mysqli('localhost', 'root', 'root', 'edusogno');

    // check connessione
    if($conn && $conn->connect_error) {
        echo "Connessione fallita: " . $conn->connect_error;
        die();
    }

    // echo('DB CONNESSO!')
?>
