<?php

  $usernick = $_POST["usernick"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $title = $_POST["title"];
  $description = $_POST["description"];
  
  if (empty($usernick) || empty($phone) || empty($email) || empty($title) || empty($description)) {
	die('資料不完整');
  }
  
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'contactus';
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO contactus(usernick, phone, email, title, description) VALUES('$usernick', '$phone', '$email', '$title', '$description')";
  $result = $conn->query($sql);
  
  header("location:index.html");
  exit();
?>

