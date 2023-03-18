<?php
  $account = NULL;
  if (!empty($_COOKIE['account'])) {
    $account = $_COOKIE['account'];
  } else {
    header("Location: index.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>熱銷網</title>
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="members_style.css">
</head>

<body>
  <div class="header">
    <div class="wrap">
      <h1 class="logo"><a href="#">熱  銷  網</a></h1>
      <span class="material-icons menuToggle">menu</span>
      <nav class="nav-menu">
        <a href="#policycan">保單罐頭</a>
        <a href="./contactus/index.html">聯絡我們</a>
		<a href="./board/index.php">討論區</a>
		<a href="./calculation/index.html">商品試算</a>
        <a href="./members/index.html">會員專區</a>
      </nav>
    </div>
  </div>
  <?php
    print_r('歡迎登入: ' . $account);
  ?>
  <div class="container">
    <p align="center">
      新增信用卡資訊
    </p> 
    <p align="center">
      <form method="post" action="upload.php">
	    <div>發卡銀行:<input name="bank" /></div>
		<div>卡片名稱:<input name="card_name" /></div>
		<div>優惠利率:<input name="rate" /></div>
		<div>優惠內容:<textarea name="comment"></textarea></div>
        <input type="submit" value="刊登" />
		<a href="index.html">登出</a>
      </form>
    </P>
  </div>
</body>  


  <footer>
    本網站僅作個人作品使用，圖片引用來自網路公開下載，不為營利用途
  </footer>
</body>

</html>