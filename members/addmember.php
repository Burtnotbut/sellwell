<?php

  $account = $_POST["account"];
  $password = $_POST["password"]; 
  $name = $_POST["name"]; 
  $telephone = $_POST["telephone"]; 
  $address = $_POST["address"];
  $email = $_POST["email"]; 
  $comment = $_POST["comment"];

  $servername = 'localhost';
  $username = 'root';
  $pass = '';
  $dbname = 'members';
  
  $conn = new mysqli($servername, $username, $pass, $dbname);
  if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO members(account, password, name, telephone, address, email, comment) VALUES('$account', '$password', '$name', '$telephone', '$address', '$email', '$comment')";
  $result = $conn->query($sql);
  
  header("location:index.html");
  exit();
?>
