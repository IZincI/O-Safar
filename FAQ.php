<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar</title>

    <!-- Global CSS -->

    <link rel="stylesheet" href="./public/css/styleGeoffrey.css">

    <!-- Files CSS -->

    <link rel="stylesheet" href="./public/css/FAQ.css">

</head>

<body>

    <?php
    include('includes/navbar.php');
    ?>

    <div class="gap-header"></div>

    <div>
        <div class="Section">
            <button class="accordion">
                Dernières infos de vol
                <div class="arrow">
                    <iconify-icon icon="akar-icons:chevron-right"></iconify-icon>
                </div>
            </button>

            <div class="panel">
                <p>Lorem ipsum dolor sit amet,
            </div>
        </div>

        <div class="Section">
            <button class="accordion">
                Retards de vol
                <div class="arrow">
                    <iconify-icon icon="akar-icons:chevron-right"></iconify-icon>
                </div>
            </button>
            <div class="panel">
                <p>Lorem ipsum...</p>
            </div>
        </div>

        <div class="Section">
            <button class="accordion">
                Explications sur le bagage
                <div class="arrow">
                    <iconify-icon class="arrow" icon="akar-icons:chevron-right"></iconify-icon>
                </div>
            </button>
            <div class="panel">
                <p>Lorem ipsum...</p>
            </div>
        </div>

        <div class="icon-section">
            <div class="icon-section-block">
                <div>
                    <iconify-icon icon="bi:phone"></iconify-icon>
                </div>
                <div>Reservation</div>
            </div>
            <div class="icon-section-block">
                <div>
                    <iconify-icon icon="fluent:luggage-32-regular"></iconify-icon>
                </div>
                <div>Bagage</div>
            </div>
            <div class="icon-section-block">
                <div>
                    <iconify-icon icon="carbon:plane"></iconify-icon>
                </div>
                <div>En Vol</div>
            </div>
            <div class="icon-section-block">
                <div>
                    <iconify-icon icon="uit:covid-19"></iconify-icon>
                </div>
                <div>Covid-19</div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    ?>


    <script src="public/js/Accordeon.js"></script>

</body>

</html>