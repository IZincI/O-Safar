<?php
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$data = $authenticated->authDetail();

include_once('../admin/controllers/UserController.php');
include('../includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar </title>
</head>

<!-- Files CSS -->

<link rel="stylesheet" href="../public/css/my-profile.css">

<!-- Global CSS -->

<link rel="stylesheet" href="../public/css/styleGeoffrey.css">

<body>

    <h1>User Edit</h1>

    <form class="list-unstyled" action="../user/user-code.php" method="post">

        <input type="text" name="fname" placeholder="Prénom:" value="<?= $data['fname'] ?>">

        <input type="text" name="lname" placeholder="Nom:" value="<?= $data['lname']; ?>">

        <input type="email" name="email" placeholder="Email:" value="<?= $data['email']; ?>">

        <input type="password" name="password" placeholder="Mot de passe:" value="<?= $data['password']; ?>">

        <li><span>Créer le:</span> <?= date('d-m-Y', strtotime($data['create_at'])); ?></li>

        <button type="submit" name="update_user" class="button-square">Modifier</button>
</body>

</html>