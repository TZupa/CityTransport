<?php 
	include('top.html');
	/*include('model_crud.php');
	
	$pdo = getPdo();
	$villes = getvilles($pdo);
	$cp = getCp($pdo);
	$user=getuser($pdo);*/
?>	


	
	
	<?php
		//foreach ($user as $row )  
			//{
				
			//		 echo $row["nom"]; 
				
             
          //  }?>
   
	

	



<!-- **************************************** FORM ************************************************  -->		
		
		<div class="container">
		
			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Inscription</h4>

					<form method="post" action="controleur_inscription.php">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							 </div>
							<select name="sexe" class="custom-select" style="max-width: 90px;">
								<option value="Mr.">Mr.</option>
								<option value="Mme">Mme</option>
								<option value="Melle">Melle</option>
							</select>
							<input name="nom" class="form-control" placeholder="Nom" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							 </div>
							<input name="prenom" class="form-control" placeholder="Prénom" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
							 </div>
							<input name="dateN" class="form-control" placeholder="Date de naissance" type="date">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							 </div>
							<input name="email" class="form-control" placeholder="Email address" type="email">
						</div> <!-- form-group// -->
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<input name="rue" class="form-control" placeholder="Rue" type="text">
						</div> <!-- form-group end.// -->
						
						
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control" name="cp">
								<option selected="">Code postal</option>
								<option>92000</option>
								<option>93000</option>
								<option>78000</option>
							</select>
						</div> <!-- form-group end.// -->
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control" name="ville">
								<option selected="">Ville</option>
								<option>Courbevoie</option>
								<option>un endroit dans le 93</option>
								<option>Versailles</option>
							</select>
						</div> <!-- form-group end.// -->
						
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Créer un mot de passe" type="password" name="mdp">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Répéter le mot de passe" type="password" name="mdp1">
						</div> <!-- form-group// -->                                      
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block"> Inscription  </button>
						</div> <!-- form-group// -->      
						<p class="text-center">Vous avez déjà un compte? <a href="connexion.php">Connexion</a> </p>                                                                 
					</form>
				</article>
			</div> <!-- card.// -->

		</div> 
		<!--container end.//-->

		
		
	</body>
</html>