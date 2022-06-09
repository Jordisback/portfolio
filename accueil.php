<?php
include_once('includes/include.php');
$connex = new connexion();
$bdd = $connex->get_connex();

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

echo"<div class='content'>

			<div class='case case1'>

				<span class='card-title'>
				</span>

				<div class='card-content'>

					<img src='".$lienSelfie."' alt='Une photo de moi' style='width:50%;cursor:pointer;position:relative;left:25%;border-radius:5px;box-shadow:0px 0px 1px 2px 00796b;'>
 ".$ib1."

				</div>

				<div class='card-action'>

					<a class='waves-effect waves-light btn z-depth-2 responsive' href='Docs/CV_Developpeur.pdf'> Mon CV </a>

				</div>

			</div>

		 <div class='case case2'>

			 	<p>".$ib2."</p>

				<center>
					<button class='btn' onclick='change()'> Bouton de test </button>
				</center>
			</div>
		</div>

		<div class='content'>

 <div class='case case3'>

			 	".$it3." ".$ib3."
			</div>

		</div>
";

?>
