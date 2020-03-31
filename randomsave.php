<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> City Transport </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	
	</head>
	<body>
		<header>
		</header>
		<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		  <a class="navbar-brand" href="index.php"> <img src="img/Bus-512.png" alt="logo" width="30" height="30" class="d-inline-block align-top"/> </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			  <a class="nav-item nav-link active" href="inscription.php">Inscription <span class="sr-only">(current)</span></a>
			  <a class="nav-item nav-link" href="connexion.php">Connexion</a>
			  <a class="nav-item nav-link" href="etat_trafic.php">Etat du trafic</a>
			 
			</div>
		  </div>
		</nav>
		
<!-- **************************************** FORM ************************************************  -->		
		
		<div class="container">
		
			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Create Account</h4>

					<form>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							 </div>
							<input name="" class="form-control" placeholder="Full name" type="text">
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
							<select class="custom-select" style="max-width: 120px;">
								<option selected="">+971</option>
								<option value="1">+972</option>
								<option value="2">+198</option>
								<option value="3">+701</option>
							</select>
							<input name="" class="form-control" placeholder="Phone number" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control">
								<option selected=""> Select job type</option>
								<option>Designer</option>
								<option>Manager</option>
								<option>Accaunting</option>
							</select>
						</div> <!-- form-group end.// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Create password" type="password">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Repeat password" type="password">
						</div> <!-- form-group// -->                                      
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
						</div> <!-- form-group// -->      
						<p class="text-center">Have an account? <a href="connexion.php">Log In</a> </p>                                                                 
					</form>
				</article>
			</div> <!-- card.// -->

		</div> 
		<!--container end.//-->

		
		
	</body>
</html>