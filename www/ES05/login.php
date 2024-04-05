<?php
session_start();

//Recupero i dati dal form
$usr = $_POST['username'] ?? '';
$pwd = $_POST['password'] ?? '';

//Mi connetto al DB

//Interrogo il DB e vedi se esuste l'utente






?>


<!DOCTYPE html>
<html>
<head>
    <title>ITCS ERASMO DA ROTTERDAM</title>
</head>
<body>
    <h1>INSERISCI LE TUE CREDENZIALI</h1>

    <?=$output?>

    <form method="POST" action="riservata.php">
        <label>inserisci username:</label><br>
        <input name="username" id="username" type="text" placeholder="username"><br>
        <label>inserisci password:</label><br>
        <input name="password" id="password" type="password" placeholder="password"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
