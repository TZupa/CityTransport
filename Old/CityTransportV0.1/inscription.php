<?php include('top.html');
?>
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
							<select class="custom-select" style="max-width: 90px;">
								<option value="1">Mr.</option>
								<option value="2">Mme</option>
								<option value="3">Melle</option>
							</select>
							<input name="" class="form-control" placeholder="Nom" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							 </div>
							<input name="" class="form-control" placeholder="Prénom" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
							 </div>
							<input name="" class="form-control" placeholder="Date de naissance" type="date">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							 </div>
							<input name="" class="form-control" placeholder="Email address" type="email">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							
							<input name="" class="form-control" placeholder="+33" type="text" maxlength="4" style="max-width: 60px;">
							<input name="" class="form-control" placeholder="Phone number" type="text" maxlength="8">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<input name="" class="form-control" placeholder="Rue" type="text">
						</div> <!-- form-group end.// -->
						
						
						
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control">
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
							<select class="form-control">
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
							<input class="form-control" placeholder="Créer un mot de passe" type="password">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Répéter le mot de passe" type="password">
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