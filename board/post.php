<?php

  $author = $_POST["author"];
  $title = $_POST["title"];
  $description = $_POST["description"];
  $current_time = date("Y-m-d H:i:s");
  
  if (empty($author) || empty($title) || empty($description)) {
	die('資料不完整');
  }
  
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'board';
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO board(author, title, description) VALUES('$author', '$title', '$description')";
  $result = $conn->query($sql);
  
  header("location:index.php");
  exit();
?>

