<?php
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/VolController.php');
include('includes/header.php');

date_default_timezone_set('utc');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">
                <div class="card-header">
                    <h4>Liste des vols</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Compagnie</th>
                                    <th>Ville de depart</th>
                                    <th>Ville d'Arriver</th>
                                    <th>Prix</th>
                                    <th>Place Passsager Restante</th>
                                    <th>Date d'aller</th>
                                    <th>Date de retour</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $vols = new VolController;
                                $result = $vols->index();

                                if ($result) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td><?= $row['id_vol'] ?></td>
                                            <td><?= $row['compagnie'] ?></td>
                                            <td><?= $row['depart'] ?></td>
                                            <td><?= $row['arriver'] ?></td>
                                            <td><?= $row['prix'] . " €" ?></td>
                                            <td><?= $row['passager'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['aller'])) ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['retour'])) ?></td>
                                            <td>
                                                <a href="vol-edite.php?id=<?= $row['id_vol'] ?>" class="btn btn-success">Modifier</a>
                                            </td>
                                            <td>
                                                <!-- -->
                                                <form action="codes/vol-code.php" method="POST">
                                                    <button type="submit" name="deleteVol" value="<?= $row['id_vol'] ?>" href="../" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>

                                <?php


                                    }
                                } else {
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>

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