<?php 

if($_POST['isConnected'] == 0 || $_POST['isConnected'] == null) {
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<title>Course à l'orientation</title>
    <link rel="stylesheet" href="../src/style/dist/auth.css">

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
    <div class="container">
    <img class="logo" src="../src/img/logoauv.png">
        <img class="pattern1" src="../src/img/pattern1.png">
        <img class="pattern2" src="../src/img/pattern2.png">
        <div class="content" data-aos="flip-left" data-aos-delay="500">
            
            <h1>Se connecter</h1>
            <form action="auth.php?action=login" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="submit" value="CONFIRMER">
            </form>
			<a href="register.php" style="text-align:center;color: #353D4D;">Pas de compte ? Inscrivez-vous</a>
        </div>
    </div>
</body>
<script>
    AOS.init();
  </script>
</html>