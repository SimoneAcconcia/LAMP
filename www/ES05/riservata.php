<?php
session_start();

if (!isset($_SESSION["username"])) {
    $error_message = "Attenzione! per entrare nel sito è nbecessario fare il login";

    header("Location: login.php?error=".urlencode($err_message));

    exit;
}

if (isset($_GET['logout'])) 
{
    header("Location: logout.php");
    exit;
}
?>

<html>
<head>
    <title>Accesso pagina riservata</title>
</head>
<body>
<h2>Benvenuto nell'area riservata del sito.</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</body>
</html>