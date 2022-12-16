<?php
include('../config/app.php');
include_once('../admin/controllers/UserController.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$data = $authenticated->authDetail();
var_dump($data);

if (isset($_POST['deleteUser'])) {
    $id = validateInput($db->conn, $_POST['deleteUser']);
    $user = new UserController;
    $result = $user->delete($id);
    if ($result) {
        redirect("L'utilisateur a été supprimer avec succés", "../my-profile.php");
    } else {
        redirect("Erreur", "../my-profile.php");
    }
}


if (isset($_POST['update_user'])) {
    $id = validateInput($db->conn, $data['id_client']);
    $data = [
        'fname' => validateInput($db->conn, $_POST['fname']),
        'lname' => validateInput($db->conn, $_POST['lname']),
        'email' => validateInput($db->conn, $_POST['email']),
        'identitycard' => validateInput($db->conn, $_POST['identitycard']),
        'password' => validateInput($db->conn, $_POST['password']),
    ];
    $user = new UserController;
    $result = $user->update($data, $id);
    if ($result) {
        redirect("L'utilisateur a été modifier avec succés", "../my-profile.php");
    } else {
        redirect("Erreur", "admin/vol-view.php");
    }
}

if (isset($_POST['identitycard'])) {
    $id = validateInput($db->conn, $data['id_client']);
    $data = [
        'identitycard' => validateInput($db->conn, $_POST['identitycard']),

    ];
    $user = new UserController;
    $result = $user->create($data, $id);
    if ($result) {
        redirect("L'utilisateur a été modifier avec succés", "../my-profile.php");
    } else {
        redirect("Erreur", "admin/vol-view.php");
    }
}

if (isset($_POST['save_vol'])) {
    $inputData = [
        'depart' => validateInput($db->conn, $_POST['depart']),
        'arriver' => validateInput($db->conn, $_POST['arriver']),
        'email' => validateInput($db->conn, $_POST['email']),
        'password' => validateInput($db->conn, $_POST['password']),
    ];

    $vol = new VolController;
    $result = $vol->create($inputData);

    if ($result) {
        redirect("Vol ajouté avec succée", "../vol-view.php");
    } else {
        redirect("Erreur", "admin/vol-add.php");
    }
}
