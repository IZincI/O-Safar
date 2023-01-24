<?php
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include('includes/header.php');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">
                <div class="card-header">
                    <h4>Ajouter un hotel</h4>
                </div>
                <div class="card-body">

                    <form action="codes/hotel-code.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">namehostel</label>
                            <input type="text" name="namehostel" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">city</label>
                            <input type="text" name="city" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Ville d'arriver</label>
                            <input type="file" name="imagesHotel[]" multiple required class="form-control">
                        </div>
                        <!--
                        <div class="mb-3">
                            <label for="">Date d'aller</label>
                            <input type="datetime-local" name="aller" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Date de retour</label>
                            <input type="datetime-local" name="retour" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Compagnie</label>
                            <input type="text" name="compagnie" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Prix</label>
                            <input type="text" name="prix" required class="form-control">
                        </div>
                        -->
                        <div class="mb-3">
                            <button type="submit" name="save_hotel" class="btn btn-primary">Enregistrer le vol</button>
                        </div>
                    </form>

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