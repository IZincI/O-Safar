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
	<title>O'Safar - Contact</title>
</head>

<link rel="stylesheet" href="./public/css/style-user.css">

<link rel="stylesheet" href="./public/css/styleGeoffrey.css">

<body>


	<div id="icon-login">
		<a href="./">
			<iconify-icon id="icon-login" icon="akar-icons:cross"></iconify-icon>
		</a>
	</div>

	<div class="container-login">



		<!-- Left Side Container -->

		<div id="picture-login"></div>

		<!-- Right Side Container -->
		<div class="right-login-container">
			<?php include('message.php'); ?>
			<div>
				<h1>Contactez-nous</h1>
			</div>
			<form action="./Controllers/mail.php" method="post">
				<div class="form-contact">

					<div class="left-side-form-contact">

						<div><input class="input-login" name="subject" type="text" placeholder="Sujet*" required></div>

						<div><input class="input-login" name="fname" type="text" placeholder="Prénom*" required></div>

						<div><input class="input-login" name="email" type="email" placeholder="Email*" required></div>

						<div>
							<p class="condition-mail">*Element requis</p>
						</div>

						<div>
							<textarea name="message" placeholder="Votre message" class="field"></textarea>
						</div>
					</div>
					<div class="right-side-form-contact">
						<div>
							<input id="button-send" type="submit" name="send-email" value="Envoyez" />
						</div>

					</div>
				</div>

			</form>

			<!--
			
			
			<div></div>

		</div>

		<!--

<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h1>Contactez nous</h1>
				<input type="text" class="field" placeholder="Votre nom">
				<input type="text" class="field" placeholder="Votre prénom">
				<input type="email" class="field" placeholder="Votre email">
				
				<button class="btn">Envoyer</button>
			</div>
		</div>
	</div>
    <script src="public/js/master.js"></script>
</body>
</html>-->



		</div>


		<script src="public/js/master.js" defer></script>
</body>

</html>