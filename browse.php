<?php 
session_start();
if($_SESSION['isConnected'] == 0 || $_SESSION['isConnected'] == null) {
	if($_GET['bypass'] == 1) {

	} else {

		header('Location: auth/index.php');
	}
}
require_once 'auth/connection.php';
$id = $_SESSION['user'];

$sql = "SELECT * FROM users  WHERE id='$id'";
				$query = $conn->prepare($sql);
				$query->execute();
				$fetch = $query->fetch(PDO::FETCH_ASSOC);
				$firstname = $fetch['firstname'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://kit.fontawesome.com/a2c684147b.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<title>Title</title>
	<link rel="stylesheet" href="src/style/dist/style.css">
	<style type="text/css">
        body {
		margin: 0;
		padding: 0;
	}
	/*  
		Disable the default callout when you touch and hold a touch target.
		and disable user from selecting content (dragging).
	*/
	*:not(input,textarea) {
		-webkit-touch-callout: none;
		-webkit-user-select: none; 
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	</style>
</head>
<body>
<div class="container dark">

        <div class="content">
            <h1 data-aos="fade-up" data-aos-delay="0">ETAPE 2</h1>
			<p data-aos="fade-up" data-aos-delay="0" class="md">Cliquez sur l'application qui vous à été communiquez à l'étape précédente.</p>
            <div class="cards_links">
				<a class="card" href="http://www.orientation.auvergnerhonealpes.fr/" target="_blank" data-aos="flip-left" data-aos-delay="0">
						<div class="step"><h4>FORMATIONS</h4></div>
						<div class="text"><p class="sm">Je sais quel(s) métier(s) je veux faire</p></div>
					
					</a>
					<a class="card" href="https://www.cleor.org/" target="_blank" data-aos="flip-left" data-aos-delay="100">
						<div class="step"><h4>TERRITOIRE</h4></div>
						<div class="text"><p class="sm">Je sais quel(s) métier(s) je veux faire</p></div>
					
					</a>
					<a class="card" href="https://q.inspire-orientation.org/choisir-un-metier" target="_blank" data-aos="flip-left" data-aos-delay="200">
						<div class="step"><h4>QUIZZ</h4></div>
						<div class="text"><p class="sm">Je ne sais pas vers quel(s) métier(s) je veux m’orienter</p></div>
					
					</a>
                    <a class="card" href="http://www.horizons21.fr/" target="_blank" data-aos="flip-left" data-aos-delay="300">
						<div class="step"><h4>MON FUTUR</h4></div>
						<div class="text"><p class="sm">Je sais quel métier m’intéresse mais je suis perdue au niveau des choix de formations</p></div>
					
					</a>
                    <a class="card" href="https://www.ijbox.fr/" target="_blank" data-aos="flip-left" data-aos-delay="400">
						<div class="step"><h4>SECTEUR</h4></div>
						<div class="text"><p class="sm">Je connais les secteurs d’activité que j’aime mais je ne sais pas quels sont les métiers qui correspondent</p></div>
					
					</a>
                    <a class="card" href="https://www.ijbox.fr/" target="_blank" data-aos="flip-left" data-aos-delay="500">
						<div class="step"><h4>METIER</h4></div>
						<div class="text"><p class="sm">Je sais quel(s) métier(s) je veux découvrir</p></div>
					
					</a>
			</div>

        </div>
        <div class="menu">
                <a href="index.php" class="gotohome">Retour au menu principal</a>
</div>
    </div>
</body>
<script>
    AOS.init();
  </script>
</html>