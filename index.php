<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Edusogno</title>

    <!-- 

        1) Creazione di una login page
        2) Display di un campo specifico/evento una volta effettuato l’accesso dal login
        3) Creazione di un form di registrazione (per utenti non registrati)
        [Opzionale] - Cambio password con invio alla mail di un link 

     -->

</head>

<body>

    <?php
    include 'assets/php/connectionDB.php'
    ?>

    <form action="" method="POST">
        <h2>Crea il tuo account</h2>

        <label for="nome">Inserisci il nome</label>
        <input type="nome" name="nome" id="nome" placeholder="Mario" required>

        <label for="cognome">Inserisci il cognome</label>
        <input type="cognome" name="cognome" id="cognome" placeholder="Rossi" required>

        <label for="email">Inserisci l'email</label>
        <input type="email" name="email" id="email" placeholder="name@example.com" required>

        <label for="password">Inserisci la password</label>
        <input type="password" name="password" id="password" placeholder="Scrivila qui" required>

        <input type="submit" value="Invia">
    </form>
</body>

</html>