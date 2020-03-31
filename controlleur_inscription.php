<?php
	include('model_crud.php');
	
	$nom =$_POST["nom"]; 
	$prenom =$_POST["prenom"]; 
	$sexe =$_POST["sexe"]; 
	$dateNaissance =$_POST["dateN"]; 
	$email =$_POST["email"]; 
	$rue =$_POST["rue"]; 
	$cp =$_POST["cp"]; 
	$ville =$_POST["ville"]; 
	$mdp =$_POST["mdp"]; 
	$mdp1 =$_POST["mdp1"]; 
	$actif = 0; 
	$derniere_connexion ="2020-01-01 00:00:01"; 
	$derniere_ip ="0.0.0.0"; 
	$solde =0;
	
	
	
	include('top.html');
	
	if (preg_match('#[a-zA-Z-]+#',$nom) && preg_match('#[a-zA-Z-]+#',$prenom) && ($sexe=='Mr.' || $sexe=='Mme' || $sexe ='Melle')&& preg_match('#[a-zA-Z0-9\W]+@{1,1}[a-zA-Z0-9\W]+.[a-zA-Z]+#',$email)&&
	preg_match('#^[0-9]+[a-zA-Z- \']+#',$rue) && preg_match('#[0-9]{5}#',$cp) && preg_match('#[a-zA-Z- \']+#',$ville) && preg_match('#((?=^.{8,}$)(?=.*\d)(?=.*\W)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$)#',$mdp)    
	&& preg_match('#[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}#',$derniere_ip) && preg_match('#[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}#',$derniere_connexion) && preg_match('#[0-9]+#' ,$solde))//&&dateNaissance<''&&
	{	
		if($mdp1==$mdp)
		{
			$hash = password_hash($mdp, PASSWORD_DEFAULT);
			$rue = addslashes($rue);
			$ville = addslashes($ville);
			$pdo = getPdo();
			insertInscription($pdo, $nom, $prenom, $sexe, $dateNaissance, $email, $rue, $cp, $ville, $hash, $actif, $derniere_connexion, $derniere_ip, $solde);
			mail( "btssiolapie2018@gmail.com" , "Inscription CityTransport" , "Veuillez suivre le lien suivant afin de valider votre inscription" );
			echo '<center> <h4 style="color:red;"> Nous vous remercions pour votre inscription <h4/> </center>';
		}
		else echo '<center> <h4 style="color:red;"> Erreur les mots de passe doivent être identiques <h4/> </center>';
	}
	else echo '<center> <h4 style="color:red;"> Erreur <h4/> </center>';
	include('bot.html');
?>