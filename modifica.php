<!doctype html>
<html>
  <head>
  
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
 	
  <!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    
     <!-- Icone -->
    <script src="https://unpkg.com/ionicons@4.2.1/dist/ionicons.js"></script>
    
    <link href="StyleMenu.css" rel="stylesheet" type="text/css">    
    
	<style>

	.center_div
    {
		margin: 0 auto;
		width:67% /* value of your choice which suits your alignment */
        margin-top: 5px;
	}
    .center
    {
    	text-align:center;
    }
    p
    {
		font-size:20px;
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
			
	</style>

    <title>Compra @COIN</title>
    
  </head>
  
  <body style="font-family: Helvetica, Sans-Serif">
  
  <?php 
  		$login = 'Login.php';
  		session_start();
    
    	$username=$_SESSION['username'];
        if(empty($username))
        {
        	header('Refresh: 3; url=' . $login);
            exit("<h2>Errore accesso non autorizzato!</h2>");
        }

  ?>
  
<div id="menu">

 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <img class="structural" src="logoMenu.png" alt="logo"/>
  
       <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

      
     <a class="navbar-brand" href="#"> 
    
	 <img class="logoMenu" src="logoMenu.png" alt="logo"/> <!-- menu grande -->
     
 	 </a> 
  	  
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

     <li class="nav-item ">
 
    	 <a class="nav-link" href="visualizzazione.php#ordini"><span class="medio">I miei pre-ordini</span></a>
     </li>
     <li class="nav-item active">
     	<a class="nav-link" href="compra.php"><span class="medio">Compra @COIN</span><span class="sr-only">(current)</span></a>
     </li>
	
     <li class="nav-item" >
     	<a class="nav-link" href="http://luis22.altervista.org/#Contatti"><span class="medio">Contattataci <ion-icon name="paper-plane"></ion-icon></span></a>
     </li>
     </ul>
     
     <!-- dropdown button -->
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item a">
    <div class="dropdown">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <ion-icon name="lock"></ion-icon><span class="medio"> Benvenuto/a <?php echo $username ?> </span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="modifica.php">Cambia password</a>
    <a class="dropdown-item" href="logout.php">Log-out</a>
  </div>
</div>
</li>
</ul>    
    
 </div>
 </nav>
 </div>
 <br>
 
<div class="center_div">

	<h2>Modifica la tua password</h2>
    	<br><br>
        

	<form class="form-inline" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<div class="form-row align-items-center">
			<div class="col-auto">
    
    			<div class="input-group mb-2 mr-sm-2">
  			
  					<input class="form-control" placeholder="Vecchia password" type="password" name="vecchia" maxlength="32" minlength="4" required>
  			
 				 </div>  
   			 </div>
  
 			 <div class="col-auto">
   				 <div class="input-group mb-2 mr-sm-2">
                 
  	
  					<input class="form-control" placeholder="Nuova password" type="password" name="nuova" maxlength="32" minlength="4" required>

  				</div>
             </div>
             	<button type="submit" class="btn btn-primary mb-2" name="submit" >Cambia password</button> &nbsp; <button  onclick="window.location.href='index.html';" type="button" class="btn btn-danger mb-2" >Ritorno home</button><br>
		</div>

	

 </form>





<?php
	require'Config.php';
	require'Connect.php';
    
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['vecchia']) AND !empty($_POST['nuova']))
		{	
                	
			$vecchia=$_POST['vecchia'];
			$nuova=$_POST['nuova'];
		}
		else 
			exit("<br><h3>Campo non settato !</h3>");
                    
				
    //acquisisco la password del cliente
	$query="SELECT * FROM Clienti where username='".$username."'";
    $ris=mysql_query($query) or die("Query fallita");
	
                
	while($riga=mysql_fetch_array($ris,MYSQL_ASSOC))
	{		
		$psw=$riga['password'];
	}
    if($psw != md5($vecchia))          
    	exit("<h3>Errore vecchia password errata!</h3>");            
	else
    {
		$query2="Update Clienti set password='".MD5($nuova)."' where username='".$username."';";
         
		$ris=mysql_query($query2) or die("Query fallita 2");
				
		echo("<br><h4>Cambio password avvenuto !</h4>");
	}		
}
	
?>

</div>

 </body>
 
</html>


