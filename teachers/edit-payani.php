<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ویرایش نمرات</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br><br>
	<div class="row">
		<div class="col-md-6">
   <?php
			include "../connect.php";
		if(isset($_GET["empty"])){
			echo "<div class='alert alert-danger'>پر کردن فیلدها الزامی است.</div>";
		}elseif(isset($_GET["error"])){
			echo "<div class='alert alert-warning'>خطا.</div>";
		}
		elseif(isset($_GET["ok"])){
			echo "<div class='alert alert-success'>نمره جدید ثبت شد.</div>";
		}
    ?>
			<form action="cedit-payani.php?id=<?php echo $_GET["id"] ?>" method="post">
				<div class="form-group">
                <label for="nomre">اصلاح نمره</label>
                <input type="text" name="nomre" value="<?php echo $_GET["nomre"] ; ?>" class="form-control">
                </div>
				<div class="form-group">
                <input type="submit" name="edit" value="ویرایش" class="btn btn-info">
                </div>
			</form>
		</div>
	</div>
</div>







<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>