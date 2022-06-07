<!DOCTYPE html>
<?php
include_once('includes/include.php');
include_once('includes/header.php');


$connex = new connexion();


$bdd = $connex->get_connex();
$req = $bdd->prepare("SELECT * FROM variables");
$req->execute(array());
$res = $req->fetchAll();

$lienSelfie = $res[0]['val_variable'];
$lienCv = $res[1]['val_variable'];
$theme = $res[2]['val_variable'];
$ib1 = $res[3]['val_variable']; // Index -> bloc de texte 1
$ib2 = $res[4]['val_variable']; // Index -> bloc de texte 2
$ib3 = $res[5]['val_variable']; // Index -> bloc de texte 3
$it1 = $res[6]['val_variable']; // Index -> bloc de texte 1
$it2 = $res[7]['val_variable']; // Index -> bloc de texte 2
$it3 = $res[8]['val_variable']; // Index -> bloc de texte 3

?>


<head>
	<title>Portfolio de Jordan Duraz</title>

	<meta charset="UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="corps">
	<div id="particles-js">
		<?php include('includes/menu.php'); ?>
		<div class="contain">
			<div class="content">
				<div class="case case1">
					<span class="card-title"></span>

					<div class="card-content">
						<img src='<?=$lienSelfie;?>' alt='Une photo de moi' style='width:50%;cursor:pointer;position:relative;left:25%;border-radius:5px;box-shadow:0px 0px 1px 2px #00796b;'>
						<?=$ib1;?>
					</div>
					<div class="card-action">
						<a class="waves-effect waves-light btn z-depth-2 responsive" href="Docs/CV_Developpeur.pdf"> Mon CV</a>
					</div>
				</div>
				<div class="case case2">
					<p><?=$ib2;?></p>
					<center><button class="btn" onclick="change()">Bouton de test</button></center>
				</div>
			</div>
			<div class="content">
				<div class="case case3">
					<?=$it3;?>
					<?=$ib3;?>
				</div>
			</div>
		</div>
	</div>

</body>
<footer class="foot">
	<a class="mention" href="mentions.php">Mentions Légales</a>
</footer>

</html>
