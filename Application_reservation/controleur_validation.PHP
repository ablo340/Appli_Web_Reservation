<?php
    
    //display reservation
	echo '<h1> VALIDATION DES RESERVATIONS </h1> </br> </br> </br>';
	echo '<p> Destination &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$destination.'</br></p>';
    echo '<p> Nombre de places &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$places.'</br></p>';
	foreach ($list as $key) 
	{
		include 'validation.PHP';
	}
    echo '<p> Assurance annulation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$reservation->getAssurance().'</br></p>';
	echo'<form action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "confirmation">
            <table>
            <tr>
                <td>
                <input type ="submit" value ="confirmer" />
        </form>
        </td>
        <td>
        <form action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "passager">
            <input type ="submit" value ="Retour à la page précédente" />
        </form>
        </td>
        <td>
        <form action ="index.PHP?page= ">
            <input type ="submit" value ="Annuler la reservation" />
        </form>
        </td>
        </tr>
        </table>';
    $_SESSION['reservation'] = serialize($reservation);

?>