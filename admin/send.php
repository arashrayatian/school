<?php
include "../connect.php";
if(isset($_GET["id"])){
	$_SESSION["to"]=$_GET["id"];
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
	<div class="row well">
    <?php
	if(isset($_GET["empty"])){
		echo '<div class="alert alert-danger">لطفا همه فیلدها را پر کنید</div>';
	}
	if(isset($_GET["error"])){
		echo '<div class="alert alert-warning">خطا در ارسال اطلاعات</div>';
	}
	if(isset($_GET["ok"])){
		echo '<div class="alert alert-success">پیام ارسال شد.</div>';
	}
	?>
    	<form action="csend.php" method="post">
    		<div class="form-group">
            <label for="title">عنوان پیام</label>
            <input type="text" class="form-control" name="title">
            </div>
    		<div class="form-group">
            <label for="ltext">متن پیام</label>
            <textarea type="text" class="form-control" name="ltext" rows="3"></textarea>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="send" value="ارسال" >
            </div>
    	</form>
    </div>
</div>



<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
</body>
</html>