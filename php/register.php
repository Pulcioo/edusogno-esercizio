<?php

require_once('connectionDB.php');

$nome = $conn->real_escape_string($_REQUEST['nome']);
$cognome = $conn->real_escape_string($_REQUEST['cognome']);
$email = $conn->real_escape_string($_REQUEST['email']);
$password = $conn->real_escape_string($_REQUEST['password']);

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";

if($conn->query($sql) === true){
    echo "Registrazione effettuata con successo";
}else{
    echo "Errore registrazione utente $sql. " . $connessione->error;
}

?>