<?php 
	session_start();
	if (!isset($_SESSION['email'])) 
	{
		include('top.php');
	}
	else include('topC.php');
	
	include('model_crud.php');
	
	//________________________Connexion DB_____________________
	$pdo = getPdo();
	
	//________________________Récupérer la liste des trajets avec la durée_______________________________
	$trajets= getTrajets($pdo);
	
	//__________________________________________________Préparation du tableau de trajets_______________________________________________
	$_distArr = array();
	foreach($trajets as $route)
	{
		$_distArr[$route['station_depart']][$route['station_destination']]= $route['duree_trajet'];
	}


	//__________________________________Récupération des id des stations de départ et d'arrivée___________________
	$depart = getStationId($pdo, $_POST['depart']);
	$destination = getStationId($pdo, $_POST['destination']);

	foreach($depart as $row)
	{
		$a = $row['id'];
	}

	foreach($destination as $row)
	{
		$b = $row['id'];
	}



	/*
	//set the distance array
	$_distArr = array();
	$_distArr[1][2] = 7;
	$_distArr[1][3] = 9;
	$_distArr[1][6] = 14;
	$_distArr[2][1] = 7;
	$_distArr[2][3] = 10;
	$_distArr[2][4] = 15;
	$_distArr[3][1] = 9;
	$_distArr[3][2] = 10;
	$_distArr[3][4] = 11;
	$_distArr[3][6] = 2;
	$_distArr[4][2] = 15;
	$_distArr[4][3] = 11;
	$_distArr[4][5] = 6;
	$_distArr[5][4] = 6;
	$_distArr[5][6] = 9;
	$_distArr[6][1] = 14;
	$_distArr[6][3] = 2;
	$_distArr[6][5] = 9;
	*/
	//the start and the end
	//$a = 1;
	//$b = 31;




	//initialize the array for storing
	$S = array();//the nearest path with its parent and weight
	$Q = array();//the left nodes without the nearest path

		
	foreach(array_keys($_distArr) as $val)$Q[$val] = 99999; 
	$Q[$a] = 0;

	//start calculating
	while(!empty($Q)){
		$min = array_search(min($Q), $Q);//the most min weight 
		if($min == $b) break;
		foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
			$Q[$key] = $Q[$min] + $val;
			$S[$key] = array($min, $Q[$key]);
		}
		unset($Q[$min]);
	}

	//list the path
	$path = array();
	$pos = $b;
	while($pos != $a){
		$path[] = $pos;
		$pos = $S[$pos][0];
	}
	$path[] = $a;
	$path = array_reverse($path);
	
	
	
	
	//-------------------------------------------------------------------------------Extending functionalities---------------------------------
	$path2 = array();
	$path4 = array();
	$path3 ="";
	$count =0;
	$start=true;
	$dep=false;
	foreach($path as $v => $idt)
	{
		$statName=getStationName($pdo, $idt);
		foreach($statName as $row)
		{
			$path2[] = $row['nom_station'];
		}
		if($count == 0)
		{
			$path4[]=$idt;
			$count ++;
		}
		else if($count<count($path)-1){
			$path4[]=$idt;
			$path4[]=$idt;
			$count ++;
		}
		else if($count<count($path))
		{
			$path4[]=$idt;
			$count ++;
		}
		
	}
	
	foreach($path4 as $v => $idt)
	{
		if($start == true) 
		{
			$path3 = "(station_depart =".$idt." and"; 
			$start = false;
			
		}
		else if($dep == false)
		{
			$path3=$path3." station_destination =".$idt.")";
			$dep = true;
		}
		else
		{
			$path3 = $path3." or (station_depart =".$idt." and";
			$dep=false;
		}
	}
	
	//echo $path3;
	$info=getTrajetInfo($pdo, $path3);//___récupérer les infos des stations parcourues pour avoir le nom des lignes et les stations de départ et d'arrivée
	foreach($info as $row)
	{
		echo $row['nom_station_depart']." | ".$row['nom_station_destination']." | ".$row['nom_ligne']."<br />";
	}
	$ligne = "";
?>

<!-- ************************** Résultat calcul de trajet *****************************-->		
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h4><?php echo "<br />Trajet de ".$_POST['depart']." à destination de ".$_POST['destination'].""; echo "<br />Distance : ".$S[$b][1]."Km";?></h4>
					<ul class="timeline1">
					<?php foreach($path2 as $v => $station) {?>
						<li>
							<a target="_blank" href="https://www.totoprayogo.com/#"><?php //echo "ligne A"; ?></a>
							<a href="#" class="float-right"><?php// echo "Direction x"; ?></a>
							<p><?php echo $station; ?></p>
						</li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>


<?php

include('bot.html');

?>