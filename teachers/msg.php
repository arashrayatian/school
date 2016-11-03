<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ارسال پیام</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<div class="container"><br><br>
	<div class="row">
		<div class="col-md-7">
        	<form action="cmsg.php" method="post">
        		<div class="form-group">
                <label for="title">عنوان پیام</label>
               		 <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                <label for="ltext">متن پیام</label>
               		 <textarea type="text" name="ltext" class="form-control"></textarea>
                </div>
                <div class="form-group">
               		 <input type="submit" name="send" value="ارسال" class="btn btn-info">
                </div>
        	</form>    	
        </div>
		<div class="col-md-5">
			<div class="panel panel-danger text-center">
				<div class="panel-heading">یادآوری</div>
				<div class="panel-body">
                    <p class="pull-left"> 
                  <img src="../images/send.png" class="img-responsive" /></p>
                    <hr>
                    <p>لطفا پیام ارسالی را به دقت چک کنید.</p>
                </div>
			</div>
		</div>
	</div>
</div>




<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>