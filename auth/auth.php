<?php
	session_start();
 
	require_once 'connection.php';

	$action = $_GET['action'];

	if($action == 'login') {
		if(ISSET($_POST['email']) && ISSET($_POST['password'])){
			if($_POST['email'] != "" || $_POST['password'] != ""){
				$email = $_POST['email'];
				$password = $_POST['password'];
				echo $password;
				$sql = "SELECT * FROM users  WHERE email='$email'";
				$query = $conn->prepare($sql);
				echo 'ok';
				$query->execute();
				$fetch = $query->fetch(PDO::FETCH_ASSOC);

				if (is_array($fetch))
{
  if (password_verify($password, $fetch['password']))
  {
    $_SESSION['user'] = $fetch['id'];
					$_SESSION['isConnected'] = 1;
					echo 'ok';
					header("Location: ../index.php");
  } else {
	echo "
	<script>alert('Vos informations de connexion sont incorrectes')</script>
	<script>window.location = 'index.php'</script>
	";
  }
}
			}else{
				echo "
					<script>alert('Please complete the required field!')</script>
					<script>window.location = 'index.php'</script>
				";
			}
		}
	}

	if($action == 'register') {
		if(ISSET($_POST['email']) && ISSET($_POST['password']) && ISSET($_POST['firstname']) && ISSET($_POST['lastname']) ){
			if($_POST['email'] != "" && $_POST['password'] != "" && $_POST['firstname'] != "" && $_POST['lastname'] != ""){
				$email = $_POST['email'];
				$password = $_POST['password'];
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$password = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users VALUES (NULL, '$firstname', '$lastname', '$email', '$password')";
				echo $sql;
				$query = $conn->prepare($sql);
				$query->execute();
				header('Location: index.php');
				} else{
					echo "
					<script>alert('Vos informations de connexion sont incorrectes')</script>
					<script>window.location = 'index.php'</script>
					";
				}
			}else{
				echo "
					<script>alert('Please complete the required field!')</script>
					<script>window.location = 'index.php'</script>
				";
			}
		} 

	if($action == 'logout') {
session_start();
unset($_SESSION["user"]);
unset($_SESSION["isConnected"]);
header("Location:login.php");

	}
 

?>