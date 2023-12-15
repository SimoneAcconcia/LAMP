<html>                                           
<head>                                          
<title> ITCS ERASMO DA ROTTERDAM </title>       
</head>
<body>
<h1> Controllo Credenziali ITCS ERASMO DA ROTTERDAM </h1>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome= trim($_POST["nome"]);
    $cog = trim($_POST["cognome"]);
    $nascita= $_POST["nascita"];
    $codiceFiscale = trim($_POST["codice_fiscale"]);
    $email = trim($_POST["email"]);
    $numero = trim($_POST["numero"]);
    $indVia= trim($_POST["via"]);
    $indCap = trim($_POST["cap"]);
    $indComune = trim($_POST["comune"]);
    $indProvincia = trim($_POST["provincia"]);
    $nickname = trim($_POST["nickname"]);
    $password =($_POST["password"]);

    if (!preg_match('/^[A-Za-z ]+$/', $nome)) 
    {
        echo "<br>Nome non valido<br>";
    }
    else
    {
        echo"<br>nome inserito correttamente:<br>".htmlspecialchars($nome);
    
    }

    if (!preg_match('/^[A-Za-z \'&]+$/', $cog)) {
        echo  " <br>i caratteri inseriti per il cognome non sono validi<br>";
    }

    else
    {
        echo "<br>cognome inserito correttamente:<br>".htmlspecialchars($cog);
    }

    if(empty($codiceFiscale))
    {
        echo "<br> codice fiscale non inserito<br>";
    }
    else
    {
        echo"<br>codice fiscale inserito correttamente:<b>".htmlspecialchars($codiceFiscale);
    }
    if (empty($nascita)) 
    {
        echo"<br>non hai inserito la data di nascita!<br>";
    }

    else
    {
        echo "<br>Data di Nascita inserita correttamente:<br>".htmlspecialchars($nascita);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br>la mail inserita non è valida<br>";
    }

    else
    {
        echo "<br>Email corretta:<br>".htmlspecialchars($email);
    }

    if (!empty($numero)) {
        echo "<br>Il numero di telefono non è valido<br>";
    } else {
        echo "<br>Numero di telefono corretto:<br>".htmlspecialchars($numero);
    }
    

    if ($nickname === $nome || $nickname === $cog) {
        echo "<br>il nikname deve essere diverso da nome e cognome!<br>";
    }
    else
    {
        echo"<br>nickname valido:<br>".htmlspecialchars($nickname);
    }

    if (strlen($password) < 8 || !preg_match('/[A-Z]+/', $password )|| !preg_match('/[0-9]+/', $password) || !preg_match('/[^A-Za-z0-9]+/', $password)) 
    {
        echo"<br>la password non è valida<br>";
    }
    else
    {
        echo"<br>password valida<br>".htmlspecialchars($password);
    }

    }
?>


</body>


</html>

