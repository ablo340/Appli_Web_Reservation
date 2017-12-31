<?php
	//session starting
	session_start();

	include 'model.php';

	// connection with database
    try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=reservations;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

	
	if (!empty($_GET['page']) && is_file('controleur_'.$_GET['page'].'.PHP'))
	{
		$reservation = unserialize($_SESSION['reservation']);
		$passager = unserialize($_SESSION['passager']);
        include 'controleur_'.$_GET['page'].'.PHP';
	}
	else
	{
		$reservation = new Reservation();
		$passager = new Passager();
		$_SESSION['reservation'] = serialize($reservation);
		$_SESSION['passager'] = serialize($passager);
        include 'controleur_accueil.PHP';
	}
?>		