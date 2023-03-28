<?php

  $bank = $_POST["bank"];
  $card_name = $_POST["card_name"];
  $rate = $_POST["rate"];
  $comment = $_POST["comment"];
  
  if (empty($bank) || empty($card_name) || empty($rate) || empty($comment)) {
	die('資料不完整');
  }
  
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'card_info';
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO card_info(bank, card_name, rate, comment) VALUES('$bank', '$card_name', '$rate', '$comment')";
  $result = $conn->query($sql);
  
  
  header("location:upproduct.php");
  exit();
?>