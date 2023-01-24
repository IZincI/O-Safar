<?php
include('config/app.php');
include('codes/authentication_code.php');


include('includes/header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<link rel="stylesheet" href="./public/css/style-user.css">

<link rel="stylesheet" href="./public/css/style-general.css">

<body>

    <div id="icon-login">
        <a href="./">
            <iconify-icon id="icon-login" icon="akar-icons:cross"></iconify-icon>
        </a>
    </div>

    <div class="container-login">



        <!-- Left Side Container -->

        <div id="picture-login"></div>

        <!-- Right Side Container -->
        <div class="right-login-container">



            <div>
                <h1>Se Connecter</h1>
            </div>


            <form action="" method="post">
                <div class="form-login">

                    <div><input class="input-login" name="email" type="email" placeholder="Email"></div>

                    <div><input class="input-login" type="password" name="password" placeholder="Mot De Passe"></div>

                    <div><input type="submit" name="login_btn" value="Se connecter" /></div>

                </div>
            </form>

            <?php // include('message.php'); 
            ?>



            <div class="line-create-account">
                <p class="text-login">Vous n’avez pas encore créer de compte ?</p>
                <a href="./register.php"><input type="button" value="Créer un compte"></a>
            </div>

        </div>


        <!-- <div class="col-md-6">
            
            <div class="card">
                <div class="card-header">
                    <h4>Se connecter</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">

                        <input type="text" name="email" class="form-control" placeholder="Entrez votre émail" />
                    </div>

                    <div class="mb-3">
                        <label for="">Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" />
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="login_btn" class="btn">Se connecter</button>
                    </div>

                </form>

            </div>
        </div> -->

    </div>


    <script src="public/js/master.js" defer></script>
</body>

</html>