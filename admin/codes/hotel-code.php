<?php
include('../../config/app.php');
include_once('../controllers/HotelController.php');
include('../includes/imageController.php');


if (isset($_POST['save_hotel'])) {


    $folder_id = new Folder;
    $action = $folder_id->createFolder();
    //var_dump($folder_id);



    $inputData = [
        'namehostel' => validateInput($db->conn, $_POST['namehostel']),
        'city' => validateInput($db->conn, $_POST['city']),
        //'postalcode' => validateInput($db->conn, $_POST['postalcode']),
        //'country' => validateInput($db->conn, $_POST['country']),
    ];
    $hotel = new HotelController;
    $result = $hotel->create($inputData);



    $image = new Folder;
    $images = $image->insertImage($folder_id);


    $images = $_FILES['imagesHotel'];
    // var_dump($images);
    // var_dump($_POST['namehostel']);
    $data = $_FILES['imagesHotel'];


    if ($result) {

        redirect("L'hotel a bien été ajouter avec succés", "../Hotel-view.php");
    } else {
        redirect("Erreur", "../hotel-add.php");
    }
}


if (isset($_POST['deleteHotel'])) {
    $id = validateInput($db->conn, $_POST['deleteHotel']);
    $hotel = new HotelController;
    $result = $hotel->delete($id);
    if ($result) {
        redirect("Le hotel a été supprimer avec succés", "../hotel-view.php");
    } else {
        redirect("Erreur", "../hotel-view.php");
    }
}


if (isset($_POST['update_hotel'])) {
    $id = validateInput($db->conn, $_POST['id_hotel']);
    $inputData = [
        'namehostel' => validateInput($db->conn, $_POST['namehostel']),
        'city' => validateInput($db->conn, $_POST['city']),
        'postalcode' => validateInput($db->conn, $_POST['postalcode']),
        'prix' => validateInput($db->conn, $_POST['prix']),
        'country' => validateInput($db->conn, $_POST['country']),
    ];
    $hotel = new HotelController;
    $result = $hotel->update($inputData, $id);

    if ($result) {
        redirect("L'hotel a été modifier avec succés", "../hotel-view.php");
    } else {
        redirect("Erreur", "admin/hotel-view.php");
    }
}
