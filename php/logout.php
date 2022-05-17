<!doctype html>
<html>
	<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" href="../assets/blockchain.jpg" />
        
		<title> Log-out </title>
		<style>
            
        
			.principal
			{
				border: 3px solid #f1f1f1;
				text-align: center;
				height:450px;	
			}
            .green{ color:green;}
            .red{ color:darkred;}
		</style>
        
		<?php 
        
  			$login = './Login.php';
            $index='../index.html';
  			session_start();
    
    		$username=$_SESSION['username'];
      	  if(empty($username))
      	  {
      		  	header('Refresh: 3; url=' . $login);
      	        exit("<h2 class='red'>Errore accesso non autorizzato!</h2>");
          }

 		 ?>
	</head>
    
	<body style="font-family: Helvetica, Sans-Serif">
	
		


<div class="principal">
	
    <h2 class="green"> Log-out avvennuto con successo</h2>
	<?php  session_destroy();  
    
    header('Refresh: 3; url=' . $index);
   
   ?>
</div>

	</body>
	
</html>




