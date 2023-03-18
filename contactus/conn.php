<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'contactus';
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->query('SET NAMES UTF8');
  if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
  }
?>