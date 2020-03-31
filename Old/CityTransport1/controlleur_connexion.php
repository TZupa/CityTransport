<?php
	include('crud.php');
	$pdo = getPdo();

	$email =$_POST["login"];  
	$mdp =$_POST["password"]; 
	$verif=false;
	$users=getUtilisateurs($pdo);
	 foreach ($users as $row ) 
			{
				
				if($email == $row['email'] && password_verify($mdp, $row['password']))
				{
					if($row['admn'] && $row['actif'] )
					{	
						$verif = true;
						header('Location: http://localhost/citytransport/console.php');
						exit();
					}
					else if(!$row['admn'] && $row['actif'] )
					{
						$verif = true;
						header('Location: http://localhost/citytransport/compte.php');
						exit();
					}
					else
					{
						$verif = true;
						echo '<center> <h2> Ce compte n\'est pas actif !</h2> </center> <center> <p> Vous voulez réessayer ? <a href="connexion.php"> Connexion </a> </p> </center>';
					}
						
				}
				
              
           }
         if (!$verif) echo '<center> <h2> Identifiants incorrects !</h2> </center> <center> <p> Vous voulez réessayer ? <a href="connexion.php"> Connexion </a> </p> </center>';


function getUtilisateurs($pdo)
{
		$req = "select email, password, admn, actif from utilisateur";
		$res = $pdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
}
	
	
	

	
	$hash = password_hash($mdp, PASSWORD_DEFAULT);
	
	
	

?>