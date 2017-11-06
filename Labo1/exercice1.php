<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <?php
        $nombre = 100;
        while ($nombre >= 1) 
        { 
        	if ($nombre%2 != 0)
        	{
        		echo $nombre . '<br/ >';
        	}       	
        	$nombre--;
        }
        ?>
    </body>
</html>