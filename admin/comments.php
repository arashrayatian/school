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
    <div class="col-md-9">
          <?php
	  $query = "SELECT * FROM `payam` WHERE `to`='1' && `status`='1';";
	  $result=$db->query($query);
	  $i=0;
	  while($rows=$result->fetch_assoc()){
		  $i++;
	  }
	  echo "<h4 class='text-center'>پیام های خوانده نشده : <span class='label label-success'>".$i."</span></h4>";
	  ?>
      <br><hr>
      <table class="table table-striped tabled-hover table-bordered">
        <thead class="bg-danger">
          <tr>
            <th>ش</th>
            <th>تاریخ دریافت</th>
            <th>عنوان پیام</th>
            <th>فرستنده</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <?php

  $mquery="SELECT * FROM `payam` WHERE `to` ='1' ORDER BY `id` DESC ";
  $mresult=$db->query($mquery);
  $i=+1;
  while($mrows=$mresult->fetch_assoc()){
	$query = "SELECT * FROM `teachers` WHERE `id`='".$mrows["from"]."'";
	$result = $db->query($query);
	$rows = $result->fetch_assoc();
	  echo "
	  	<tbody>
			<tr>
			<td>".$i."</td>
			<td>".$mrows["date"]."</td>
			<td><a href=show.php?id=".$mrows["id"].">".$mrows["title"]."</a></td>
			<td>".$rows["fname"]." ".$rows["lname"]."</td>
			<td><a href=dp.php?id=".$mrows["id"].">حذف پیام</a></td
			<tr align=center>";
			  $i++; "</tr>

		</tbody>
	  
	  ";
  }
 
  ?>
      </table>
    </div>
    <div class="col-md-3">
      <div class="panel panel-warning">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <p class="text-center"> <img src="../images/payam.png" width="256" class="img-responsive" /></p>
          <ul class="list-unstyled">
            <li>لطفا در حفظ و نگهداری نام کاربری و رمز خود کوشا باشید. برخی از پیام های دریافتی محرمانه هستند.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>