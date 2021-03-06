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
        <div class="content">
            <h1>Course à l'orientation</h1>
            <div class="buttons_actions">
                <a href="login.php" class="button" id="login">Se connecter</a>
                <a href="register.php" class="button" id="register">S'inscrire</a>
                <a href="../index.php?bypass=1" class="button alt" id="guest">Invité</a>
            </div>
        </div>
    </div>
</body>
<script>
    AOS.init();
  </script>
</html>