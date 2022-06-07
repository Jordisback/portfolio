<!DOCTYPE html>
<?php
include_once('includes/include.php');
include_once('includes/header.php');


$connex = new connexion();


$bdd = $connex->get_connex();
$desc = "Ma'am! These are our boys! (Two young boys step into sight.) Jules, and Verne! Boys, this is Marty and Jennifer. Doc, I thought I'd never see you again! Can't keep a good scientist down. After all, I had to come back for Einstein, and I didn't want you to be worried about me. (Clara hands him something wrapped in brown paper.) Oh. I brought you a little souvenir. (Doc stoops down from the train but doesn't get off, and gives the gift to Marty. Marty rips it open. Inside is a framed photo of him and Doc at the clock tower in 1885.)";


$req = $bdd->prepare("SELECT * FROM variables");
$req->execute(array());
$res = $req->fetchAll();

$lienSelfie = $res[0]['val_variable'];
$lienCv = $res[1]['val_variable'];
$theme = $res[2]['val_variable'];
$ib1 = $res[3]['val_variable'];
$ib2 = $res[4]['val_variable'];
$ib3 = $res[5]['val_variable'];
$it1 = $res[6]['val_variable'];
$it2 = $res[7]['val_variable'];
$it3 = $res[8]['val_variable'];

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
