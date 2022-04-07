<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<title>Registrazione</title>
	<style>
		.max {
			font-family: Helvetica, Sans-Serif;
			font-size: 12px;
		}

		p {
			font-family: Helvetica, Sans-Serif;

		}

		/*     #contenitore 
            {
         	  	width:100%;
            }
            
            
            #contenitore .divisione
            {
         	  	width:50%;
            	float: left;
            }
            
            */
		.center_div {
			margin: 0 auto;
			width: 85%
				/* value of your choice which suits your alignment */
		}


		h2 {
			font-family: Helvetica, Sans-Serif;

		}

		h3 {
			font-family: Helvetica, Sans-Serif;
			color: darkred;
			font-size: 20px;

		}

		h4 {
			font-family: Helvetica, Sans-Serif;
			color: green;
			font-size: 20px;

		}

		.destra {

			float: right;

		}

		label {
			font-weight: bold;
		}
	</style>
</head>
<br>

<body style="font-family: Helvetica, Sans-Serif">

	<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	//error_reporting (0); leva errori di sistema esempio deprecated

	$yy = date('Y') - 18; //controllo data nascita maggiorenne
	$yyyy = date('Y') - 100; //controllo data nascita maggiorenne
	?>

	<div class=" center_div">

		<h2>Registrazione Utente</h2><br>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">



			<div class="form-group">
				<label> Username <span class="max">(massimo 12 caratteri)</span>*</label>
				<input class="form-control" type="text" placeholder="Inserisci l'username" name="username" maxlength="12" required><br>

				<label>Cognome * </label>
				<input class="form-control" type="text" placeholder="Inserisci il cognome" name="cognome" maxlength="30" required><br>

				<label>Nome *</label>
				<input class="form-control" type="text" placeholder="Inserisci il nome" name="nome" maxlength="30" required><br>

				<label>Data di nascita *</label>

				<input class="form-control" type="date" placeholder="Inserisci la tua data di nascita" name="nascita" min="<?php echo date($yyyy . '-m-d'); ?>" max="<?php echo date($yy . '-m-d'); ?>" required><br>

				<label> E-Mail *</label>
				<input class="form-control" placeholder="Inserisci l'email" type="email" name="email" maxlength="40" required><br>

				<label> Nazione </label>
				<input class="form-control" type="text" placeholder="Inserisci la tua nazione" name="nazione" maxlength="30"><br>

				<label> Città </label>
				<input class="form-control" type="text" placeholder="Inserisci la tua citta'" name="citta" maxlength="30"><br>

				<label> Indirizzo </label>
				<input class="form-control" type="text" placeholder="Inserisci il tuo indirizzo" name="indirizzo" maxlength="40"><br>

				<label> CAP </label>
				<input class="form-control" type="text" placeholder="Inserisci il tuo CAP" name="CAP" maxlength="5" minlength="5"><br>

				<label> Cellulare </label>
				<input class="form-control" type="tel" placeholder="3XX XXXXXXX" name="cellulare" size="number" maxlength="10"><br>

				<label> Password *</label>
				<input class="form-control" placeholder="Inserisci la password" type="password" name="psw" maxlength="32" minlength="4" required><br>

				<label> Conferma Password *</label>
				<input class="form-control" placeholder="Conferma la tua password" type="password" name="cpsw" maxlength="32" minlength="4" required><br>

				<br>
				* Campi obbligatori
				<br><br>
			</div>
			<input class="btn btn-danger" type="reset" value="Reset"> <input type="submit" class="btn btn-primary" name="submit" value="Salva">

			<button onclick="window.location.href='../index.html';" type="button" class="btn btn-info destra">Ritorno al menu</button>

		</form>

		<?php

		require './Config.php';
		require './Connect.php';

		$login = "./Login.php";

		if (isset($_POST['submit'])) {
			if (!empty($_POST['username']) && !empty($_POST['cognome']) && !empty($_POST['nome']) && !empty($_POST['nascita']) && !empty($_POST['email']) && !empty($_POST['psw']) && !empty($_POST['cpsw'])) {
				$username = $_POST['username'];
				$cognome = $_POST['cognome'];
				$nome = $_POST['nome'];
				$nascita = $_POST['nascita'];
				$email = $_POST['email'];
				$psw = $_POST['psw'];
				$cpsw = $_POST['cpsw'];

				if (!empty($_POST['citta']))
					$citta = $_POST['citta'];
				else
					$citta = NULL;

				if (!empty($_POST['nazione']))
					$nazione = $_POST['nazione'];
				else
					$nazione = NULL;

				if (!empty($_POST['cellulare']))
					$cellulare = $_POST['cellulare'];
				else
					$cellulare = NULL;

				if (!empty($_POST['indirizzo']))
					$indirizzo = $_POST['indirizzo'];
				else
					$indirizzo = NULL;

				if (!empty($_POST['CAP']))
					$CAP = $_POST['CAP'];
				else
					$CAP = NULL;
			} else
				exit("<br><h3>Campi principali non settati !</h3>");

			if (!empty($cellulare) and !is_numeric($cellulare))
				exit("<br><h3>Non hai inserito numeri nel campo del cellulare!</h3>");

			if (!empty($CAP) and !is_numeric($CAP))
				exit("<br><h3>Non hai inserito numeri nel campo del CAP!</h3>");


			if ((!eregi("^([a-z0-9\._-]+)(@[a-z0-9.-]+)(\.{1}[a-z]{2,4})$", $_POST['email'])))
				exit("<br><h3>Attenzione, formato email non valido</h3>");


			if ($psw != $cpsw)
				exit("<br><h3>Conferma password diversa dalla password!</h3>");


			$query1 = "SELECT username FROM Clienti WHERE username='" . $username . "'";
			$ris = mysql_query($query1) or die("Query fallita 1");
			if (mysql_num_rows($ris) > 0)
				exit("<br><h3>Username già esistente!</h3>");

			else {
				$query = "INSERT INTO Clienti(username,cognome,nome,dataNascita,citta,nazione,indirizzo,CAP,cellulare,email,password) VALUES ('" . $username . "','" . $cognome . "','" . $nome . "','" . $nascita . "','" . $citta . "','" . $nazione . "','" . $indirizzo . "','" . $CAP . "','" . $cellulare . "','" . $email . "','" . MD5($psw) . "');";
				$ris = mysql_query($query) or die("Query fallita 0");

				echo ("<br><h4>Registrazione avvenuta con successo !</h4>");
				header('Refresh: 0; url=' . $login);
			}



		?>

			<br><button onclick="window.location.href='./Login.php';" type='button' class='btn btn-success'>Accedi</button><br>
		<?php

		}

		?>

	</div>



</body>

</html>