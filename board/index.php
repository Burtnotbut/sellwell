<?php require_once('./conn.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>熱銷網</title>
  <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="board_style.css">
  
  <script type="text/javascript">
    function check()
      {
        if (document.myForm.author.value.length == 0)
        {
          alert("「作者」必填");
          return false;
        }
        if (document.myForm.title.value.length == 0)
        {
          alert("「主題」必填");
          return false;
        }
        if (document.myForm.description.value.length == 0)
        {
          alert("「內容」必填");
          return false;
        }  else  {
		  alert("送出成功");
		}
        myForm.submit();					
      }
  </script>
</head>

<body>
  <div>
      <h1 class="title">熱  銷  網</h1>
      <nav>
	    <ul class="flex-nav">
          <li><a href="../index.php">卡片推薦</a></li>
          <li><a href="../contactus/index.html">聯絡我們</a></li>
		  <li><a>討論區</a></li>
          <li><a href="../members/index.html">會員專區</a></li>
		</ul>
      </nav>
  </div>
  <div class="container">
    <h1 class="smalltitle">留言討論區</h1>
	<div class="board">
	  <?php
	    $sql = 'SELECT * from board ORDER BY created_at DESC';
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
			echo "作者:" . $row['author'] . "<br>";
            echo "主題:" . $row['title'] . "<br>";
			echo "內容:" . $row['description'] . "<br>";
            echo "時間：" . $row['created_at'] . "<hr>";
		  }
		}
	  ?>
    </div>
	<form method="post" action="post.php" name="myForm">
	  <p>請填寫下列資料(作者、主題、內容皆為<u>必填項目</u>)</p>
	  <div>作者:<input name="author" /></div>
	  <div>主題:<input name="title" /></div>
	  <div>內容:<textarea name="description" row="10"></textarea></div>
	  <input type="button" value="送出" onclick="check()" />
	</form>
  </div>
  <footer>
    本網站僅作個人作品使用，圖片引用來自網路公開下載，不為營利用途
  </footer>
</body>
</html>