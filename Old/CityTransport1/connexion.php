<?php include('top.html');
?>



		
		
		
		<div class="wrapper fadeInDown">
		  <div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
			  <img src="img/Bus-512.png" id="icon" alt="User Icon" />
			  <h1 class="h1_signin">City Transport</h1>
			</div>

			<!-- Login Form -->
			<form method="post" action="controlleur_connexion.php">
			  <input type="text" id="login" class="fadeIn second login" name="login" placeholder="e-mail">
			  <input type="password" id="password" class="fadeIn third password" name="password" placeholder="mot de passe">
			  <input type="submit" class="fadeIn fourth valider" value="Log In">
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
			  <a class="underlineHover a_signin" href="inscription.php">Créer un compte</a>
			</div>

		  </div>
		</div>
		
		
		
<?php include('bot.html');?>