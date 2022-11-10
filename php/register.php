<?php

require_once('connectionDB.php');

$nome = $conn->real_escape_string($_REQUEST['nome']);
$cognome = $conn->real_escape_string($_REQUEST['cognome']);
$email = $conn->real_escape_string($_REQUEST['email']);
$password = $conn->real_escape_string($_REQUEST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$hashed_password')";

if($conn->query($sql) === true){
    echo "Registrazione effettuata con successo";
    header("location: ../login.html");
}else{
    echo "Errore registrazione utente $sql. " . $connessione->error;
}

?>