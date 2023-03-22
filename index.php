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
  <div>
      <h1 class="title">熱  銷  網</h1>
      <nav>
	    <ul class="flex-nav">
          <li><a>卡片推薦</a></li>
          <li><a href="./contactus/index.html">聯絡我們</a></li>
		  <li><a href="./board/index.php">討論區</a></li>
          <li><a href="./members/index.html">會員專區</a></li>
        </ul>
	  </nav>
  </div>
  <div class="picture">
      <span class="subject">年 度 暢 銷 榜 單</span>
  </div>
  <div class="container">
	<table border="1" align="center" width="800" cellspacing="2"> 
	  <caption class="creditrecom">2023 信用卡推薦 TOP 10 </caption>
      <tr bgcolor="#BABA76" height="30" align="center">
        <td>發卡銀行</td>
        <td>卡片名稱</td>
        <td>優惠利率</td>
		<td>辦卡連結</td>																
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
			  <td><?php echo $row['rate'] . "%"; ?></td>
			  <td><input type="button" value="點擊進入" onclick="location.href='<?php echo $row['comment']; ?>'"></td>
			</tr>
		  </form>
    <?php
			}
		  }
    ?>
    </table>
	<table border="1" align="center" width="800" cellspacing="2"> 
	  <caption class="creditrecom">會員情報版</caption>
      <tr bgcolor="#BABA76" height="30" align="center">
        <td>發卡銀行</td>
        <td>卡片名稱</td>
        <td>優惠利率</td>
		<td>優惠情報</td>																
      </tr>
      <?php
	    $sql = "SELECT bank,card_name,rate,comment FROM card_info ";
	    $result = mysqli_query($conn2,$sql);

		if(mysqli_num_rows($result) > 0)
				{
					foreach($result as $row)
					{
	  ?>
		  <form>
			<tr align="center">
			  <td><?php echo $row['bank']; ?></td>
			  <td><?php echo $row['card_name']; ?></td>
			  <td><?php echo $row['rate']; ?></td>
			  <td align="left"><?php echo $row['comment']; ?>'"></td>
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