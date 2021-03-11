<?php
// create a new function
function search($text){
	
	// connection to the Ddatabase
	include_once 'auth/connection.php';
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
	$get_name = $conn->prepare("SELECT * FROM questions WHERE question LIKE '%$text%'");
	// execute the query
	$get_name -> execute();
	// show the users on the page
	while($names = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each user as a link
		echo '<a data-aos="flip-left" class="question"><p class="lg">'.$names['question'].'</p><p class="sm">' .$names['answer'] .'</p></a>';
		
	}
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>