<?php
include "connect.php";
include "jdf.php";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>سیستم مدیریت مدرسه</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="" class="navbar-brand">سیستم مدیریت مدرسه</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php">صفحه اصلی</a></li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ورود به سیستم <b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li> <a href="admin/login.php">ورود مدیر</a> </li>
			<li> <a href="teachers/login.php">ورود اساتید</a> </li>
			<li> <a href="students/login.php">ورود دانش آموزان</a> </li>
		  </ul>
		</li>
			<li><a href="contact.php">تماس با ما</a></li>
		</ul>
	</div>
</div>
<hr>
<div class="container">
	<div class="row">
	<div class="well text-center"><h3>آخرین اخبار مدرسه</h3></div>
<?php
	$query = "SELECT * FROM `news` ORDER BY id DESC";
	$result = $db->query($query);
	
	while($rows=$result->fetch_assoc()) { 
?>
		<div class="panel panel-danger">
			<div class="panel-heading"><?php echo $rows["title"] ?></div>
			<div class="panel-body"><?php echo $rows["ltext"] ?></div>
		</div>
<?php } ?>

	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>