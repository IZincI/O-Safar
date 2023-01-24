<?php
include('./config/app.php');
// include_once('./admin/controllers/UserController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<!--  Fonts  -->

<!-- Mulish font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

<!-- Monserrat font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Bonheur Royale font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">

<!-- Files CSS -->

<link rel="stylesheet" href="public/css/test.css">

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/style-general.css">

<!--  Script iconify -->

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>


<body>


  <!--
    Il existe plusieurs manières de connecter une base de données à un dossier d'images afin de récupérer plusieurs images. Voici quelques étapes générales à suivre :

Assurez-vous d'avoir accès à une base de données contenant les informations sur les images que vous souhaitez récupérer, ainsi qu'à un dossier d'images sur votre ordinateur.

Créez une connexion à la base de données à l'aide d'un langage de programmation, tel que PHP ou Python.

Récupérez les informations sur les images à partir de la base de données en utilisant une requête SQL.

Utilisez les informations récupérées pour générer des liens vers les images dans le dossier.

Affichez les images sur votre site web ou dans votre application en utilisant les liens générés.

Il est recommandé de se familiariser avec les bases de la programmation et de la gestion de bases de données avant de tenter de mettre en place cette solution.

-->

  <?php


  class Folder
  {
    protected $filePath = "./images/";
    protected $nameHostel = "teste";

    public function createFolder($nameHostel)
    {
      if (!is_dir($this->filePath . $nameHostel)) {
        mkdir($this->filePath . $nameHostel);
        return "Le dossier a été créé.</br>";
      } else {
        return "Le dossier existe déjà.</br>";
      }
    }

    public function insertImage($folder_id)
    {
      // $folder = $this->filePath . $this->name;

      $images =   $_FILES['image'];
      var_dump($_FILES['image']);
      $imagesTmp = $_FILES['image']['tmp_name'];
      //var_dump($imagesTmp);
      $imagesName = $_FILES['image']['name'];
      var_dump($imagesName);

      var_dump(sizeof($imagesName));

      $folder = $this->filePath . $folder_id;
      echo "le folder_id est " . $folder_id;
      echo "</br>";

      /*
      foreach ($imagesName as $valueName) {
        //for ($i = 0; $i < sizeof($imagesName); $i++) {

        $target_file = "./images/" . $folder_id . "/" . basename($valueName);
        echo " les différentes values sont . $target_file <br>";
      }
      foreach ($imagesTmp as $valueTmp) {

        $target_file = "./images/" . $folder_id . "/" . basename($valueTmp);
        echo " les différentes values sont . $valueTmp <br>";
        move_uploaded_file($valueTmp, $target_file);
      }
*/
      // $value = basename($_FILES["image"]["name"][$key]);

      var_dump(sizeof($imagesTmp));
    }


    /*
        public function insertImage($folder_id)
    {
      // $folder = $this->filePath . $this->name;
      $images = ($_FILES['image']);
      //var_dump($_FILES['image']['tmp_name']);
      $imagesTmp = $_FILES['image']['tmp_name'];
      //var_dump($imagesTmp);
      $imagesName = $images['name'];




      $folder = $this->filePath . $folder_id;
      echo "le folder_id est " . $folder_id;
      echo "</br>";
      // foreach ($_FILES["image"]["error"] as $key => $error)
      // if ($error == UPLOAD_ERR_OK)
      //$imagesTmp = $_FILES["image"]["tmp_name"][$key];
      // basename() may prevent filesystem traversal attacks;
      // further validation/sanitation of the filename may be appropriate

      foreach ($imagesTmp as $valueTmp) {
        echo " les différentes values sont . $valueTmp <br>";
      }
      foreach ($imagesName as $valueName) {
        echo " les différentes values sont . $valueName <br>";
      }

      $target_file = "./images/" . basename($valueName);
      // $value = basename($_FILES["image"]["name"][$key]);

      if (is_dir("./images/test")) {
        var_dump(is_dir($folder));
        echo 'le dossier existe </br>';
        var_dump(move_uploaded_file($valueTmp, $target_file));
        if (move_uploaded_file($valueTmp, $target_file) == true) {
        } else {
          return "Erreur lors de l'insertion de l'image. </br>";
        }
      }
    }
    */
  }




  if (isset($_POST['image_btn'])) {
    $nameFolder = $_POST['nameHostel'];
    $NewFolder = new Folder($nameFolder);
    echo $NewFolder->createFolder($nameFolder);
    echo $NewFolder->insertImage($nameFolder);
    echo "bonjhour";
  }


  if (isset($_POST['image_btn'])) {




  ?>


  <?php

  }
  ?>

  <form action="./test.php" method="post" enctype="multipart/form-data">
    <input type="text" name="nameHostel">
    <input type="file" name="image[]" id="" multiple>
    <input type="submit" name="image_btn" value="envoyer">
    <img src="./images" alt="">
  </form>

  <img src="./images/Capture.JPG" alt="">

</body>

</html>