<?php

include_once("./config/app.php");
include("./admin/controllers/UserController.php");
include("./Controllers/RegisterController.php");







if (isset($_POST['register_btn'])) {
    $fname = validateInput($db->conn, $_POST['fname']);
    $lname = validateInput($db->conn, $_POST['lname']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

    $register = new RegisterController;
    $result_password = $register->confirmPassword($password, $confirm_password);
    if ($result_password) {
        $result_user = $register->isUserExists($email);
        if ($result_user) {
            redirect("Adresse mail éxiste déja", "register.php");
        } else {
            $register_query = $register->registration($fname, $lname, $email, $password);
            if ($register_query) {
                redirect("Compte créer avec succée", "../login.php");
            } else {
                redirect("Erreur", "register.php");
            }
        }
    } else {
        redirect("le mot de passe et la confirmation de mot de passe ne sont pas identique", "register.php");
    }
}

if (isset($_POST['identitycard_btn'])) {
    $identityCard = validateInput($db->conn, $_POST['identitycard']);
    $id = $_SESSION['auth_user']['user_id'];

    $updateIdentityCard = new UserController;


    if (!empty($_POST['identitycard'])) {
        $updateIdentityCard->updateDocument($identityCard, $id);

        if ($updateIdentityCard) {
            redirect("Votre document a bien été modifier", "my-profile.php");
        } else {

            redirect("Erreur", "my-profile.php");
        }
    } else {
        redirect("Vous n'avez pas rentré de fichier", "my-profile.php");
    }
}

if (isset($_POST['updateUser_btn'])) {
    $fname = validateInput($db->conn, $_POST['fname']);
    $_SESSION['auth_user']['user_fname'] = validateInput($db->conn, $_POST['fname']);
    $lname = validateInput($db->conn, $_POST['lname']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

    $id = $_SESSION['auth_user']['user_id'];

    $register = new RegisterController;
    $result_password = $register->confirmPassword($password, $confirm_password);

    $updateUser = new UserController;


    if ($result_password) {
        if ($updateUser) {
            $updateUser->updateUserProfile($fname, $lname, $email, $password, $id);
            redirect("Vos informations ont bien été enregistrer", "my-profile.php");
        } else {

            redirect("Erreur", "my-profile.php");
        }
    } else {
        redirect("mot de passe incorrect", "my-profile.php");
    }
}
