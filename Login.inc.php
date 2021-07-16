<?php  
if (isset($_POST["connexion"])) {
	
	$username = $_POST["username"];
	$pwd = $_POST["pwd"]; 

	require_once 'connection.php';
	require_once 'functions.inc.php' ;

	if (emptyInputLogin($username, $pwd) !== false){
		header("location: login.php?error=emptyinput");
		exit();   
	}

	
	loginUser($con, $username, $pwd);

}
else {
	header("location: login.php");
	exit();
}

