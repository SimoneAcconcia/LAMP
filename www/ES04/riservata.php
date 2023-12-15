<html>                                           
<head>                                          
<title> PAGINA RISERVATA </title>       
</head>
<body>
<h1>  VERIFICA CREDENZIALI</h1>
<?php                                           //inizio parte dinamica del codice in php 
$usr=$_POST["username"];                        //recupera le credenziali nel form html della pagina precedente
$pwd=$_POST["password"];  

    if($usr!="simone" || $pwd!='ciao84')    //controlla se le credenziali sono corrette
    {
            echo "<h1> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE</h1> <br>";
            session_start();
        if (isset($_SESSION['username'])) 
        {
            header('Location: login.php');
            exit();
        }
        if (isset($_SESSION['password'])) 
        {
            header('Location: login.php');
            exit();
        }
    }
    
    else                                        //accesso alla pagina con credenziali corrette
    {
    echo "<h1> Benvenuto " .$usr. "</br>nell ' area riservata del sito </h1>";
    echo "<h1>le tue credenziali inserite sono </br>username: " .$usr."</br>password:" .$pwd. "</br>la ringraziamo e buona giornata!</h1>";
    
    ?>
    <a href="logout.php">pagina di logout</a>
    <?php
    
    }
?>

</body>

</html>

<!-- if (isset($_POST["submit"])) 
        {
            if(isset($_POST['username'])) //controlla se il valore username è stato inserito tramite il form
            {
                $usr = $_POST['username'];  //assegna alla variabile $urs il valore username se if è vero
            }     
           if(isset($_POST['password']))   //controlla se il valore password è stato inserito tramite il form
            {
                $pwd = $_POST["password"];  //copia il valore di password in $pwd
            }

        } -->