<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname1 = 'creditcard';
  
  $conn = new mysqli($servername, $username, $password, $dbname1);
  $conn->query('SET NAMES UTF8');
  if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
  }
  

  $conn2 = new mysqli($servername, $username, $password, 'card_info');
  $conn2->query('SET NAMES UTF8');
  if ($conn->connect_error) {
	die("connection failed: " . $conn2->connect_error);
  }
?>