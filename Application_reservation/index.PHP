<?php
	session_start();
	//router
	if (!empty($_GET['page']) && is_file('controleurs_'.$_GET['page'].'.PHP'))
	{
        include 'controleur_'.$_GET['page'].'.PHP';
	}
	else
	{
        include 'controleur_accueil.PHP';
	}
?>