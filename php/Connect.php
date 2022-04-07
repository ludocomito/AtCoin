<?php

/* **************DEPRECATO**********************
$conn=mysql_connect($dbhost,$dbuser,$dbpassword);
if(!$conn)
	die ("Impossibile connettersi al server");

$db=mysql_select_db($dbname,$conn);
if(!$db)
	die("Impossibile selezionale database".mysql_error());
*/  
$db= new mysqli($dbhost,$dbuser,$dbpassword,$dbname) or die("Impossibile connettersi al server");
?>
