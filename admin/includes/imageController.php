<?php
// include_once('./admin/controllers/UserController.php');

?>



<body>

    <?php


    class Folder
    {
        public $folder_id;

        public function __construct()
        {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
            $this->folder_id = rand();
        }

        public function getMyVar()
        {
            return $this->folder_id;
        }

        public function createFolder()
        {
            $folder_id = $this->folder_id;

            if (!is_dir("../../images/" . $folder_id)) {
                mkdir("../../images/" . $folder_id);

                echo "</br>";
                echo "Le dossier a été créé.</br>";
            } else {
                echo "Le dossier existe déjà.</br>";
            }
        }
        public function insertImage($folder_id)
        {
            $folder_id = $this->folder_id;

            $filePath = "../../images/$folder_id";

            // $folder = $this->filePath . $this->name;

            $images = ($_FILES['imagesHotel']);
            $imagesName = $images['name'];
            $imagesTmp =  $images['tmp_name'];
            var_dump($images);
            foreach ($imagesName as $value)
                var_dump($value);

            var_dump($folder_id);
            var_dump($filePath);
            var_dump(move_uploaded_file($value, $filePath));


            if (is_dir($filePath)) {
                if (move_uploaded_file($imagesTmp, "../../images/$folder_id")) {
                } else {
                    return "Erreur lors de l'insertion de l'image.";
                }
            }
        }


        public function index()
        {
            $hostelQuery = "SELECT * FROM hotel ORDER BY `namehostel`,`city` ASC";
            $result = $this->conn->query($hostelQuery);
            if ($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }
        }

        public function getImage()
        {
        }
    }

    if (isset($_GET['id_hotel'])) {
        $hotel_id = $_GET['id_hotel'];
        $NewFolder = new Folder($hotel_id);

        if (isset($_POST['image_btn'])) {
            echo $NewFolder->createFolder($hotel_id);
            echo $NewFolder->insertImage($hotel_id);
        }

        if (isset($_POST['image_btn'])) {
            $images = $_FILES['image'];
            $imagesName = $images['name'];
            $imagesTmp =  $images['tmp_name'];
        }
        for ($i = 0; $i < sizeof($imagesName); $i++) {
            echo ($imagesName[$i]);
    ?>
            <img width="200px" src="./images/<?= $hotel_id ?>/<?= $imagesName[$i] ?>" alt="">

    <?php
        }
    }
    ?>


    <!--
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" id="" multiple>
        <input type="submit" name="image_btn" value="envoyer">
        <img src="./images" alt="">
    </form>
-->