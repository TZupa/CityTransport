<?php

	
function getPdo()
{
	$serveur='mysql:host=localhost';
	$bdd='dbname=citytransport';   		
	$user='root' ;    		
	$mdp='' ;
	
	$pdo = new PDO($serveur.';'.$bdd, $user, $mdp);
	$pdo->query("SET CHARACTER SET utf8");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	set_time_limit(0);
	if($pdo == null) die("There was a problem !");
	return $pdo;
}

/* ___________inscription_______________________________________________   */

function insertInscription($pdo, $nom, $prenom, $sexe, $dateNaissance, $email, $rue, $cp, $ville, $mdp, $sel, $actif, $derniere_connexion, $derniere_ip, $solde)
{
	
	
	
	$sql = ("insert into utilisateur values('".$email."','". $sexe."', '".$nom."', '".$prenom."', '".$dateNaissance."', '".$rue."', '".$cp."', '".$ville."', '".$mdp."', '".$sel."', ".$actif.", '".$derniere_connexion."', '".$derniere_ip."', ".$solde.");");
	//$sql = ("insert into utilisateur (email, sexe, nom, prenom, date_de_naissance, rue, code_postal, ville, password, sel, actif) values('".$email."','". $sexe."', '".$nom."', '".$prenom."', '".$dateNaissance."', '".$rue."', '".$cp."', '".$ville."', '".$mdp."', '".$sel."', ".$actif.");");

	try
	{
		$pdo->query($sql);
	}catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}


?>