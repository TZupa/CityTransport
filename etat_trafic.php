<?php 
	session_start();
	if (!isset($_SESSION['email'])) 
	{
		include('top.php');
	}
	else include('topC.php');
	include('model_crud.php');
	$pdo = getPdo();
	$incidents= getIncidents($pdo);
?>
		
<!-- *******************************************  NewsFloW TimeLine****************************************  -->
		<div class="container">
			<div class="row">
			   <div class="card golge">
					<div class="card-header"><p>
						<h5 class="text-center m-2 isteColor" style="font-weight: bold">Incidents</h5>
					  </p></div>
					<div class="card-body">
					  <div class="carousel vert slide" data-ride="carousel" data-interval="2000">
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<ul class="timeline">
							
							
							<?php
							  foreach ($incidents as $row )  
								{
									?>
							  <li>
								<!--"_blank" tıklanan linkin yeni sekmede açılmasını sağlar.-->
								<a target="_blank" href="#"><?php echo $row["type_incident"];  ?></a>
								<a href="#" class="float-right"><?php echo "Du ".$row["date_debut_incident"]; echo " au ".$row["date_debut_incident"];  ?></a>
								<p class="article"> <?php echo $row["description_incident"];  ?> </p>
							  </li>
							  <hr>
							  <?php }?>
							 
							</ul>
						  </div>
						  
						  
						 <!--
						    <div class="carousel-item"> 
							<ul class="timeline">
							  <li>
								<a href="#">News Headline</a>
								<a href="#" class="float-right">09 Ocak, 2019</a>
								<p class="article">>Haberler burada gözükecek..Haberler burada gözükecek..Haberler burada
								  gözükecek..Haberler burada gözükecek..Haberler burada gözükecek..</p>
							  </li>
							  <hr>
							  <li>
								<a href="#">News Headline</a>
								<a href="#" class="float-right">4 Temmuz, 2018</a>
								<p>Haberler burada gözükecek..Haberler burada gözükecek..Haberler burada gözükecek..Haberler
								  burada gözükecek..Haberler burada gözükecek..Haberler burada gözükecek..Haberler burada
								  gözükecek..</p>
							  </li>
							   <hr>
							  <li>
								<a href="#">News Headline</a>
								<a href="#" class="float-right">4 Temmuz, 2018</a>
								<p>Haberler burada gözükecek..Haberler burada gözükecek..Haberler burada gözükecek..Haberler
								  burada gözükecek..Haberler burada gözükecek..Haberler burada gözükecek..Haberler burada
								  gözükecek..</p>
							  </li>
							</ul>
						  </div> -->
						</div>
					  </div>
					</div>
				  </div>
			</div>
		</div>




	
		
	</body>
</html>