<?php

	$destination = $reservation->getDestination();
	$places = $reservation->getPlaces();
	$assurance = $reservation->getAssurance();
	$list = $reservation->getPassagers();

	//Calculation of the total
	switch ($destination) 
	{
		case "Berlin":
			switch ($assurance) 
			{
				case 'OUI':
					$prix = (15*$places) + 20;
					break;
				
				default:
					$prix = (15*$places);
					break;
			}
			$id = 1;
			include 'confirmation.PHP';
			break;

		case "Budapest":
			switch ($assurance) 
			{
				case 'OUI':
					$prix = (18*$places) + 20;
					break;
				
				default:
					$prix = (18*$places);
					break;
			}
			$id = 2;
			include 'confirmation.PHP';
			break;

		case "Rome":
			switch ($assurance) 
			{
				case 'OUI':
					$prix = (25*$places) + 20;
					break;
				
				default:
					$prix = (25*$places);
					break;
			}
			$id = 3;
			include 'confirmation.PHP';
			break;

		case "Barcelone":
			switch ($assurance) 
			{
				case 'OUI':
					$prix = (22*$places) + 20;
					break;
				
				default:
					$prix = (22*$places);
					break;
			}
			$id = 4;
			include 'confirmation.PHP';
			break;
		
		case "Paris":
			switch ($assurance) 
			{
				case 'OUI':
					$prix = (17*$places) + 20;
					break;
				
				default:
					$prix = (17*$places);
					break;
			}
			$id = 5;
			include 'confirmation.PHP';
			break;

		case "Lisbonne":
			switch ($assurance) 
			{
				case 'OUI':
					$prix = (20*$places) + 20;
					break;
				
				default:
					$prix = (20*$places);
					break;
			}
			$id = 6;
			include 'confirmation.PHP';
			break;
		default:
			echo "entrez la destination";
			break;
	}
	// insertion of reservation into the database
	$requete = $bdd->prepare('INSERT INTO personne(nom, prenom, age, assurance, prix, FK_res, date_reservation) VALUES(?, ?, ?, ?, ?, ?, NOW())');
	foreach ($list as $key)
	{
		$requete->execute(array($key->getName(), $key->getFirstname(), $key->getAge(), $assurance, $prix, $id));
	}
	$last_id = $bdd->lastInsertId();
	$_SESSION['last_id'] = $last_id;
    
    
?>
