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
        <img class="logo" src="src/img/logoauv.png">
		<a href="auth/auth.php?action=logout" class="logout" data-aos="fade-up" data-aos-delay="00">
			<i class="fas fa-sign-out-alt"></i>Se déconnecter
		</a>
        <div class="content">
            <h1 data-aos="fade-up" data-aos-delay="0">Bienvenue <?php echo $firstname ?>,</h1>
			<p data-aos="fade-up" data-aos-delay="0" class="md">Laisse toi guider au travers des différentes étapes pour découvrir ce qui est fait pour toi ! </p>
            <div class="cards_step">
				<a class="card" href="quizz.php" data-aos="flip-left" data-aos-delay="1500" data-aos-duration="1000">
						<div class="icon">
							<i class="fas fa-trophy"></i>
						</div>
						<div class="step"><h4>étape 1</h4></div>
						<div class="text"><p class="sm">Je complète mes informations</p></div>
					
					</a>
					<a class="card" href="browse.php" data-aos="flip-right" data-aos-delay="1500" data-aos-duration="1000">
						<div class="icon">
							<i><i class="fas fa-trophy"></i></i>
						</div>
						<div class="step"><h4>étape 2</h4></div>
						<div class="text"><p class="sm">Je m’informe sur les métiers</p></div>
					
					</a>
					<a class="card" href="faq.php" data-aos="flip-left" data-aos-delay="1500" data-aos-duration="1000">
						<div class="icon">
							<i><i class="fas fa-trophy"></i></i>
						</div>
						<div class="step"><h4>étape 3</h4></div>
						<div class="text"><p class="sm">FOIRE AUX QUESTIONS</p></div>
					
					</a>
			</div>
			<div class="logout">
				<a href="auth/auth.php?action=logout"></a>
			</div>
        </div>
    </div>
</body>
<script>
    AOS.init();
  </script>
</html>