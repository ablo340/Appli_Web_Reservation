<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Addition à compléter</h1>
        <?php
        for ($count=0; $count <= 10 ; $count++) 
        { 
            $numb1 = rand(0,100);
            $numb2 = rand(0,100);
            $max = max($numb1, $numb2);
            $min = min($numb1, $numb2);
            echo '<b>' , $count , '</b> : ' , $min , '+_____ = ' , $max , ' <input type="button" value="solution" onclick="alert(', $max-$min,')"/> <br>';
        }
        ?>
    </body>
</html>