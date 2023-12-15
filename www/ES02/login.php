<html>
<head>
<title> ITCS ERASMO DA ROTTERDAM </title>
</head>
<body>
<h1> Controllo Credenziali </h1>
<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if($usr!= "admin" && $pdw!="password")
{
?>
<h1> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATRE<h1> <br>
<?php
}
else
{
    echo "<h1> Benvenuto" .$usr."<br/>nell'area riservata del sito </h1>";
}
?>

</body>


</html>