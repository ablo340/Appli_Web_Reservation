<?php
	include 'model.PHP';
	if (isset($_GET['places']) AND isset($_GET['destination']))
	{
		$reservation = new Reservation($_GET['destination'], $_GET['places'] );
		$_SESSION['assurance'] = $_GET['assurance'];
		$_SESSION['reservation'] = serialize($reservation);
		$destination = $reservation->getDestination();
		$places = $reservation->getPlaces();
		if ($places >= 1 AND $places <= 10)
		{
			echo '<h1> Passager 1 </h1>';
					include 'passager.PHP';			
		}
		else
		{
			echo '<P>Veuillez entrer une destination</br>
            	    Veuillez entrer un nombre supérieur à 0 et inférieur à 10</P>';
                	include 'controleur_accueil.PHP';
		}

	}

	//verifivation des post
	elseif (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['age']))
	{

		$reservation = unserialize($_SESSION['reservation']);
		$passager = new Passager($_GET['nom'], $_GET['prenom'], $_GET['age']);
		$reservation->setPassagers($passager);
		$destination = $reservation->getDestination();
		$places = $reservation->getPlaces();
		$list = $reservation->getPassagers();

		if ($places > sizeof($list))	
		{
			$_SESSION['reservation'] = serialize($reservation);
			print_r($list);
			echo '<h1>Passager'.(sizeof($list) + 1).'</h1>';
			include 'passager.PHP';
	
		}
		else
		{
			include 'controleur_validation.PHP';
		}
	}

	else
	{
		echo "demd:s";
	}
		
		




	
?>