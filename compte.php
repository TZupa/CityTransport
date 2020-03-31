<?php 
	 
	
	session_start();
	if (!isset($_SESSION['email'])) 
	{
		include('top.php');
		header('Location: http://localhost/citytransport/connexion.php');
		exit();
	}
	
	include('topC.php');
	include('model_compte.php'); 
	$user = getUserData($_SESSION['email']);

	foreach ($user as $row )  
	{	
		
		
		
		$nom =$row["nom"];  
		$prenom =$row["prenom"]; 
		$sexe =$row["sexe"]; 
		$dateNaissance =$row["date_de_naissance"]; 
		$email =$row["email"]; 
		$rue =$row["rue"]; 
		$cp =$row["code_postal"]; 
		$ville =$row["ville"]; 
		$solde =$row["solde"];
	} 
?>






<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $nom." ".$prenom; ?>
                                    </h5>
                                    
                                    <p class="proile-rating"></br></br><span></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informations personnelles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Solde</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="editbtn btn btn-primary btn-block" name="btnAddMore" value="Editer le profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Civilité </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $sexe; ?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $nom; ?>" disabled/>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Prénom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $prenom; ?>" disabled/>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Date de naissance</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $dateNaissance; ?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $email; ?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Rue</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $rue; ?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ville</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $ville; ?>" disabled/>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Code postal</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $cp; ?>" disabled/>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Votre solde </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $solde; ?> €</p>
                                            </div>
                                        </div>
                                        
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>














<?php include('bot.html');?>
