<?php
	include('crud.php');
	
	$nom ="test"; 
	$prenom ="test"; 
	$sexe ="test"; 
	$dateNaissance ="2000-02-02"; 
	$email ="test"; 
	$rue ="test"; 
	$cp ="test"; 
	$ville ="test"; 
	$mdp ="test"; 
	$sel ="test"; 
	$actif = 0; 
	$derniere_connexion ="2020-01-01 00:00:01"; 
	$derniere_ip ="192.168.0.3"; 
	$solde =0;
	
	$pdo = getPdo();
	insertInscription($pdo, $nom, $prenom, $sexe, $dateNaissance, $email, $rue, $cp, $ville, $mdp, $sel, $actif, $derniere_connexion, $derniere_ip, $solde);

	
	
	
	

?>