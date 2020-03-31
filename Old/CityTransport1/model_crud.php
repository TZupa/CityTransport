<?php

//___________________________Connexion_______________________________________________	
function getPdo()
{
	$serveur='mysql:host=localhost';
	$bdd='dbname=citytransport';   		
	$user='root' ;    		
	$mdp='' ;
	try{
		$pdo = new PDO($serveur.';'.$bdd, $user, $mdp);
		$pdo->query("SET CHARACTER SET utf8");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		set_time_limit(0);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
	//if($pdo == null) die("There was a problem !");
	return $pdo;
}

// _________________________________________inscription_________________________________________________________________________ 

function insertInscription($pdo, $nom, $prenom, $sexe, $dateNaissance, $email, $rue, $cp, $ville, $mdp, $actif, $derniere_connexion, $derniere_ip, $solde)
{
	
	$sql = ("insert into utilisateur values('".$email."','". $sexe."', '".$nom."', '".$prenom."', '".$dateNaissance."', '".$rue."', '".$cp."', '".$ville."', '".$mdp."', ".$actif.", '".$derniere_connexion."', '".$derniere_ip."', ".$solde.",false);");

	try
	{
		$pdo->query($sql);
	}catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}

//________________________________________Villes____________________________________________________________________________________
	function getVilles($pdo)
	{
			$req = "select * from villes";
			$res = $pdo->query($req);
			$villes = $res->fetchAll();
			return $villes;
	}
		function getCp($pdo)
	{
			$req = "select Code_postal from villes";
			$res = $pdo->query($req);
			$cp = $res->fetchAll();
			return $cp;
	}
		function getuser($pdo)
	{
			$req = "select * from utilisateur";
			$res = $pdo->query($req);
			$users = $res->fetchAll();
			return $users;
	}

?>