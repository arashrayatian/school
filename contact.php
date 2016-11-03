<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>تماس با ما</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
  <div class="row">
    <nav class="navbar navbar-default">
      <ul class="nav navbar-nav">
        <li><a href="index.php">صفحه اصلی</a></li>
        <li><a href="login.php">ورود به سیستم</a></li>
      </ul>
    </nav>
  </div>
  <div class="row well">
    <div class="col-md-6">
    <h4 class="text-danger"> از طریق فرم زیر می توانید نظرات و پیشنهادات خود را با ما در میان بگذارید. </h4>
			<?php
                if(isset($_GET["empty"])){
                    echo "<div class='alert alert-danger'>لطفا همه فیلدها را پر کنید.</div>";
                }else if(isset($_GET["ok"])){
                    echo "<div class='alert alert-success'>پیغام شما با موفقیت ارسال شد.</div>";
                }else if(isset($_GET["error"])){
                    echo "<div class='alert alert-warning'>خطا در ارسال اطلاعات.</div>";
                }
            ?>
      <form action="cp.php" method="post">
        <div class="form-group">
          <label for="name">نام <span class="text-danger">*</span></label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">ایمیل <span class="text-danger">*</span></label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">متن پیام <span class="text-danger">*</span></label>
          <textarea rows="5" name="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="ارسال پیام" name="message">
        </div>
      </form>
    </div>
    <div class="col-md-6 well">
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">راه های ارتباطی</div>
          <div class="panel-body"> <img src="images/1233.jpg" class="img-responsive img-thumbnail" />
            <hr>
            <h3 class="text-success text-center">دیگر راه های ارتباط با ما :</h3>
            <p>آدرس :شیراز</p>
            <p> تلفن :  09366250961</p>
            <p>ایمیل : <a href="mailto:info@sanjabgroup.com">sanjabgroup.com</a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>