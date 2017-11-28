<?php
include 'model.PHP';
$reservation = unserialize($_SESSION['reservation']);
$destination = $reservation->getDestination();
		$places = $reservation->getPlaces();
	switch ($destination) 
	{
		case "Berlin":
			$prix = 15*$places;
			include 'confirmation.PHP';
			break;

		case "Budapest":
			$prix = 18*$places;
			include 'confirmation.PHP';
			break;

		case "Rome":
			$prix = 25*$places;
			include 'confirmation.PHP';
			break;

		case "Barcelone":
			$prix = 22*$places;
			include 'confirmation.PHP';
			break;
		
		case "Paris":
			$prix = 17*$places;
			include 'confirmation.PHP';
			break;

		case "Lisbonne":
			$prix = 20*$places;
			include 'confirmation.PHP';
			break;
		default:
			echo "entrez la destination";
			break;
	}
?>