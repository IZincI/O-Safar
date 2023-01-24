<?php
echo phpinfo();
if (isset($_POST["message"])) {
	$retour = mail("geoffrey_02@outlook.fr", $_POST["subject"], $_POST["message"], "Reply-to:" . $_POST["email"]);
	if ($retour) {
		echo "<p> l'email a bien été envoyer.</p>";
	}
}
