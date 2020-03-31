<?php 

include('model_crud.php');


function getUserData($email)
{
	$pdo = getPdo();
	$user=getuser($pdo,$email);
	return $user;
}
?>



