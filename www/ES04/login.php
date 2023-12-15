<!DOCTYPE html>
<html>
<head>
    <title>ITCS ERASMO DA ROTTERDAM</title>
</head>
<body>
    <h1>INSERISCI LE TUE CREDENZIALI</h1>

    <?php
    $usr = $_POST['username'] ?? '';
    $pwd = $_POST['password'] ?? '';

    if ($usr != 'simone' || $pwd != 'ciao84') 
    {
        echo "<h1>ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE O NON IMMESSI</h1><br>";
    } 
    else 
    {
        session_start();
        $_SESSION['username'] = 'simone';
        $_SESSION['password'] = 'ciao84';
        $nrvisite = $_SESSION['NrVisite'] ?? 0;
        header('Location: riservata.php');
        exit();
    }
    ?>
    <form method="POST" action="riservata.php">
        <label>inserisci username:</label><br>
        <input name="username" id="username" type="text" placeholder="username"><br>
        <label>inserisci password:</label><br>
        <input name="password" id="password" type="password" placeholder="password"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
