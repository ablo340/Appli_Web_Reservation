<?php
	
	//first passenger's page
	if (isset($_GET['places']) AND isset($_GET['destination']))
	{
		$reservation->setDestination(htmlspecialchars($_GET['destination']));
		$reservation->setPlaces(htmlspecialchars($_GET['places']));
		if(isset($_GET['assurance']))
		{
			$reservation->setAssurance('OUI');
		}
		else
		{
			$reservation->setAssurance('NON');
		}
		$destination = $reservation->getDestination();
		$places = $reservation->getPlaces();
		$list = $reservation->getPassagers();
		if ($places >= 1 AND $places <= 10)
		{
			$_SESSION['reservation'] = serialize($reservation);
			echo '<h1> Passager 1 </h1>';
					include 'passager.PHP';
		}
		else
		{
			echo '<P class="erreur">Veuillez entrer une destination</br>
            	    Veuillez entrer un nombre supérieur à 1 et inférieur à 10</P>';
                	include 'controleur_accueil.PHP';
		}

	}

	//others passengers's page
	elseif (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['age']))
	{

		if( is_numeric($_GET['age']) AND $_GET['age'] > 0)
		{
			$passager->setName(htmlspecialchars($_GET['nom']));
			$passager->setFirstname(htmlspecialchars($_GET['prenom']));
			$passager->setAge(htmlspecialchars($_GET['age']));
			$reservation->AddPassagers($passager); //add passenger
			$list = $reservation->getPassagers();
			$places = $reservation->getPlaces();
			$destination = $reservation->getDestination();
			$_SESSION['reservation'] = serialize($reservation);
			if ($places > sizeof($list))	
			{
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
			echo '<p class="erreur">entrer un vrai age numerique supérieur à 0</p>';
			echo '<h1>Passager'.(sizeof($reservation->getPassagers()) + 1).'</h1>';
			include 'passager.PHP';
		}
		
	}

	//Previous page
	else
	{	
		$reservation = unserialize($_SESSION['reservation']);

		if(sizeof($reservation->getPassagers()) > 0)
		{
			$reservation->DelPassagers(); //delete passenger recorded
			echo '<h1>Passager'.(sizeof($reservation->getPassagers()) + 1).'</h1>';
				include 'passager.PHP';
			$_SESSION['reservation'] = serialize($reservation);
		}
		else
			include 'controleur_accueil.PHP';
		
	}
		
		




	
?>