<?php
include('config/app.php');
include('codes/authentication_code.php');
$auth->isLoggedIn();

include('includes/header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="./public/css/style-user.css">

<body>

    <div id="icon-login">
        <a href="./">
            <iconify-icon id="icon-login" icon="akar-icons:cross"></iconify-icon>
        </a>
    </div>

    <div class="container-login">

        <div id="picture-login"></div>
        <div class="right-login-container">
            <?php include('message.php'); ?>
            <div class="card">
                <div>
                    <h1>Créer un compte</h1>
                </div>

            </div>
            <div>

                <form action="" method="POST">
                    <div class="form-contact">
                        <div class="left-side-form-contact">
                            <div class="mb-3">

                                <input type="text" name="fname" class="input-login" placeholder="Nom" />
                            </div>

                            <div class="mb-3">

                                <input type="text" name="lname" class="input-login" placeholder="Prenom" />
                            </div>

                            <div class="mb-3">

                                <input type="email" name="email" class="input-login" placeholder="E-mail" />
                            </div>

                            <div class="mb-3">

                                <input type="password" name="password" class="input-login" placeholder="Mot de passe" />
                            </div>

                            <div class="mb-3">

                                <input type="password" name="confirm_password" class="input-login" placeholder="Confirmez mot de passe" />
                            </div>
                        </div>
                        <div class="right-side-form-contact">
                            <div class="mb-3">
                                <button type="submit" name="update_btn" class="button-rounded">Créer le compte</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>

    </div>

</body>

<script src="public/js/master.js" defer></script>

</html>