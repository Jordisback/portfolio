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
					<p>Mes compétences et mes connaisances</p>
				</div>
				<div class="card-content">
					<p>Au cour de ma formation j'ai apréhendé diverses situations qui m'ont permis de voir et d'apprendre un certains nombres de compétences et un savoir qui m'a permis de progrésser.</p>
					<br>
					<p>Voici certaines de mes connaisances :</p>
					<br>
					<ul>
						<li> - La mise en place de Toast (pop-up en javascript)</li>
						<br>
						<li> - L'utilisation d'ajax et de jquery</li>
						<br>
						<li> - La mise en place de dataTables</li>
						<br>
						<li> - L'execution d'un cahier des charges</li>
						<br>
					</ul>

					<p>Je code en HTML/CSS, PHP, je sais rédiger des requètes SQL. </p>
					<br>
					<p>La plupart du temps j'utilise Bracket, WampServer ainsi que FileZilla, mais il m'arrive aussi d'utiliser d'autres logiciels.</p>
					<br>
					<div class="card-action">
						<a class="waves-effect waves-light btn z-depth-2" href="Docs/BTS_SIO_E6_tableau_synthe%CC%80se..pdf"> Le reste de mes compétences est ici</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<footer class="foot">

</footer>

</html>
