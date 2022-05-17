<!doctype html>
<html>
	<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" href="../assets/blockchain.jpg" />
        
		<title> Invio contatti </title>
		<style>
            
        
			.principal
			{
				border: 3px solid #f1f1f1;
				text-align: center;
				height:450px;	
			}
            .green{ color:green;}

		</style>
        
		<?php 
        
            $index='../index.html';

 		 ?>
	</head>
    
	<body style="font-family: Helvetica, Sans-Serif">
	
		


<div class="principal">
	
    <h2 class="green"> Messaggio inviato inviato con successo!<br>Verrai contattato al più presto da un nostro specialista.</h2>
  
  <?php  
  
    header('Refresh: 3; url=' . $index);
   
   ?>
</div>

	</body>
	
</html>

