<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>بخش ورود به سیستم دانش آموزان</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container">
  <div class="row">
    <div class="navbar navbar-default">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">خانه</a></li>
        <li><a href="../contact.php">تماس با مدیر</a></li>
      </ul>
    </div>
  </div>
  <div class="row well">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">فرم ورود به سیستم دانش آموزان</div>
        <div class="panel-body">
          <?php
					if(isset($_GET["empty"])){
						echo "<div class='alert alert-danger'>پر کردن فیلدها الزامی است.</div>";
					}elseif(isset($_GET["error"])){
						echo "<div class='alert alert-warning'>کاربری در سامانه یافت نشد.</div>";
					}
		?>
          <form action="check-login.php" method="post">
            <div class="form-group">
              <label for="username">نام کاربری <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="username">رمز ورود <span class="text-danger">*</span></label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="login" value="ورود به سیستم">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3>نکات مهم :</h3>
        </div>
        <div class="panel-body">
          <p class="text-center"> <img src="../images/stud.png" width="256" class="img-responsive img-thumbnail" /></p>
          <ul class="list-unstyled">
            <li class="text-success">پر کردن تما فیلدها در فرم الزامی است.</li>
            <li class="text-success">در صورتی که رمز عبور خود را فراموش کرده اید به مدیریت اطلاع دهید.</li>
            <li class="text-success">لطفا رمز خود را در اختیار دیگران قرار ندهید.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.js"></script>
</body>
</html>