<?php
	session_start();
	//Controleren of de gebruiker is ingelogd
	if(!isset($_SESSION["gebruikersnaam"])){
		
		//Als de gebruiker niet is ingelogd doorsturen naar login pagina
		header("Location: inloggen.php");
		exit(); 
	}
?>
