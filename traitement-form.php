<?php
session_start();

 
 $_SESSION["montantTotal"][] = $_POST["prix"];

 header("Location: correction-tp.php");
 
 exit; 

 
 


	