<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Montserrat font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link href="public/css/navGeoffrey.css" rel="stylesheet" type="text/css">

    <link href="public/css/styleGeoffrey.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- nav bar mobile start -->
    <div class="header-area filterOrange" id="nav-bar-mobile">
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="./index.php" onclick="closeNav()">Accueil</a>
                <a href="./#offre" onclick="closeNav()">Offres</a>
                <a href="./#package" onclick="closeNav()">Package</a>
                <a href="./contact.php" onclick="closeNav()">Contact</a>
            </div>

        </div>

        <div class="nav-block">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>

        <div class="nav-block">
            <h1>O'Safar</h1>
        </div>





        <!-- <form action="" method="POST">
<button type="submit" name="logout_btn" class="dropdown-item">Se déconnecter</button>
</form> -->
    </div>

    <!-- nav bar mobile end -->

    <!-- nav bar desktop -->
    <div class="header-area filterOrange" id="navbar">

        <!--<div class="filterOrange BackgroundPattern"> -->
        <div class="logo nav-block">

            <h1>O'safar</h1>
        </div>

        <div class="links-container nav-block">

            <ul class="links">


                <!--
                <div>
                    <li><a class="link-style" href="./test.php">test</a></li>
                </div>
                -->
                <div>
                    <li><a class="link-style" href="./index.php" class="active">Accueil</a></li>
                </div>
                <div>
                    <li><a class="link-style" href="./#offre">Offres</a></li>
                </div>
                <div>
                    <li><a class="link-style" href="./#package">Packages</a></li>
                </div>
                <div>
                    <li><a class="link-style" href="./contact.php">Contact</a></li>
                </div>
            </ul>
        </div>



        <div class="logo nav-block">
            <div id="block-profile">
                <div id="profile">


                    <?php

                    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true) {
                        echo " <div class='logo'>
                        <iconify-icon icon='bi:person-circle' width='40'></iconify-icon>
                        </div>";
                        echo "<h3> Bonjour, " . $_SESSION['auth_user']['user_fname'] . "</h3>";

                    ?>

                </div>

                <div id="button-logout">
                    <form action="" method="POST">
                        <a class="selection-nav">
                            <div class="selection-nav">
                                <button type="submit" name="logout_btn" class="button-square">Se déconnecter</button>
                            </div>

                    </form>
                    </a>
                    <?php


                        if ($_SESSION['auth_role'] != 0) {
                            echo '
                            <a class="selection-nav" href="./admin/Backindex.php">
                            <button class="button-square">Espace Admin</button>
                        </a>';
                        }
                    ?>

                    <a class="selection-nav" href="my-profile.php">
                        <button class="button-square">Mon Profil</button>
                    </a>
                <?php
                    } else {
                        echo " <a href='./login.php'>
                
                                    <div class='logo'>
                                        <iconify-icon icon='bi:person-circle'width='40'></iconify-icon>
                                    </div>
                
                                </a>";
                    }

                ?>

                </div>


            </div>



            <!-- <form action="" method="POST">
            <button type="submit" name="logout_btn" class="dropdown-item">Se déconnecter</button>
        </form> -->
        </div>
        <!--<?php if (isset($_SESSION['authenticated'])) : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    <?= $_SESSION['auth_user']['user_fname'] . ""
                        . $_SESSION['auth_user']['user_lname']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="<?php base_url('my-profile.php') ?>" >Mon profil</a></li> 
                        <li><a class="dropdown-item" href="my-profile.php" >Mon profil</a></li>
                        
                        <li>
                            <form action="" method="POST">
                                <button type="submit" name="logout_btn" class="dropdown-item">Se déconnecter</button>
                            </form>
                        </li>
                    </ul>
                </li>

                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url('login.php') ?>" >Se connecter</a> 
                    <a class="nav-link" href="login.php" >Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Créer un compte</a>
                </li>
                <?php endif; ?> 
            </ul>
        </div>
        <button class="toggle-menu">
            <span></span>
            <span></span>
            <span></span>
        </button> -->

    </div>

    <script src="./public/js/Hamburger.js"></script>
    <script src="./public/js/nav.js"></script>
    <script src="../public/js/master.js" defer></script>

</body>

</html>