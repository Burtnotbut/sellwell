<?php
  require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>熱銷網</title>
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="all.css">
</head>

<body>
  <div class="header">
    <div class="wrap">
      <h1 class="logo"><a>熱  銷  網</a></h1>
      <span class="material-icons menuToggle">menu</span>
      <nav class="nav-menu">
        <a >卡片推薦</a>
        <a href="./contactus/index.html">聯絡我們</a>
		<a href="./board/index.php">討論區</a>
        <a href="./members/index.html">會員專區</a>
      </nav>
    </div>
  </div>
  <div class="wrap">
    <div class="banner">
      <h2>
        <span>熱銷網</span>
        <span>年度暢銷榜單</span>
      </h2>
    </div>
  </div>
  <div class=""container>
    <table border="0" align="center" width="800" cellspacing="2"> 
      <tr bgcolor="#BABA76" height="30" align="center">
        <td>發卡銀行</td>
        <td>卡片名稱</td>
        <td>優惠利率</td>
		<td>優惠內容</td>																
      </tr>
      <?php
	    $sql = "SELECT bank,card_name,rate,comment FROM product_list  ";
	    $result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result) > 0)
				{
					foreach($result as $row)
					{
	  ?>
		  <form method="post" action="collect.php" >
			<tr align="center">
			  <td><?php echo $row['bank']; ?></td>
			  <td><?php echo $row['card_name']; ?></td>
			  <td><?php echo $row['rate']; ?></td>
			  <td><?php echo $row['comment']; ?></td>
			</tr>
		  </form>
    <?php
			}
		  }
    ?>
    </table>
  </div>
  <footer>
    本網站僅作個人作品使用，圖片引用來自網路公開下載，不為營利用途
  </footer>
</body>

</html>