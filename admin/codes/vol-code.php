<?php
include('../../config/app.php');
include_once('../controllers/VolController.php');
include_once('../controllers/HotelController.php');



if (isset($_POST['deleteVol'])) {
    $id = validateInput($db->conn, $_POST['deleteVol']);
    $vol = new VolController;
    $result = $vol->delete($id);
    if ($result) {
        redirect("Le vol a été supprimer avec succés", "../vol-view.php");
    } else {
        redirect("Erreur", "../vol-view.php");
    }
}


if (isset($_POST['update_vol'])) {
    $id = validateInput($db->conn, $_POST['vol_id']);
    $inputData = [
        'depart' => validateInput($db->conn, $_POST['depart']),
        'arriver' => validateInput($db->conn, $_POST['arriver']),
        'aller' => validateInput($db->conn, $_POST['aller']),
        'retour' => validateInput($db->conn, $_POST['retour']),
        'compagnie' => validateInput($db->conn, $_POST['compagnie']),
        'prix' => validateInput($db->conn, $_POST['prix']),
    ];
    $vol = new VolController;
    $result = $vol->update($inputData, $id);
    var_dump($vol);
    if ($result) {
        redirect("Le vol a été modifier avec succés", "../vol-view.php");
    } else {
        redirect("Erreur", "admin/vol-view.php");
    }
}

if (isset($_POST['save_vol'])) {
    $inputData = [
        'depart' => validateInput($db->conn, $_POST['depart']),
        'arriver' => validateInput($db->conn, $_POST['arriver']),
        'aller' => validateInput($db->conn, $_POST['aller']),
        'retour' => validateInput($db->conn, $_POST['retour']),
        'compagnie' => validateInput($db->conn, $_POST['compagnie']),
        'prix' => validateInput($db->conn, $_POST['prix']),
    ];

    $vol = new VolController;
    $result = $vol->create($inputData);

    if ($result) {
        redirect("Le vol a été ajouter avec succés", "../vol-view.php");
    } else {
        redirect("Erreur", "../vol-add.php");
    }
}




/*
if (isset($_POST['save_hotel'])) {
    $inputData = [
        'namehostel' => validateInput($db->conn, $_POST['namehostel']),
        'city' => validateInput($db->conn, $_POST['city']),
        'postalcode' => validateInput($db->conn, $_POST['postalcode']),
        'images' => validateInput($db->conn, $_POST['images[]']),
    ];

    $hotel = new HotelController;
    $result = $hotel->create($inputData);

    if ($result) {
        redirect("L'hotel a bien été ajouter avec succés", "../Hotel-add.php");
    } else {
        redirect("Erreur", "../Hotel-add.php");
    }
}
*/
if (isset($_POST['save_hotel'])) {
    $inputData = [
        'namehostel' => validateInput($db->conn, $_POST['namehostel']),
        'city' => validateInput($db->conn, $_POST['city']),
        'postalcode' => validateInput($db->conn, $_POST['postalcode']),
        'imagehostel' => validateInput($db->conn, $_POST['images']),
    ];

    $hotel = new HotelController;
    $result = $hotel->create($inputData);

    if ($result) {
        redirect("L'hotel a bien été ajouter avec succés", "../Hotel-view.php");
    } else {
        redirect("Erreur", "../Hotel-add.php");
    }
}
