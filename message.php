<?php
if (isset($_SESSION['message'])) {
    echo "<div><p class='warning-message'>" . $_SESSION['message'] . "</p></div>";
    unset($_SESSION['message']);
}
