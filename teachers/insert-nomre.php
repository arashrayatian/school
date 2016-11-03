<?php
include "../connect.php";
$_SESSION["uname"] = $_GET["uname"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>درج نمرات</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br><br>
	<div class="row">
        <div class="col-md-4">
	<?php
		if(isset($_GET["empty"])){
			echo "<div class='alert alert-danger'>پر کردن فیلدها الزامی است.</div>";
		}elseif(isset($_GET["error"])){
			echo "<div class='alert alert-warning'>خطا.</div>";
		}
		elseif(isset($_GET["ok"])){
			echo "<div class='alert alert-success'>نمره ثبت شد.</div>";
		}
    ?>
            <form action="cinomre.php" method="post">
                <div class="form-group">
                	<label for="nomre">ثبت نمره میان ترم</label>
                	<input type="text" name="nomre" class="form-control">
                </div>
                <div class="form-group">
                	<input type="submit" value="ارسال" class="btn btn-success" name="insert">
                </div>
            </form>
        </div>
	</div>
</div>



<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
</body>
</html>