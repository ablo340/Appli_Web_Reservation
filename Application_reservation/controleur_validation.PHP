<?php
	echo '<h1> VALIDATION DES RESERVATIONS </h1> </br> </br> </br>';
	echo '<p> Destination &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$destination.'</br></p>';
    echo '<p> Nombre de places &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$places.'</br></p>';
	foreach ($list as $key) 
	{
		include 'validation.PHP';
	}
    echo '<p> Assurance annulation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$reservation->getAssurance($_SESSION['assurance']).'</br></p>';
	echo'<form action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "confirmation">
            <p>
                <input type ="submit" value ="confirmer" />
            </p>
        </form>
        <form action ="controleur_passager.PHP">
            <input type ="submit" value ="Retour à la page précédente" />
        </form>
        <form action ="index.PHP?page= ">
            <input type ="submit" value ="Annuler la reservation" />
        </form>';

?>