<?php 

$host = "localhost";
$db = "hackaton";
$username = "root"; 
$password = "root";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>