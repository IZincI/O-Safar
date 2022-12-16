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
    <title>O'Safar</title>
</head>

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/styleGeoffrey.css">

<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

<!-- Files CSS -->

<link rel="stylesheet" href="public/css/recruitment.css">

<body>

    <?php
    include('includes/navbar.php');
    ?>

    <div class="gap-header"></div>

    <!--  header recruitment start -->
    <div id="head-block-recruitment">

        <div>
            <h1 class="text-center-justify">Recrutement</h1>
        </div>

        <div>
            <p class="text-center-justify">Envie de nous rejoindre ?</p>
        </div>

        <div>
            <p class="text-center-justify">Venez au sein de notre équipe professionnelle.</br>
                Montez à bord</br>
                nous sommes à la recherche de futurs talents<br /></p>
        </div>
    </div>


    <!--  header recruitment end -->

    <div class="Recruitment-1">
        <img id="Recruitment-1-pic" src="./public/imgs/Background/recruitment/Recruitment_1.png" alt="">
    </div>

    <!--- Form recruitment --->

    <div class="block-search" id="recruitment-form">

        <!-- left part form start -->

        <div class="left-recruitment-form">
            <div class="container-pic-2"><img id="pic-2" src="./public/imgs/Background/recruitment/Recruitment_2.png" alt=""></div>
            <div class="container-pic-3"><img id="pic-3" src="./public/imgs/Background/recruitment/Recruitment_3.png" alt=""></div>
        </div>

        <!-- left part form end -->

        <div class="right-recruitment-form">
            <h1 style="color:white">Rejoignez-nous</h1>
            <div class="bloc-recruitment-form">
                <input type="text" placeholder="Nom" name="lname">
                <input type="text" placeholder="Prenom" name="fname">
            </div>
            <div class="bloc-recruitment-form">
                <input type="text">
                <input type="email" placeholder="Email" name="email">
            </div>

            <div>
                <textarea name="" id="" value="etstestst" class="text-recruitment-form" placeholder="Laissez-nous une trace de votre voyage"></textarea>
            </div>

            <div class="right-recruitment-button-form">

                <label class="custom-file-upload">
                    <input type="file" />
                    Votre CV
                </label>


                <input type="submit" value="Envoyez">

            </div>

        </div>


    </div>

    <?php
    include('includes/footer.php');

    ?>
</body>

</html>