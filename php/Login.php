<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title> Accesso </title>
    <style>
        a:link {
            text-decoration: none;
        }


        .principal {
            border: 3px solid #f1f1f1;
            text-align: center;
            height: 550px;
        }

        .container {
            /*padding: 16px 16px 16px 16px;*/
            margin: 12px 0 22px 0;
            width: 96%;
        }

        .imgcontainer {
            text-align: center;
            width: 96%;
            margin: 12px 0 22px 0;
        }

        @media screen and (min-width: 601px) {
            .imgcontainer {
                text-align: center;
                width: 96%;
                margin: 12px 0 22px 0;
            }
        }

        @media screen and (max-width: 600px) {
            .imgcontainer {
                text-align: center;
                width: 96%;
                margin: 12px 0 3px 0;
            }
        }

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
                padding: 5px 9px;
                margin: 4px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
        }

        button {
            background-color: #808080;
            color: white;
            padding: 10px 18px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 172px;
            height: 35px;
        }

        @media screen and (min-width: 601px) {
            button {
                background-color: #808080;
                color: white;
                padding: 10px 18px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 172px;
                height: 35px;
            }
        }

        @media screen and (max-width: 600px) {
            button {
                background-color: #808080;
                color: white;
                padding: 10px 18px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 96px;
                height: 30px;
            }
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: 172px;
            padding: 10px 10px;
            background-color: #f44336;
        }

        @media screen and (min-width: 601px) {
            .cancelbtn {
                width: 172px;
                padding: 10px 10px;
                background-color: #f44336;
            }
        }

        @media screen and (max-width: 600px) {
            .cancelbtn {
                width: 96px;
                padding: 10px 10px;
                background-color: #f44336;
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

            .cancelbtn {
                width: 100%;
            }
        }
    </style>

</head>

<body style="font-family: Helvetica, Sans-Serif">

    <h2> Login</h2>

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
                <button onclick="window.location.href='../index.html';" type="button" class="cancelbtn">Cancel</button>
                <button type="submit" name="submit">Accedi</button>
                <br>
                <a href="./Registrazione.php">Non sei registrato? Clicca qui!</a>

            </div>
        </div>
    </form>

</body>

</html>