<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<div class="container"><br><br>
	<div class="row">
		<div class="col-md-7">
	<?php
		include "../connect.php";
		$id = $_GET["id"];
		$query = " SELECT * FROM `payam` WHERE `id`='".$id."'";
		$result=$db->query($query);
		$rows = $result->fetch_assoc();
    	echo "
		
<div class='panel panel-default'>
	<div class='panel-heading lead'>
		".$rows["title"]."
	</div>
	<div class='panel-body text-justify'>
		".$rows["matn"]."
	</div>
</div>
		
		
		";
    ?>        
        </div>
		<div class="col-md-5">
			<div class="panel panel-default text-center">
				<div class="panel-heading">پاسخ دادن</div>
				<div class="panel-body">
                    <p class="pull-left"> 
                  <img src="../images/send.png" class="img-responsive" /></p>
                    <hr>
                    <p>می توانید به این پیام پاسخ دهید.</p>
                    <a href="msg.php" class="btn btn-primary">پاسخ دادن</a>
                </div>
			</div>
		</div>
	</div>
</div>




<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>