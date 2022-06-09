
<!DOCTYPE html>
<?php
include_once('includes/include.php');
include_once('includes/header.php');
$connex = new connexion();

$bdd = $connex->get_connex();

?>





<head>

	<title>Portfolio de Jordan Duraz</title>



	<meta charset="UTF-8">

	<meta name="description" content="" />

	<meta name="keywords" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>



<body id="corps" class="corps">

	<div id="particles-js">

		<?php include('includes/menu.php'); ?>

		<div id="maPage" class="contain">


		</div>

	</div>



<script>

$("#corps").ready(function(){
	affichePage('0');
});

function affichePage(numPage){
  if(numPage == 0 || numPage==1){
    $.ajax({
			type: "GET",
			dataType: 'html',
			url: "accueil.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
        document.getElementById('maPage').innerHTML=msg;
			},
		});
	}else if(numPage == 2){
		$.ajax({
			type: "GET",
			dataType: 'html',
			url: "Projets.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
        document.getElementById('maPage').innerHTML=msg;
			},
		});
  }else if(numPage == 3){
		$.ajax({
			type: "GET",
			dataType: 'html',
			url: "about.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
        document.getElementById('maPage').innerHTML=msg;
			},
		});
  }else if(numPage == 4){
		$.ajax({
			type: "GET",
			dataType: 'html',
			url: "skill.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
        document.getElementById('maPage').innerHTML=msg;
			},
		});
  }else if(numPage == 5){
		$.ajax({
			type: "GET",
			dataType: 'html',
			url: "contact.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
        document.getElementById('maPage').innerHTML=msg;
			},
		});
  }else if(numPage == 6){
		$.ajax({
			type: "GET",
			dataType: 'html',
			url: "La_bouffe_V2.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
        document.getElementById('maPage').innerHTML=msg;
			},
		});
  }else{
		$.ajax({
			type: "GET",
			dataType: 'html',
			url: "accueil.php",
			async: true,
			contentType: "application/json; charset=utf-8",
			success: function (msg) {
				document.getElementById('maPage').innerHTML=msg;
			},
		});
  }
};

</script>

</body>

<footer class="foot">

	<a class="mention" href="mentions.php">Mentions Légales</a>

</footer>



</html>
