<?php
  require_once('conn.php');

  $account = $_POST['account'];
  $password = $_POST['password'];

  $sql = sprintf(
    "select * from members where account='%s' and password='%s'",
    $account,
    $password
  );
  $result = $conn->query($sql);
  
  // 登入失敗，中斷連線
  /*
  if (!$result) {
    die($conn->error);
  }
  */
  
  if ($result->num_rows) {
    // 登入成功，num_rows有抓照比數資料 
	
	$expire = time() + 10;
	setcookie("account", $account, $expire);
    header("Location: upproduct.php");
  } else {
    header("Location: index.html");
  }
?>