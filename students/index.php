<?php
include "../connect.php";
if($_SESSION["studlog"]!=1){
	header("location:login.php");
	exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پنل مدیریت دانش آموزان</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container">
  <div class="row"><br>
    <?php
	$user = $_SESSION["user"];
	$pass = $_SESSION["pass"];
	
	$query = "SELECT * FROM `students` WHERE username='".$user."' && password='".$pass."' ";
	$result=$db->query($query);
	
		while($rows=$result->fetch_assoc()){
			$_SESSION["fromteach"] = $rows["id"];
			$_SESSION["ostad"] = $rows["ncode"];
			$name = $rows["fname"];
			$family = $rows["lname"];
	echo "<div class='text-center bg-muted' >
	<img class='img-thumbnail' src=../admin/".$rows["pic"]." />
	پنل کاربری آقای <span class='text-danger'>".$name." ".$family."</span></div>" ;
?>
    <br>
    <div class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="show-dars.php?rid=<?php echo $rows["reshte"]?>&pid=<?php echo $rows["paye"] ?>&uname=<?php echo $rows["username"]; ?>" target="frame">لیست دورس ترم</a></li>
        <li><a href="karname.php?uname=<?php echo $rows["username"] ?>" target="frame">کارنامه تحصیلی</a></li>
        <li><a href="nazar.php" target="frame">ارسال پیام</a></li>
        <li><a href="logout.php">خروج</a></li>
      </ul>
    </div>
    <?php  }

	
?>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <iframe name="frame" width="100%" height="1000" class="pane panel-success"></iframe>
      </div>
    </div>
  </div>
</div>
<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.js"></script>
</body>
</html>