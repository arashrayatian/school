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
<div class="container"><br><br>
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped tabled-hover table-bordered">
        <thead class="bg-danger">
          <tr>
            <th>ش</th>
            <th>تاریخ دریافت</th>
            <th>عنوان پیام</th>
            <th>گیرنده</th>
            <th>فرستنده</th>
            <th>عملیات</th>
          </tr>
        </thead>
<?php
  $i=1;
  $user = $_SESSION["user"];
  $pass = $_SESSION["pass"];
  $query="select * from teachers where username='".$user."' && password='".$pass."';";
  $result=$db->query($query);
  $rows=$result->fetch_assoc();
  $to=$rows["id"];

  $mquery="SELECT * FROM `payam` WHERE `to` ='".$to."' ORDER BY `id` DESC";
  $mresult=$db->query($mquery);
  while($mrows=$result->fetch_assoc())
  {
	  echo "
	  	<tbody>
			<tr>
			<td>".$i."</td>
			<td>".$mrows["date"]."</td>
			<td><a href=show.php?id=".$mrows["id"].">".$mrows["title"]."</a></td>
			<td>".$rows["fname"]." ".$rows["lname"]."</td>
			<td>Admin</td>
			<td><a href=dp.php?id=".$mrows["id"].">حذف پیام</a></td
			<tr align=center>";
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
            <li>لطفا در حفظ و نگهداری نام کاربری و رمز خود کوشا باشید. برخی از پیام های دریافتی محرمانه هستند.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>