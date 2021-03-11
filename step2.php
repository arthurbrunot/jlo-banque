<?php 
session_start();
if($_SESSION['isConnected'] == 0 || $_SESSION['isConnected'] == null) {
	header('Location: auth/index.php');
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
	<title>Title</title>
	<link rel="stylesheet" href="src/style/dist/quizz.css">
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
    <img class="pattern3" src="src/img/pattern3.png">
    <img class="pattern4" src="src/img/pattern4.png">
    <section class="step" id="s0">
        <div class="header">
            <div>
                <div class="progress">
                    <div></div>
                </div>
                <div class="text">
                    <span>Niveau 0</span>
                    <p class="lg">Prépare toi</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div>
                <h1>Le Quizz de la course à l'orientation</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rutrum, libero nec malesuada condimentum, diam ante dictum purus, sagittis iaculis orci erat eu sapien. Sed lectus ligula, vulputate nec placerat.</p>
                <a class="next" href="step1">Continuer</a>
            </div>
        </div>
    </section>
    </div>
</body>
<script>
    AOS.init();
  </script>
</html>