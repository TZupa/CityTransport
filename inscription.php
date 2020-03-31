<?php 
	include('top.php');
	include('model_crud.php');
	
	$pdo = getPdo();
	$villes = getvilles($pdo);
	$cp = getCp($pdo);
	//$user=getuser($pdo);
?>	


	
	
	<?php
		//foreach ($cp as $row )  
			//{
				// echo $row["Code_postal"]; 
				
             
          // }?>
   

	



<!-- **************************************** FORM ************************************************  -->		
		
		<div class="container">
		
			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Inscription</h4>

					<form method="post" action="controlleur_inscription.php">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							 </div>
							<select name="sexe" class="custom-select" style="max-width: 90px;" required>
								<option value="Mr.">Mr.</option>
								<option value="Mme">Mme</option>
								<option value="Melle">Melle</option>
							</select>
							<input name="nom" class="form-control" placeholder="Nom" type="text" required/>
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							 </div>
							<input name="prenom" class="form-control" placeholder="Prénom" type="text" required/>
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
							 </div>
							<input name="dateN" class="form-control" placeholder="Date de naissance" type="date" required/>
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							 </div>
							<input type="email" name="email" class="form-control" placeholder="Adresse e-mail" pattern="[a-zA-Z0-9\W]+[@]{1,1}[a-zA-Z0-9\W]+[.]{1,1}[a-zA-Z]{2,3}" required/>
						</div> <!-- form-group// -->
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<input name="rue" class="form-control" placeholder="Rue" type="text" required>
						</div> <!-- form-group end.// -->
						
						
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<input name="cp" class="form-control" placeholder="Code postal" type="numbers" maxlength="5" minlength="5" required/>
							
						</div> <!-- form-group end.// -->
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control" name="ville" required>
								<option selected="">Ville</option>
								<option>Courbevoie</option>
								<option>un endroit dans le 93</option>
								<option>Versailles</option>
							</select>
						</div> <!-- form-group end.// -->
						
						
						<div class="form-group input-group" data-tip="8 caractères minimum dont au moins 1 majuscule, 1 chiffre et 1 caractère spécial">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="mot de passe" type="password" name="mdp" id="password" pattern="((?=^.{8,}$)(?=.*\d)(?=.*\W)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$)" required/>
						</div> <!-- form-group// -->
						<div class="form-group input-group" data-tip="8 caractères minimum dont au moins 1 majuscule, 1 chiffre et 1 caractère spécial">
							<p>8 caractères minimum dont au moins 1 majuscule, 1 chiffre et 1 caractère spécial</p>
						</div> <!-- form-group// -->
						 
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Répéter le mot de passe" type="password" name="mdp1" id="confirm_password" pattern="((?=^.{8,}$)(?=.*\d)(?=.*\W)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$)" required/>
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


	<script>
		var password = document.getElementById("password")
		  , confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>


	</body>
</html>