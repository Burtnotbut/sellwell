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
  
  if (!$result) {
    die($conn->error);
  }

  
  if ($result->num_rows) {
    // 登入成功，num_rows有抓照比數資料 
	
	$expire = time() + 10;
	setcookie("account", $account, $expire);
    header("Location: upproduct.php");
  } else {
	echo "<script>alert('帳號密碼錯誤，登入失敗'); location.href = 'index.html';</script>";
  }
?>