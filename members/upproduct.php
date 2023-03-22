<?php
  $account = NULL;
  if (!empty($_COOKIE['account'])) {
    $account = $_COOKIE['account'];
  } else {
    header("Location: index.html");
    header("Location: index.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>熱銷網</title>
  <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="members_style.css">
</head>

<body>
  <div>
    <h1 class="title">熱  銷  網</h1>
      <nav>
        <ul class="flex-nav">
          <li><a href="../index.php">卡片推薦</a></li>
          <li><a href="../contactus/index.html">聯絡我們</a></li>
		  <li><a href="../board/index.php">討論區</a></li>
          <li><a href="index.html">會員專區</a></li>
		</ul>
      </nav>
  </div>
  <?php
    print_r('歡迎登入:   ' . $account);
  ?>
  <div class="container">
    <div class="add">
      <h1 class="smalltitle">新增信用卡情報</h1>
        <form method="post" action="upload.php">
	      <div>發卡銀行:<input name="bank" /></div>
		  <div>卡片名稱:<input name="card_name" /></div>
		  <div>優惠利率:<input name="rate" /></div>
		  <div>優惠內容:<textarea name="comment"></textarea></div>
          <input type="submit" value="刊登" align="right" />
		  <a href="index.html">登出</a>
        </form>
	</div>
  </div>
  <footer>
    本網站僅作個人作品使用，圖片引用來自網路公開下載，不為營利用途
  </footer>
</body>
</html>