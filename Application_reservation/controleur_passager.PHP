<?php
	include 'model.PHP';

	$reservation = new Reservation($_GET['destination'], $_GET['places'] );
	$destination = $reservation->getDestination();
	$places = $reservation->getPlaces();

	include 'passager.PHP';
	
?>