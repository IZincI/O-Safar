<?php
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/HotelController.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">
                <div class="card-header">
                    <h4>Modifier un Hotel</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id_hotel'])) {
                        $hotel_id = validateInput($db->conn, $_GET['id_hotel']);
                        $hotel = new HotelController;
                        $result = $hotel->edit($hotel_id);
                        if ($result) {
                    ?>
                            <form action="codes/hotel-code.php" method="POST">
                                <input type="hidden" name="id_hotel" value="<?= $result['id_hotel'] ?>">
                                <div class="mb-3">
                                    <label for="">Nom Hotel</label>
                                    <input type="text" name="namehostel" value="<?= $result['namehostel'] ?>" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Ville</label>
                                    <input type="text" name="city" value="<?= $result['city'] ?>" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Pays</label>
                                    <input type="text" name="country" value="<?= $result['country'] ?>" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Code Postal</label>
                                    <input type="text" name="postalcode" value="<?= $result['postalcode'] ?>" required class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="">Prix en €</label>
                                    <input type="number" name="prix" value="<?= $result['prix'] ?> " required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_hotel" class="btn btn-primary">Modifier le vol</button>
                                </div>
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
include('includes/footer.php');
include('includes/scripts.php');

?>