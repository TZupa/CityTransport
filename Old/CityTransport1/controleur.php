<?php
include('top.html');
include('model_crud.php');
	
	$civilite = strip_tags($_POST['sexe']);
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['dateN'];
	$email = $_POST['email']; 
	$adresse = $_POST['rue']; 
	$cp = $_POST['cp'];
	$ville = $_POST['ville'];
	$mdp = $_POST['mdp'];
	$mdp1 = $_POST['mdp1'];
	
	$regex = "#[a-zA-Z0-9]+[@]{1,1}[a-zA-Z0-9]+[.]{1,1}[a-zA-Z]+#";
	if(preg_match($regex, $email))
	{
		echo 'Bonnne adresse email!';
	}
	else echo 'Mauvais format d\'adresse email!';
	
	
	$pdo=getPdo();
	$villes=getVilles($pdo);
	?>
	<table>
		<?php foreach($villes as $row)
		{
			?>
			<tr>
				<td> <?php echo $row['nom_communes']?> </td>
				<td> <?php echo $row['cp']?> </td>
			</tr>
		
			<?php
		}?>
	<table>
<?php
include('bot.html');

?>


