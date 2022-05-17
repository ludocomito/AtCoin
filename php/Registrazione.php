<!DOCTYPE html>
<html>

  <head>
  
  		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" href="../assets/blockchain.jpg" />

  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		  <!-- jQuery library -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

		<!-- Icone -->
		<script src="https://unpkg.com/ionicons@4.2.1/dist/ionicons.js"></script>

		 
		<link href="../css/StyleMenu.css" rel="stylesheet" type="text/css">

		  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"> <!-- per svg alert -->
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>

		<title>Registrazione</title>
		

		<style>
			.titolo
			{
				color:#383838 !important;
			}	
			a:link 
			{
            	text-decoration: none;
       	 	}
			.max{
				font-family: Helvetica, Sans-Serif;
				font-size:12px;
			}
			p{
				font-family: Helvetica, Sans-Serif;
			
			}

			.center_div
            {
				margin: 0 auto;
				width:85%; /* value of your choice which suits your alignment */
			}
            

			h2{
				font-family: Helvetica, Sans-Serif;
				font-size: 200%;
			
			}
            h3{
				font-family: Helvetica, Sans-Serif;
                color:darkred;
                font-size:20px;
			
			}
            h4{
				font-family: Helvetica, Sans-Serif;
                color:green;
                font-size:20px;
			
			}
			.destra
			{

				float:right;

			}
            label
            {
            	font-weight: bold;
            }
			@media screen and (min-width: 601px) 
			{
  				.myLink 
				{
    				font-size: 120%; 
					text-align: right;
					
 				}
			}

			@media screen and (max-width: 600px) 
			{
  				.myLink 
				{
					font-size: 100%;
    				text-align: right;
  				}
			}
			
		</style>
  </head>

	<body style="font-family: Helvetica, Sans-Serif" >

    <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<a class="navbar-brand" href="../index.html">
            	<img class="structural" src="../assets/logoMenu.png" alt="logo" />
			</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


                <a class="navbar-brand" href="../index.html">

                    <img class="logoMenu" src="../assets/logoMenu.png" alt="logo" /> <!-- menu grande -->
                </a>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#Progetto"><span class="medio">Il nostro progetto</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#moneta"><span class="medio">La nostra moneta</span></a>
                    </li>
                    <li class="nav-item a">
                        <a class="nav-link" href="../index.html#Candidato"><span class="medio">Lavoro con noi</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#Contatti"><span class="medio">Contatti</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item a active">
                        <a class="nav-link" href="../php/Registrazione.php">
                            <ion-icon name="create"></ion-icon><span class="medio"> Registrati </span><span class="sr-only">(current)</span>
						</a>
                        
                    </li>
                    <li class="nav-item a">
                        <a class="nav-link" href="../php/Login.php">
                            <ion-icon name="person"></ion-icon><span class="medio"> Accedi</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>


				<!-- da visualizzare solo in caso di registrazione -->
		<div id= "MyAlert" class=" center_div" style="margin-bottom: 10px;">
			<h2>Registrazione effettuata !</h2>
			<div class="alert alert-success d-flex align-items-center" role="alert">
            	<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            	<div>
                	<span> &nbsp La registrazione dell'utente è avvenuta con successo !</span>
            	</div>
       		</div>
			
			<button  onclick="window.location.href='Login.php';" type='button' class='btn btn-success' >Accedi</button>
			<button  onclick="window.location.href='../index.html';" type="button" class="btn btn-info " >Ritorno alla home</button>
			<br>
		</div>
		<script> //  hide della schermata di registrazione effettuata
			$("#MyAlert").hide();
		</script>
    <?php
    		//error_reporting (0); leva errori di sistema esempio deprecated
            
			$yy=date('Y')-18; //controllo data nascita maggiorenne
			$yyyy=date('Y')-100; //controllo data nascita maggiorenne 
    ?>
    <br>
	<div id="MyPrincipale" class=" center_div" style="margin-bottom: 10px;">

         
		 <h2 class="titolo">Registrazione Utente</h2> <p class="myLink"style=""><a href="./Login.php">Sei già registrato? Clicca qui!</a> </p>
	
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            
			
            
			<div class="form-group">	
			<label> Username <span class="max">(massimo 12 caratteri)</span>*</label>	
			<input id="username" class="form-control" type="text" placeholder="Inserisci l'username" name="username" maxlength="12" required><br>
			
			<label>Cognome * </label>
			 <input  class="form-control" type="text" placeholder="Inserisci il cognome" name="cognome" maxlength="30" required><br>
			 
			 <label>Nome *</label>  
			 <input class="form-control" type="text" placeholder="Inserisci il nome" name="nome" maxlength="30" required><br>
			 
			 <label>Data di nascita *</label>
			 
             <input class="form-control" type="date" placeholder="Inserisci la tua data di nascita" name="nascita"  min="<?php echo date($yyyy.'-m-d');?>" max="<?php echo date($yy.'-m-d');?>" required><br>
             
			<label> E-Mail *</label>
			<input id="mail" class="form-control"  placeholder="Inserisci l'email" type="email" name="email" maxlength="40" required><br>
			
            <label> Nazione </label> 
			<input class="form-control" type="text" placeholder="Inserisci la tua nazione" name="nazione" maxlength="30" ><br>
            
			<label> Città </label>
			<input class="form-control" type="text" placeholder="Inserisci la tua citta'" name="citta" maxlength="30" ><br>
			
            <label> Indirizzo </label>
			<input class="form-control" type="text" placeholder="Inserisci il tuo indirizzo" name="indirizzo" maxlength="40" ><br>
            
            <label> CAP </label>
			<input id="cap" class="form-control" type="text" placeholder="Inserisci il tuo CAP" name="CAP" maxlength="5" minlength="5" ><br>
            
            <label> Cellulare </label>
			<input id="cell" class="form-control" type="tel" placeholder="3XX XXXXXXX" name="cellulare" size="number" maxlength="10"><br>
            
			<label> Password *</label> 
			<input class="form-control" id="psw" placeholder="Inserisci la password" type="password" name="psw" maxlength="32" minlength="4" required><br>

			<label> Conferma Password *</label>
			<input class="form-control" id="cpsw" placeholder="Conferma la tua password" type="password" name="cpsw" maxlength="32" minlength="4" required><br>

            <br>
			 * Campi obbligatori
			 <br><br> 
			 </div>
			 <input class="btn btn-danger" type="reset" value="Reset"> <input type="submit" id="mySalva" class="btn btn-primary" name="submit" value="Salva">
			 
			<button  onclick="window.location.href='../index.html';" type="button" class="btn btn-info destra" >Ritorno alla home</button>
			 
		</form>
            
            <?php
            
            require 'Config.php';
			require 'Connect.php';
			
            $login="Login.php";
            
			if(isset($_POST['submit']))
			{
				if(!empty($_POST['username']) && !empty($_POST['cognome']) && !empty($_POST['nome']) && !empty($_POST['nascita']) && !empty($_POST['email']) && !empty($_POST['psw']) && !empty($_POST['cpsw']))
				{	
					$username=$_POST['username'];
					$cognome=$_POST['cognome'];
					$nome=$_POST['nome'];
					$nascita=$_POST['nascita'];
					$email=$_POST['email'];
					$psw=$_POST['psw'];
					$cpsw=$_POST['cpsw'];
                    
					if(!empty($_POST['citta']))
						$citta=$_POST['citta'];
					else
						$citta=NULL;
					
					if(!empty($_POST['nazione']))
						$nazione=$_POST['nazione'];
					else
						$nazione=NULL;
					
					if(!empty($_POST['cellulare']))
						$cellulare=$_POST['cellulare'];
					else
						$cellulare=NULL;
                        
                    if(!empty($_POST['indirizzo']))
						$indirizzo=$_POST['indirizzo'];
					else
						$indirizzo=NULL;
					
					if(!empty($_POST['CAP']))
						$CAP=$_POST['CAP'];
					else
						$CAP=NULL;

				}
				else 
					exit("<br><h3>Campi principali non settati !</h3>");
                    
				if (!empty($cellulare) AND !is_numeric($cellulare))
				{
				?>
					<script>
						$("#cell").val(("")).attr("placeholder","Non hai inserito numeri !"); 
						$("#cell").attr("class","form-control is-invalid");
						$("#cell").focus();
					</script> 
				<?php
					exit ("<br><h3>Non hai inserito numeri nel campo del cellulare!</h3>");
				}
  					
                if (!empty($CAP) AND !is_numeric($CAP))
				{
				?>
					<script>
						$("#cap").val(("")).attr("placeholder","Non hai inserito numeri !"); 
						$("#cap").attr("class","form-control is-invalid");
						$("#cap").focus();
					</script> 
				<?php
					exit ("<br><h3>Non hai inserito numeri nel campo del CAP!</h3>");

				}   
                    
                
				/*_match("/^([a-z0-9\._-]+)(@[a-z0-9.-]+)(\.{1}[a-z]{2,4})$", $_POST['email'])))
					exit("<br><h3>Attenzione, formato email non valido</h3>");*/
   	            
                
                if($psw!=$cpsw)
				{
					?>
					<script>
						$("#psw").val(("")).attr("placeholder","Password diverse !"); 
						$("#psw").attr("class","form-control is-invalid");
						$("#psw").focus();

						$("#cpsw").val(("")).attr("placeholder","Password diverse !"); 
						$("#cpsw").attr("class","form-control is-invalid");
					</script> 
				<?php
					exit("<br><h3>Conferma password diversa dalla password!</h3>");
				}
				
				
                $query1="SELECT username FROM Clienti WHERE username='".$username."'";
				$ris=mysqli_query($db,$query1) or die("Query fallita 1");
                if(mysqli_num_rows($ris)>0)
				{
					?>
					<script>
						$("#username").val(("")).attr("placeholder","Username già esistente !"); 
						$("#username").attr("class","form-control is-invalid");
						$("#username").focus();
					</script> 
				<?php
                	exit("<br><h3>Username già esistente!</h3>");
				}
                
                else
                {
               		$query="INSERT INTO Clienti(username,cognome,nome,dataNascita,citta,nazione,indirizzo,CAP,cellulare,email,password) VALUES ('".$username."','".$cognome."','".$nome."','".$nascita."','".$citta."','".$nazione."','".$indirizzo."','".$CAP."','".$cellulare."','".$email."','".MD5($psw)."');";		
					$ris=mysqli_query($db,$query) or die("Query fallita 0");
				
					//header('Refresh: 0; url=' . $login); //HEADER DEVE SEMPRE PRECEDERE OUTPUT
                    echo("<br><h4>Registrazione avvenuta con successo !</h4>");
				?>
					<script>
        				$("#MyPrincipale").hide(); 
						$("#MyAlert").show("slow");
					</script>
                <?php 

				}
				?>
 
                <br><button  onclick="window.location.href='Login.php';" type='button' class='btn btn-success' >Accedi</button><br>
			<?php 
            
          	}
            
            ?>
            
            </div>	

	
	</body>
	
</html>
<script>//controllo psw
/*$(document).ready(function(){
  $("form").submit(function(){
    alert("Submitted");
	//if($(#psw).val()==$(#cpsw).val())
  });
});
*/
	
</script>

