<!doctype html>
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

    <title> Accesso </title>
    <style>
        a:link 
        {
            text-decoration: none;
        }


        .principal 
        {
            border: 3px solid #f1f1f1;
            text-align: center;
            height: 80%;
            margin-top:1%;
        }

        .container 
        {
            margin-bottom: 2.5%;

        }

        .imgcontainer {

            margin-top: 2.5%;
        }
/*
        @media screen and (min-width: 601px) {
            .imgcontainer {
                text-align: center;
                width: 96%;
                margin: 2% 0 22px 0;
            }
        }

        @media screen and (max-width: 600px) {
            .imgcontainer {
                text-align: center;
                width: 112%;
                margin: 2% 0 3px 0;
            }
        }*/

        input[type=text],
        input[type=password] {
            width: 350px;
            padding: 10px 18px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        @media screen and (min-width: 601px) {

            input[type=text],
            input[type=password] {

                width: 350px;
                padding: 10px 18px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
        }

        @media screen and (max-width: 600px) {

            input[type=text],
            input[type=password] {
                width: 200px;
                height: 40px;
                /*padding: 5px 9px; */
                margin: 4px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                
            }
        }

        .myButton {
           /* padding: 10px 18px; */
            margin: 8px 0;
            width: 172px;
            height: 35px;
        }

        @media screen and (min-width: 601px) {
            .myButton {
           /*     padding: 10px 18px; */
                margin: 8px 0;
                width: 173px;
                height: 35px;
            }
        }

        @media screen and (max-width: 600px) {
            .myButton {
                /*padding: 10px 18px; */
                margin: 8px 0;
                width: 98px;
                /*height: 30px;*/
                padding-bottom: 25px;
            }
        }

        img.avatar {
            width: 15%;
            border-radius: 100%;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }


        }
    </style>

</head>

<body style="font-family: Helvetica, Sans-Serif">

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
                        <a class="nav-link" href="../index.html#Candidato"><span class="medio">Lavora con noi</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#Contatti"><span class="medio">Contatti</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item a">
                        <a class="nav-link" href="../php/Registrazione.php">
                            <ion-icon name="create"></ion-icon><span class="medio"> Registrati </span>
						</a>
                        
                    </li>
                    <li class="nav-item a active">
                        <a class="nav-link" href="../php/Login.php">
                            <ion-icon name="person"></ion-icon><span class="medio"> Accedi</span><span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <br>
    
    <form action="./GestioneLoginUtenti.php" method="POST">
        <div class="principal">
            <!-- bordo contenintore-->

            <div class="imgcontainer">
                <img src="../assets/utente_grigio.png" alt="Avatar" class="avatar">
            </div>
            <br>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <br>
                <input class="form-control" type="text" placeholder="Inserisci l'Username" name="u" maxlength="12" required>
                <br>
                <label for="psw"><b>Password</b></label>
                <br>
                <input class="form-control" type="password" placeholder="Inserisci la Password" name="psw" maxlength="32" minlength="4" required>
                <br>
                <button onclick="window.location.href='../index.html';" type="button" class="btn btn-danger myButton">Esci</button>
                <button type="submit" name="submit" class="btn btn-secondary myButton">Accedi</button>
                <br>
                <a href="./Registrazione.php" style="font-size:95%; ">Non sei registrato? Clicca qui!</a>

            </div>
        </div>
    </form>

</body>

</html>
