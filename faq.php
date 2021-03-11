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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
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
<script>
$(document).ready(function(e){
	$("#search").keyup(function(){
        if(this.value.length > 0) {
            $('.illustration').hide()
            $("#show_up").show();
		var text = $(this).val();
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'txt=' + text,
			success: function(data){
				$("#show_up").html(data);
			}
		});
        } else {
            $('.illustration').show()
            $('a').remove('.question');
        } 

	})
});
</script>
<div class="container dark start">

        <div class="content" >
            <h1 data-aos="fade-up" data-aos-delay="0">ETAPE 3</h1>
			<p data-aos="fade-up" data-aos-delay="0" class="md">Il te reste des questions ? Trouve les réponses juste en dessous !</p>
            <div class="search-bar" data-aos="fade-up" data-aos-delay="1000">
                <input type="text" name="names" id="search" placeholder="Tapez le nom d'un métier ou des mots clés..."/>
                <div id="show_up"></div>
			</div>
            <div class="illustration">
                <img src="src/img/illustration.svg">
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