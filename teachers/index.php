<?php
include "../connect.php";
if($_SESSION["teachlog"]!=1){
	header("location:login.php");
	exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پنل مدیریت اساتید</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container">
	<div class="row"><br>
    <?php
	$user = $_SESSION["user"];
	$pass = $_SESSION["pass"];
	
	$query = "SELECT * FROM `teachers` WHERE username='".$user."' && password='".$pass."' ";
	$result=$db->query($query);
	if($result){
		while($rows=$result->fetch_assoc()){
			$_SESSION["fromteach"] = $rows["id"];
			$_SESSION["ostad"] = $rows["ncode"];
			$name = $rows["fname"];
			$family = $rows["lname"];
	echo "<div class='text-center bg-muted' >
	<img class='img-thumbnail' src=../admin/".$rows["pic"]." />
	پنل کاربری آقای <span class='text-danger'>".$name." ".$family."</span></div>" ;
}
}
	
?>
<br>
		<div class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li><a href="send.php" target="frame">پیام های دریافتی</a></li>
                <li><a href="msg.php" target="frame">ارسال پیام</a></li>
                <li><a href="nomre.php" target="frame">نمرات دانش آموزان</a></li>
                <li><a href="logout.php">خروج</a></li>
			</ul>
		</div>
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