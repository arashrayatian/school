<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>درس جدید</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br>
  <br>
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-info">
        <div class="panel-heading">درج درس جدید</div>
        <div class="panel-body"> <img src="../images/book.png" class="img-responsive pull-left" width="128"/>
          <hr>
          <p>لطفا در معرفی دروس دقت نمایید.</p>
          <hr><br><br>
          <?php
			if(isset($_GET["empty"])){
				echo '<div class="alert alert-danger">قرار دادن عنوان الزامی است.</div>';
			}elseif(isset($_GET["ok"])){
				echo '<div class="alert alert-success">درس با موفقیت ارسال شد.</div>';
			}elseif(isset($_GET["error"])){
				echo '<div class="alert alert-warning">خطا.</div>';
			}
		?>
          <form action="cdars.php" method="post">
            <div class="form-group">
              <label for="ndars">نام درس</label>
              <input type="text" name="ndars" class="form-control">
            </div>
            <div class="form-group">
            <label for="modares">استاد مربوطه</label>
            <select name="modares">
            <?php
			$mquery = "SELECT * FROM `teachers` ORDER BY id DESC";
			$mresult =$db->query($mquery);
                        
			while($mrows = $mresult->fetch_assoc()){
			?>
                        <option value="<?php echo $mrows["ncode"] ?>">
                        <?php echo $mrows["fname"]." ".$mrows["lname"] ?></option>
                        <?php
			}
			?>
            </select>
            </div>
            <div class="form-group">
              <label for="reshte">رشته تحصیلی</label>
              <select name="reshte" id="reshte">
                <option value="کامپیوتر" selected="selected" >کامپیوتر</option>
                <option value="معماری">معماری</option>
                <option value="حسابداری">حسابداری</option>
              </select>
            </div>
            <div class="form-group">
              <label for="paye">پایه تحصیلی</label>
              <select name="paye" id="paye">
                <option value="2">دوم</option>
                <option value="3">سوم</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="ارسال" class="btn btn-info">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="panel panel-success">
        <div class="panel-heading">مدیریت دروس وارد شده</div>
        <div class="panel-body">
          <table class="table table-bordered table-hover">
            <thead class="bg-warning">
              <tr>
                <th>ش</th>
                <th>رشته</th>
                <th>پایه</th>
                <th>کد استاد</th>
                <th>نام درس</th>
                <th colspan="2" class="text-center">عملیات</th>
              </tr>
            </thead>
            <?php
				$query = "SELECT * FROM `dars` ORDER BY id DESC";
				$result=$db->query($query);
				if($result){
				while($rows=$result->fetch_assoc()){
				echo "
					<tbody>
						<tr>
						<td>".$rows["id"]."</td>
						<td>".$rows["rid"]."</td>
						<td>".$rows["pid"]."</td>
						<td>".$rows["ostad"]."</td>
						<td>".$rows["name"]."</td>
			<th><a class='btn btn-danger' href=ddars.php?id=".$rows["id"].">حذف</a></th>
						</tr>
					</tbody>	
				
				";
				}
				}
			?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../js/bootstrap.js"></script> 
<script src="../js/jquery.js"></script>
</body>
</html>