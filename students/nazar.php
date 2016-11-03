<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پنل مدیریت دانش آموزان</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br><br>
  <div class="row">
  <div class="col-md-6">
          <?php
					if(isset($_GET["empty"])){
						echo "<div class='alert alert-danger'>پر کردن فیلدها الزامی است.</div>";
					}elseif(isset($_GET["error"])){
						echo "<div class='alert alert-warning'>خطا.</div>";
					}
					elseif(isset($_GET["ok"])){
						echo "<div class='alert alert-success'>پیام با موفقیت ارسال شد.</div>";
					}
		?>  
   	<form action="cnazar.php" method="post">
  		<div class="form-group">
        	<label for="title">عنوان</label>
        	<input type="text" name="title" class="form-control">
        </div>
  		<div class="form-group">
        	<label for="text">متن</label>
        	<textarea type="text" name="ltext" class="form-control"></textarea>
        </div>
  		<div class="form-group">
        	<input type="submit" name="send" value="ارسال" class="btn btn-info">
        </div>
  	</form> 
  </div>
    <div class="col-md-6">
    	<div class="panel panel-primary">
    		<div class="panel-heading">نکات مهم :</div>
    		<div class="panel-body">
            	در صورتی که نظر یا پیشنهادی دارید و یا نسبت به نمرات خود اعتراض دارید از طریق فرم برای ما بفرستید.
            </div>
    	</div> 
  </div>
  </div>
</div>
</body>
</html>