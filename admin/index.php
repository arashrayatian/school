<?php
include "../connect.php";
if($_SESSION["adminlog"]!=1){
	header("location:../login.php");
	exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>بخش مدیریت سیستم</title>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="navbar navbar-default">
			<ul class="nav navbar-nav">
				<li class="active"><a href="../index.php">بازگشت به صفحه اصلی</a></li>
                <li><a href="insert-news.php" target="frame">درج خبر جدید</a></li>
                <li><a href="insert-teacher.php" target="frame">درج مدرس</a></li>
                <li><a href="insert-student.php" target="frame">درج دانش آموز</a></li>
                <li>
      <a href="comments.php" target="frame">پیام های دریافتی <span class="badge">
      <?php
	  $query = "SELECT * FROM `payam` WHERE `to`='1' && `status`='1';";
	  $result=$db->query($query);
	  $i=0;
	  while($rows=$result->fetch_assoc()){
		  $i++;
	  }
	  echo $i;
	  ?>
      
      </span></a>
                </li>
                <li><a href="dars.php" target="frame">لیست دروس</a></li>
                <li><a href="nazar.php" target="frame">نظرات ، اعتراضات</a></li>
                <li><a href="admin.php" target="frame">مدیریت حساب شخصی</a></li>
                <li><a href="logout.php">خروج</a></li>
			</ul>
		</div>
	</div>
  	<div class="row">
    	<div class="col-md-12">
    		<div class="row">
            	<iframe name="frame" width="100%" height="1100" class="pane panel-primary"></iframe>
            </div>
    	</div>
    </div>
</div>



<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
</body>
</html>