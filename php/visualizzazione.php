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
    table {
      max-width: 100%;
      background-color: transparent;
    }

    .center_div {
      margin: 0 auto;
      width: 67%;
      /* value of your choice which suits your alignment */
      margin-top: 5px;
    }

    .center {
      text-align: center;
    }

    p {
      font-size: 20px
    }
  </style>

  <title>Mio pre-ordine</title>

</head>

<body style="font-family: Helvetica, Sans-Serif">

  <?php
  //error_reporting(0);
  $login = './Login.php';
  session_start();

  $username = $_SESSION['username'];
  if (empty($username)) {
    header('Refresh: 3; url=' . $login);
    exit("<h2>Errore accesso non autorizzato!</h2>");
  }

  ?>

  <div id="menu">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


        <a class="navbar-brand" href="#">

          <img class="logoMenu" src="../assets/logoMenu.png" alt="logo" /> <!-- menu grande -->

        </a>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item active">

            <a class="nav-link" href="#ordini"><span class="medio">I miei pre-ordini</span><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./compra.php"><span class="medio">Compra @COIN</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../index.html#Contatti"><span class="medio">Contattataci <ion-icon name="paper-plane"></ion-icon></span></a>
          </li>
        </ul>

        <!-- 
     
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item a">
       <a class="nav-link" href="Login.php"><ion-icon name="lock"></ion-icon><span class="medio"> Benvenuto/a <?php echo $username ?> </span></a>
      </li>
    </ul> -->

        <!-- dropdown button -->
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item a">
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <ion-icon name="lock"></ion-icon><span class="medio"> Benvenuto/a <?php echo $username ?> </span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./modifica.php">Cambia password</a>
                <a class="dropdown-item" href="./logout.php">Log-out</a>
              </div>
            </div>
          </li>
        </ul>

      </div>
    </nav>
  </div>
  <br>

  <div class="center_div">

    <div class="row center">
      <!--<div class="col-sm-6 col-md-4"> -->
      <div class="col">
        <div class="thumbnail">
          <img src="../assets/Borsa.jpg" width="70%" height="70%" alt="img1">
          <div class="caption">
            <h3>Pre-Ordina</h3>
            <p>Vuoi pre-ordinare la nostra moneta @COIN?<br> Pre-ordina finchè sei in tempo! <br> </p>
            <p class="center"><a href="./compra.php" class="btn btn-success" role="button">Pre-ordina ora</a></p>
          </div>
        </div>
      </div>
      <br>

      <div class="col center">
        <div class="thumbnail">
          <img src="../assets/investimento.jpeg" width="70%" height="70%" alt="img2">
          <div class="caption">
            <h3>Vuoi conoscere di più?</h3>
            <p>Guarda meglio il nostro sito o chiedi a noi per avere altre info su @COIN</p>
            <p class="center"><a href="../index.html" class="btn btn-info" role="button">Info</a> <a href="../index.html#Contatti" class="btn btn-default" role="button">Contattaci</a></p>
          </div>
        </div>
      </div>
      <br>

      <div>
        <?php
        require './Config.php';
        require './Connect.php';


        //stampa tutti i valori
        $query = "SELECT * FROM Ordini JOIN Clienti ON Ordini.ID_cliente=Clienti.ID_cliente where username='" . $username . "'";
        $ris = mysqli_query($db, $query) or die("Query fallita 1");

        echo " <style> th,td{font-family: Helvetica, Sans-Serif;padding: 10px;} h1{font-family: Helvetica, Sans-Serif; font-size:20pt; margin:2px 2px 2px 10px; } div{width:100%;}button{font-family: Helvetica, Sans-Serif; font-size:20pt; margin:2px 2px 2px 10px; }</style>";


        echo "<a name='ordini'><br><h1 >I miei pre-ordini</h1></a><br>";
        echo "<div>";
        echo "<table class='table' border='1'; width='90%' height='80%' >
					<thead class='thead-dark'>";
        echo " 		<tr>
							<th>ID</th> 
							<th>Data e ora</th> 
                   			<th>@COIN</th>
							<th>Prezzo in euro</th>
				 		 </tr></thead><tbody>";

        while ($riga = mysqli_fetch_array($ris, MYSQLI_ASSOC)) {
          $prezzo = $riga['coin'] / $riga['prezzo_unitario_euro'];

          echo "<tr>";
          echo "	<td> " . $riga['ID_ordine'] . "</td>";
          echo "	<td> " . date("d-m-Y G:i:s", strtotime($riga['dataOra'])) . "</td>";

          echo "	<td> " . $riga['coin'] . "</td>";
          echo "	<td> " . $prezzo . "</td>
				</tr>";
        }
        echo "</tbody></table><br><br>";

        ?>
        <button onclick="window.location.href='../index.html';" type="button" class="btn btn-danger">Ritorno alla home</button>
      </div>
    </div>
  </div>
  <a href="/#" class="scrolltotop"><img src="../assets/frecciasu2.png" align="right" width=30></a>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function() {

    $(window).scroll(function() {
      if ($(this).scrollTop() > 250) {
        $('.scrolltotop').fadeIn();
      } else {
        $('.scrolltotop').fadeOut();
      }
    });
    $('.scrolltotop').click(function() {
      $("html, body").animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
</script>