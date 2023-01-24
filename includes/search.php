<?php

if (isset($_GET['SelectedFly'])) {

    $_SESSION["id_vol"] = $_GET['SelectedFly'];
}





class SearchCode
{
    public $totalPassenger;
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }


    public function detailVolSearch()
    {

        if (isset($_GET['search_btn']) and !empty($_GET['search_btn'])) {
            $depart_input = $_GET['depart'];
            $arriver_input = ucfirst(($_GET['arriver']));
            $aller_input = $_GET['aller'];
            $enfant = (int)$_GET['enfant'];
            $adulte = (int)$_GET['adulte'];
            $nbr_place = 0;
            $nbr_place = $adulte + $enfant;

            $searchQuery =  "SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` LIKE '%" . $arriver_input . "%' AND `aller` LIKE '%" . $aller_input . "%' AND `passager`>='$nbr_place'";
            // $searchQuery = SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` LIKE '%" . $arriver_input . "%';
            // $searchQuery = "SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` '%" . $arriver_input . "%' AND `aller` LIKE '%" . $aller_input . "%';";
            // "SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` LIKE '%" . $arriver_input . "%' AND `aller` LIKE '%" . $arriver_input . "%'";
            $result = $this->conn->query($searchQuery);

            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }


    public function SelectedVolSearch()
    {
        if (isset($_GET['SelectedFly'])) {
            $id_vol = $_GET['SelectedFly'];
            $searchQuery =  "SELECT * FROM `vol` WHERE id_vol = $id_vol";
            $result = $this->conn->query($searchQuery);
            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }

    public function detailHotelSearch()
    {

        if (isset($_GET['search_btn']) and !empty($_GET['search_btn'])) {
            $hostelname_input = $_GET['namehostel'];
            // $arriver_input = ucfirst(($_GET['arriver']));
            // $aller_input = $_GET['aller'];
            // $enfant = (int)$_GET['enfant'];
            // $adulte = (int)$_GET['adulte'];
            // $nbr_place = 0;
            // $nbr_place = $adulte + $enfant;

            $searchQuery =  "SELECT * FROM `hotel` WHERE `namehostel` LIKE '%" . $hostelname_input . "%' ";

            // $searchQuery = SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` LIKE '%" . $arriver_input . "%';
            // $searchQuery = "SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` '%" . $arriver_input . "%' AND `aller` LIKE '%" . $aller_input . "%';";
            // "SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` LIKE '%" . $arriver_input . "%' AND `aller` LIKE '%" . $arriver_input . "%'";
            $result = $this->conn->query($searchQuery);

            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }

    public function SelectedHotelSearch()
    {
        if (isset($_GET['SelectedHotel'])) {
            $id_hotel = $_GET['SelectedHotel'];
            $searchQuery =  "SELECT * FROM `hotel` WHERE id_hotel = $id_hotel";
            $result = $this->conn->query($searchQuery);
            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }

    public function totalPrice($prixBillet)
    {
        if (isset($_GET['commande'])) {

            $totalPersonne = $_GET['total'];

            // ----------

            // Définition du prix pour la classe sélectionner

            if ($_GET['mode'] == "eco") {
                // saisir le prix pour le mode Eco
                $prixEco = 0;
                $voyageMode = $prixEco * $totalPersonne;
            } elseif ($_GET['mode'] == "regular") {
                // saisir le prix pour le mode Regular
                $prixRegular = 100;
                $voyageMode = $prixRegular * $totalPersonne;
            } else {
                // saisir le prix pour le mode Premium
                $prixPremium = 200;
                $voyageMode = $prixPremium * $totalPersonne;
            }

            //----------

            // Définition du prix pour le bagage a main

            if ($_GET['bagage-a-main'] == 1) {
                $prixBagageAMain = $_GET['bagage-a-main'] * 0;
            } else {
                $prixBagageAMain = 19;
            }

            // ----------------------

            //Définition du prix des bagages supplémentaire

            if (isset($_GET['bagage-supplementaire'])) {
                $nombreBagageSupplementaire = $_GET['bagage-supplementaire'];
                $prixBagageSupplementaire = $nombreBagageSupplementaire * 19;
            }

            // --------------------

            // Définition du prix O'Safar Pass 
            if (isset($_GET['osafarpass'])) {
                $prixOsafarPass =  $totalPersonne * 7;
            } else {
                $prixOsafarPass = 0;
            }

            // ----------

            // Définition du prix SafeFly

            if (isset($_GET['assurance-mode'])) {
                if ($_GET['assurance-mode'] == "Standard") {
                    $prixAssuranceMode =  $totalPersonne * 15.99;
                } elseif ($_GET['assurance-mode'] == "Plus") {
                    $prixAssuranceMode =  $totalPersonne * 18.99;
                } elseif ($_GET['assurance-mode'] == "Annuelle") {
                    $prixAssuranceMode =  $totalPersonne * 34.99;
                } else {
                    $prixAssuranceMode = 0;
                }
            } else {
                $prixAssuranceMode = 0;
            }

            // Définition Envoi SMS infos vol

            if (isset($_GET['info-par-sms'])) {
                $prixInfosVol = 2.99;
            } else {
                $prixInfosVol = 0;
            }

            // Assurance Premium

            if (isset($_GET['assurance-premium'])) {
                $prixAssurancePremium = $totalPersonne * 18;
            } else {
                $prixAssurancePremium = 0;
            }


            $totalPrice = $totalPersonne * $prixBillet + $prixBagageAMain + $voyageMode + $prixBagageSupplementaire + $prixOsafarPass + $prixAssuranceMode + $prixInfosVol + $prixAssurancePremium;


            /*
            $id_hotel = $_GET['SelectedHotel'];
            $searchQuery =  "SELECT * FROM `hotel` WHERE id_hotel = $id_hotel";
            $result = $this->conn->query($searchQuery);
            */

            if ($totalPrice) {
                return $totalPrice;
            } else {
                return false;
            }
        }
    }


    // Définition Envoi SMS infos vol


    public function InfosPassenger()
    {
        for ($i = 1; $i <= $_GET['total']; $i++) {
?>
            <div class="BlockPassenger">
                </br>
                <h3>Passager<?= $i ?></h3>

                <select name="genre<?= $i ?>" required>
                    <option value="-">-</option>
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                </select>

                <input type="text" placeholder="Prénom" required name='prenom<?= $i ?>'>
                <input type="text" placeholder="Nom" required name="nom<?= $i ?>">

            </div>


        <?php

        }
    }

    public function GetInfoPassenger()
    {
        for ($i = 1; $i <= $_GET['total']; $i++) {

        ?>

            <h3>
                Passager <?= $i ?> :
                <?= $_GET['genre' . $i]; ?>
                <?= $_GET['nom' . $i]; ?>
                <?= $_GET['prenom' . $i]; ?>
            </h3>

<?php
        }
    }
}

class InfosCommande
{

    public function modeClasse()
    {
        if (($_GET['mode'])) {
            echo $modeClasse = '<p><iconify-icon icon="uil:check"></iconify-icon>Vous avez choisi la classe<b> ' . $_GET['mode'] . '</b></p>';
        } else {
        }
        return $modeClasse;
    }

    public function bagageAMainSupplementaire()
    {
        if (!empty($_GET['bagage-a-main'])) {
            echo $bagageAMainSupplementaire = '<p><iconify-icon icon="uil:check"></iconify-icon>Vous avez ' . $_GET['bagage-a-main'] . ' bagages de petite taille seulement(compris dans le tarif) ,</br>n\'oubliez pas que le bagage doit s\'insérer sous votre siège </p>';
        } else {
            echo $bagageAMainSupplementaire = '<p><iconify-icon icon="maki:cross"></iconify-icon>Vous n\'avez pas de bagage supplémentaire</p>';
        }
        return $bagageAMainSupplementaire;
    }

    public function bagageEnSouteSupplementaire()
    {
        if ($_GET['bagage-supplementaire'] != 0) {
            echo $bagageSupplementaire = '<p><iconify-icon icon="uil:check"></iconify-icon>Vous avez ' . $_GET['bagage-supplementaire'] . ' bagages en soute supplémentaire(s)</p>';
        } else {
            echo  $bagageSupplementaire = '<p><iconify-icon icon="maki:cross"></iconify-icon>Vous n\'avez pas de bagage en soute supplémentaire</p>';
        }
        return $bagageSupplementaire;
    }

    public function offreEmail()

    {
        if (!empty($_GET['offre-e-mail'])) {
            echo $offreEmail = '<p><iconify-icon icon="uil:check"></iconify-icon>Offre par E-mail</p>';
        } else {
            echo $offreEmail = '<p><iconify-icon icon="maki:cross"></iconify-icon>Offre par E-mail</p>';
        }
        return $offreEmail;
    }
}
