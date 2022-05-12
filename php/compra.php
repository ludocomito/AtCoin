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
      font-size: 20px;
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
  </style>

  <title>Compra @COIN</title>

</head>

<body style="font-family: Helvetica, Sans-Serif">

  <?php
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

      <img class="structural" src="../assets/logoMenu.png" alt="logo" />

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


        <a class="navbar-brand" href="#">

          <img class="logoMenu" src="../assets/logoMenu.png" alt="logo" /> <!-- menu grande -->

        </a>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item ">

            <a class="nav-link" href="visualizzazione.php#ordini"><span class="medio">I miei pre-ordini</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#moneta"><span class="medio">Compra @COIN</span><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../index.html#Contatti"><span class="medio">Contattataci <ion-icon name="paper-plane"></ion-icon></span></a>
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

    <h2>Pre-ordina la nostra moneta @COIN</h2>
    <p>Ricorda che al momento della sua uscita @COIN avrà il valore di 10€.</p><br><br>


    <form class="form-inline" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
      <div class="form-row align-items-center">
        <div class="col-auto">

          <div class="input-group mb-2 mr-sm-2">

            <input type="number" class="form-control" placeholder="Euro" min="0.1" max="9999999999.99" step="0.01" name="euro" id="euro" onchange="myFunction()" required>
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">€</span>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="input-group mb-2 mr-sm-2">


            <input type="number" class="form-control" placeholder="@COIN" name="coin" id="coin" readonly>
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">@COIN</span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success mb-2" name="submit" value="Compra Ora">Compra Ora</button> &nbsp; <button onclick="window.location.href='./visualizzazione.php';" type="button" class="btn btn-danger mb-2">Ritorno all'elenco</button><br>
      </div>



    </form>





    <?php
    require './Config.php';
    require './Connect.php';

    if (isset($_POST['submit'])) {
      if (!empty($_POST['euro'])) {

        $euro = $_POST['euro'];
        $prezzo_unitario_euro = 10;
        $coin = $euro * $prezzo_unitario_euro;
      } else
        exit("<br><h3>Campo non settato !</h3>");

      if (!empty($euro) and !is_numeric($euro))
        exit("<br><h3>Non hai inserito numeri nel euro!</h3>");


      //acquisisco l'id cliente
      $query = "SELECT ID_cliente FROM Clienti where username='" . $username . "'";
      $ris = mysqli_query($db, $query) or die("Query fallita");


      while ($riga = mysqli_fetch_array($ris, MYSQLI_ASSOC)) {
        $ID_cliente = $riga['ID_cliente'];
      }



      $query2 = "INSERT INTO Ordini(coin,prezzo_unitario_euro,ID_cliente) VALUES ('" . $coin . "','" . $prezzo_unitario_euro . "','" . $ID_cliente . "');";

      $ris = mysqli_query($db, $query2) or die("Query fallita 2");

      echo ("<br><h4>Pre ordinazione di " . $coin . " @COIN avvenuta con successo !</h4>");
    }

    ?>

  </div>

  
</body>

</html>

<script type="text/javascript">
  function myFunction() 
  {

    var x = document.getElementById("euro");
    document.getElementById("coin").value = x.value * 10;
  }

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