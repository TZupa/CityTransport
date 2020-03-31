<?php 
	session_start();
	if (!isset($_SESSION['email'])) 
	{
		include('top.php');
	}
	else include('topC.php');
	

//mail( "mh.ighilaza@gmail.com" , "test mail" , "Contenu du message" );
		//	mail( "btssiolapie2018@gmail.com" , "Inscription CityTransport" , "Veuillez suivre le lien suivant afin de valider votre inscription" );
?>
		
		
		
		<div class="container">
		
			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 1300px; min-width : 900px;">
					<h4 class="card-title mt-3 text-center">News</h4>
				
					<!-- INFO LIST    ************************************** -->		
		
					 <div class="container">
						<div class="row centrow">
							<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ] centrow">
								<ul class="event-list">
									<li>
										<time datetime="2014-07-20">
											<span class="day">4</span>
											<span class="month">Jul</span>
											<span class="year">2014</span>
											<span class="time">ALL DAY</span>
										</time>
										<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
										<div class="info">
											<h2 class="title">Independence Day</h2>
											<p class="desc">United States Holiday</p>
										</div>
										<div class="social">
											<ul>
												<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
												<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
												<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
											</ul>
										</div>
									</li>

									<li>
										<time datetime="2014-07-20 0000">
											<span class="day">8</span>
											<span class="month">Jul</span>
											<span class="year">2014</span>
											<span class="time">12:00 AM</span>
										</time>
										<div class="info">
											<h2 class="title">One Piece Unlimited World Red</h2>
											<p class="desc">PS Vita</p>
											<ul>
												<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
												<li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
											</ul>
										</div>
										<div class="social">
											<ul>
												<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
												<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
												<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
											</ul>
										</div>
									</li>

									<li>
										<time datetime="2014-07-20 2000">
											<span class="day">20</span>
											<span class="month">Jan</span>
											<span class="year">2014</span>
											<span class="time">8:00 PM</span>
										</time>
										<img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />
										<div class="info">
											<h2 class="title">Mouse0270's 24th Birthday!</h2>
											<p class="desc">Bar Hopping in Erie, Pa.</p>
											<ul>
												<li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>
												<li style="width:34%;">3 <span class="fa fa-question"></span></li>
												<li style="width:33%;">103 <span class="fa fa-envelope"></span></li>
											</ul>
										</div>
										<div class="social">
											<ul>
												<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
												<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
												<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
											</ul>
										</div>
									</li>

									<li>
										<time datetime="2014-07-31 1600">
											<span class="day">31</span>
											<span class="month">Jan</span>
											<span class="year">2014</span>
											<span class="time">4:00 PM</span>
										</time>
										<img alt="Disney Junior Live On Tour!" src="http://www.thechaifetzarena.com/images/main/DL13_PiratePrincess_thumb.jpg" />
										<div class="info">
											<h2 class="title">Disney Junior Live On Tour!</h2>
											<p class="desc"> Pirate and Princess Adventure</p>
											<ul>
												<li style="width:33%;">$49.99 <span class="fa fa-male"></span></li>
												<li style="width:34%;">$29.99 <span class="fa fa-child"></span></li>
											</ul>
										</div>
										<div class="social">
											<ul>
												<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
												<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
												<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
				
				
				
				
				
				</article>
			</div> <!-- card.// -->

		</div> 
		<!--container end.//-->
	
		
			
			
			
		
	</body>
</html>