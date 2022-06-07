<!DOCTYPE html>
<?php

include_once('includes/include.php');
include_once('includes/header.php');


if(!isset($_SESSION))
{
	session_start();
}


$connex = new connexion();

$bdd = $connex->get_connex();
$req = $bdd->Query("SELECT * FROM projet")
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
			<div class="col l12 s12 m12">
				<?php foreach($req as $resultat){ ?>
				<div class="card col l5 s5 m5" style="margin-right:30px;">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator responsive-img" alt="Illustration" src="<?= $resultat['image_projet']; ?>">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4"><?= $resultat['nom_projet']; ?><i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4"><?= $resultat['nom_projet']; ?><i class="material-icons right">close</i></span>
						<p>
							<?= $resultat['description_projet']; ?>
						</p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>

<footer class="foot">
</footer>

</html>
