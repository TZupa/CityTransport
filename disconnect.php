<?php
	session_start();
	session_unset();     // unset $_SESSION variable for the run-time 
    $_SESSION = array();
	session_destroy();
	//echo $_SESSION['email'];
	header('Location: http://localhost/citytransport/index.php');
						exit();

?>