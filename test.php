<?php
include('./config/app.php');
include_once('./admin/controllers/UserController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--  Fonts  -->

<!-- Mulish font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

<!-- Monserrat font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Bonheur Royale font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">

<!-- Files CSS -->

<link rel="stylesheet" href="public/css/test.css">

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/styleGeoffrey.css">

<!--  Script iconify -->

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>


<body>
    <div class="white-text text-center-justify">
        <a href="./">
            <h1>PHP</h1>
        </a>
    </div>








    <!--

    <?php /*
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('../admin/controllers/UserController.php');
include('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Files CSS -->

<link rel="stylesheet" href="../public/css/my-profile.css">

<!-- Global CSS -->

<link rel="stylesheet" href="../public/css/styleGeoffrey.css">

<body>

    <?php
    include('../includes/navbar.php'); ?>
    <div class="container-fluid px-4">

        <div class="row mt-4">
            <div class="col-md-12">

                <?php include('../message.php') ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Modifier un vol</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['update_user'])) {
                            $id = validateInput($db->conn, $data['id_client']);
                            $user = new UserController;
                            $result = $user->edit($id);
                            if ($result) {
                        ?>
                                <form class="list-unstyled" action="./user/user-code.php" method="post">

                                    <input type="text" name="fname" placeholder="Prénom:" value="<?= $data['fname'] ?>">

                                    <input type="text" name="lname" placeholder="Nom:" value="<?= $data['lname']; ?>">

                                    <input type="email" name="email" placeholder="Email:" value="<?= $data['email']; ?>">

                                    <input type="password" name="password" placeholder="Mot de passe:" value="<?= $data['email']; ?>">

                                    <li><span>Créer le:</span> <?= date('d-m-Y', strtotime($data['create_at'])); ?></li>

                                    <button type="submit" name="update_user" class="button-square">Modifier</button>
                                </form>
                        <?php
                            } else {
                                echo "<h4>Erreur</h4>";
                            }
                        } else {
                            echo "<h4>Erreur</h4>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>
    <?php
    include('../includes/footer.php');


    */ ?>
</body>

</html>































    <!--
    <div>


    <?php
    /*
// affichage des Vols
$infoUser = new UserController;
$result = $infoUser->index();
if ($result) {
    foreach ($result as $row) {
        var_dump($row);
?>

        <div class="container-block">

            <div class="box-test"><?= $row['id_client'] ?></div>
            <div class="box-test"><?= $row['fname'] ?></div>
            <div class="box-test"><?= $row['lname'] ?></div>
            <div class="box-test"><?= $row['email'] ?></div>
            <div class="box-test"><?= $row['password'] ?></div>
            <div class="box-test"><?= $row['create_at'] ?></div>

        </div>


<?php
    }
}
*/

    ?>








    </div>


</body>

</html>