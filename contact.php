<!DOCTYPE html>

<?php

include_once('includes/include.php');
include_once('includes/header.php');


if(!isset($_SESSION))
{
	session_start();
}
?>

<html>

<head>
	<title>Portfolio de Jordan Duraz</title>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="corps">
	<?php include('includes/menu.php'); ?>
	<div class="container" style="margin-top:35px;">

		<div class="row">
			<form class="col s12" action="MAILTO:jordanduraz@gmail.com" method="post" enctype="text/plain">
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="Prénom" id="first_name" type="text" class="validate">
						<label for="first_name">Votre Prénom</label>
					</div>
					<div class="input-field col s6">
						<input placeholder="Votre Nom" id="last_name" type="text" class="validate">
						<label for="last_name">Votre Nom</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Votre Message</label>
							</div>
						</div>
					</form>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</body>
<footer class="foot">
</footer>

</html>
