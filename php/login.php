<?php

require_once('connectionDB.php');

$email = $conn->real_escape_string($_REQUEST['email']);
$password = $conn->real_escape_string($_REQUEST['password']);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
    if($result = $conn->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['id'] = $row['password'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['loggato'] = true;

                header("location: ../pagina-personale.php");
            }else{
                echo "La password non è corretta";
            }
        }else{
            echo "Email non registrata";
        }
    }else{
        echo "Errore login";
    }

    $conn->close();
}

?>