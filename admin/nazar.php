<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پیام های دریافتی</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br>
  <br>
  <div class="row">
    <div class="col-md-8">
    <?php
	if(isset($_GET["delerr"])){
		echo '<div class="alert alert-warning">خطا در ارسال اطلاعات</div>';
	}
	else if(isset($_GET["delok"])){
		echo '<div class="alert alert-success">پیام حذف شد.</div>';
	}
	?>    
      <table class="table table-striped tabled-hover table-bordered">
        <thead class="bg-primary">
          <tr>
            <th>ش</th>
            <th>تاریخ دریافت</th>
            <th>عنوان پیام</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <?php

  $mquery="SELECT * FROM `comments` ORDER BY `id` DESC ";
  $mresult=$db->query($mquery);
  $i=+1;
  while($mrows=$mresult->fetch_assoc()){
	  echo "
	  	<tbody>
			<tr>
			<td>".$i."</td>
			<td>".$mrows["date"]."</td>
			<td><a href=show-nazar.php?id=".$mrows["id"].">".$mrows["title"]."</a></td>
			<td><a href=dnazar.php?id=".$mrows["id"].">حذف پیام</a></td
			<tr>";
			  $i++; "</tr>
		</tbody>
	  
	  ";
  }
 
  ?>
      </table>
    </div>
    <div class="col-md-4">
      <div class="panel panel-warning">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <p class="text-center"> <img src="../images/payam.png" width="256" class="img-responsive" /></p>
          <ul class="list-unstyled">
            <li>نظرات و پیشنهادات دانش آموزان</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>