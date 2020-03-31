<?php include('top.html');
?>

<!-- **************************************** FORM ************************************************  -->		
		
		<div class="container">
		
			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Simulation</h4>

					<form method="post" action="controlleur_inscription.php">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-train"></i> </span>
							 </div>
							<input name="depart" class="form-control" placeholder="Station de départ" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-bus"></i> </span>
							 </div>
							<input name="destination" class="form-control" placeholder="Station de destination" type="text">
						</div> <!-- form-group// -->
						                                   
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block"> Simuler  </button>
						</div> <!-- form-group// -->      
						                                                                
					</form>
				</article>
			</div> <!-- card.// -->

		</div> 
		<!--container end.//-->


<?php include('bot.html');?>