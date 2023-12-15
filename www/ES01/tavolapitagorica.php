<html>
<head>
    <title> TAVOLA PITAGORICA </title>
</head>
<body>
    <?php
    echo '<table border="5">';
        for($i=0;$i<11;$i++)
        {
            echo "<tr><td>$i</td></tr>";
        }

        for($c=0;$c<11;$c++)
        {
            echo "<td>$c<tr></tr></td>";
        
        }

    ?>
</body>
</html>