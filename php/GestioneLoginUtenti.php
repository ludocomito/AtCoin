<!doctype html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php require './CssScript.php'; ?>
	<style>
		.principal {
			border: 3px solid #f1f1f1;
			text-align: center;
			margin: 0 12px 0 12px;
			height: 500px;
		}

		h3 {
			font-family: Helvetica, Sans-Serif;
			color: darkred;
			font-size: 25px;
		}

		h4 {
			font-family: Helvetica, Sans-Serif;
			color: green;
			font-size: 25px;

		}
	</style>



	<title>Gestione login</title>

</head>

<body style="font-family: Helvetica, Sans-Serif">

	<?php
	require './Config.php';
	require './Connect.php';
	$menu = '../index.html';
	$login = './Login.php';
	$index = "./visualizzazione.php";

	if (isset($_POST['submit'])) {
		if (isset($_POST['u']) && isset($_POST['psw'])) {
			$username = $_POST['u'];
			$psw = $_POST['psw'];
		}
	}
	$query = "select * from Clienti where username='" . $username . "' AND password='" . MD5($psw) . "'";
	$ris = mysql_query($query) or die("Query fallita 1");

	if (mysql_num_rows($ris) > 0) {
		session_start();
		$_SESSION['username'] = $username;



		echo "<div class='principal'>";
		echo "<br><br><br><h4>Login effettuato!</h4><br>";
		echo "<h4>Benvenuto/a " . $_SESSION['username'] . "</h4><br>";

		header('Refresh: 1; url=' . $index);
	?>
		<button onclick="window.location.href='./visualizzazione.php';" type="button" class="btn btn-primary destra">Continua</button>
	<?php
		echo "</div>";
	} else {
		echo "<div class='principal'>";
		echo "<br><br><br><h3>login non effettuato username o password errati!</h3>";

		header('Refresh: 3; url=' . $login);
		exit("<br>Ritorno alla pagina di login tra 3 secondi");
		echo "</div>";
	}
	?>