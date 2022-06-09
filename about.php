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

	<div class="row">
		<div class="col l12 s12 m12">
			<div class="card col l12 s12 m12">
				<div class="card-title">
					<p>Un peu plus sur moi :</p>
				</div>
				<div class="card-content">
					<p>Je me nomme Jordan Duraz et je suis à la recherche d'un emploi, idéalement dans le développement web, mais je suis motivé pour découvrir de nouvelles compétences et de nouveaux métier. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col l12 s12 m12">
			<div class="card">
				<div class="card-title">
					<center>
						<p>Mes loisirs</p>
					</center>
				</div>
				<div class="card-content">
					<div class="card col l5 s5 m5" style="margin-right:30px;margin-left:75px;margin-top:60px;">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="img/airsoft.jpg" style="margin-top:10px;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">L'airsoft<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Airsoft<i class="material-icons right">close</i></span>
							<p>Assez proche du plus populaire paintball, l'airsoft est une activité de loisir opposant plusieurs joueurs équipés de répliques d'armes propulsant des billes de plastique. Les équipes d'airsofteurs s'affrontent pour remplir les objectifs d'un scénario organisé. Les projectiles utilisés ne contiennent pas de peinture et le jeu repose donc uniquement sur le fair-play. Les répliques, ou "airsoft guns", utilisent un mécanisme par gaz, air comprimé ou bien à ressort. Mais derrière toutes ces technologies se cache un activité pûrement bon enfant, loin de tous les stéréotypes que l'on peut imaginer.
								<br> Je pratique l'airsoft depuis près d'un an. </p>
						</div>
					</div>
					<div class="card col l5 s5 m5" style="margin-top:60px;">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="img/velo.jpg" style="margin-top:10px;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Le cyclisme<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Cyclisme<i class="material-icons right">close</i></span>
							<p>Le cyclisme est un sport très présent dans ma famille, par ce fait je le pratique assez régulierement</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
<footer class="foot">
	<a href="mentions.php">Mentions Légales</a>
</footer>

</html>
