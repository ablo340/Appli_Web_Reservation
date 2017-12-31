<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ma page web</title>
    </head>
    <body>
		<?php
        //reservation's display
			echo '<p> Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$key->getName().'</br></p>';
		    echo '<p> Prenom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$key->getFirstName().'</br></p>';
		    echo '<p> Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$key->getAge().'</br></p>';
		?>
    </body>
</html>
