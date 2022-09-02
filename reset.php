<?php
	// J'initialise les sessions
	session_start();
	
	// Je les détruit
	session_unset();
	session_destroy();
	
	// Je redirige vers mon formulaire
	header("Location: correction-tp.php");
	
	// Je stoppe le code
	exit;