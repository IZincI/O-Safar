<?php
include('../config/app.php');
include_once('../Controllers/AuthenticationController.php');


$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/HotelController.php');

include('includes/header.php');

date_default_timezone_set('utc');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">
                <div class="card-header">
                    <h4>Liste des Hotels</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom Hotel</th>
                                    <th>Pays</th>
                                    <th>Ville</th>
                                    <th>code postal</th>
                                    <th>Place Passsager Restante</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $hotels = new HotelController;
                                $result = $hotels->index();

                                if ($result) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td><?= $row['id_hotel'] ?></td>
                                            <td><?= $row['namehostel'] ?></td>
                                            <td><?= $row['country'] ?></td>
                                            <td><?= $row['city'] ?></td>
                                            <td><?= $row['postalcode'] ?></td>
                                            <td><?= $row['folder_path'] ?></td>
                                            <td><?= $row['prix'] . " €" ?></td>
                                            <td><img width="200px" src="../images/<?= $row['images'] ?>" alt=""></td>
                                            <!--
                                            <td><?= $row['passager'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['aller'])) ?></td>
                                            <td><?= date('d-m-Y', strtotime($row['retour'])) ?></td>
                                            -->
                                            <td>
                                                <a href="hotel-edit.php?id_hotel=<?= $row['id_hotel'] ?>" class="btn btn-success">Modifier</a>
                                            </td>
                                            <td>
                                                <!-- -->
                                                <form action="codes/hotel-code.php" method="POST">
                                                    <button type="submit" name="deleteHotel" value="<?= $row['id_hotel'] ?>" href="../" class="btn btn-danger">Supprimer</button>
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






<?php
include('includes/footer.php');
include('includes/scripts.php');
?>