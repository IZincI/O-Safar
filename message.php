<?php
if (isset($_SESSION['message'])) {
    echo "<p class='warning-message'>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
