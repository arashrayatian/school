<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فرم ویرایش اطلاعات اساتید</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(
function()
{
  $("#reshte").val("<?php echo $_GET["reshte"] ?>");  
  $("#madrak").val("<?php echo $_GET["madrak"] ?>");
}
);
</script>



</head>

<body>


<div class="container">
    <div class="row wel">
    <h3 class="text-center">فرم ویرایش اطلاعات اساتید</h3>
    	<div class="col-md-3"></div>
         <div class="col-md-6">
        <?php
		 	if(isset($_GET["empty"])){
				echo '<div class="alert alert-danger">پر کردن همه فیلدها الزامی است.</div>';
			}
			else if(isset($_GET["ok"])){
				echo '<div class="alert alert-success">اطلاعات با موفقیت ارسال شد.</div>';
			}
			else if(isset($_GET["error"])){
				echo '<div class="alert alert-warning">خطا در ارسال اطلاعات</div>';
			}
			else if(isset($_GET["uperr"])){
				echo '<div class="alert alert-warning">آپلود فایل انجام نشد</div>';
			}
			else if(isset($_GET["pasvand"])){
				echo '<div class="alert alert-warning">فرمت فایل اشتباه است. فرمت های قابل استفاده : jpg/jpeg/png/gif</div>';
			}
			else if(isset($_GET["http"])){
				echo '<div class="alert alert-warning">آپلود انجام نشد</div>';
			}

		 ?>
         
         
         
       <?php
			$_SESSION["idt"] = $_GET["id"];
			$query = "SELECT * FROM `teachers` WHERE id='".$_GET["id"]."' ";
			$result=$db->query($query);
			while($rows = $result->fetch_assoc()){
			
		?>
         	<form action="cet.php" method="post">
                <div class="form-group">
                	<label for="fname">نام</label>
                    <input type="text" name="fname" class="form-control" 
                    value="<?php echo $rows["fname"] ?>" />
                </div>
                <div class="form-group">
                	<label for="lname">نام خانوادگی</label>
                    <input type="text" name="lname" class="form-control"
                    value="<?php echo $rows["lname"] ?>" />
                </div>
                <div class="form-group">
                	<label for="ncode">کدملی</label>
                    <input type="text" name="ncode" class="form-control" 
                    value="<?php echo $rows["ncode"] ?>" />
                </div>
                <div class="form-group">
                	<label for="age">سن</label>
                    <input type="text" name="age" class="form-control" 
                    value="<?php echo $rows["age"] ?>" />
                </div>
                <div class="form-group">
                	<label for="address">آدرس</label>
                    <textarea type="text" name="address" class="form-control" /><?php echo $rows["address"] ?></textarea>
                </div>
                <div class="form-group">
                	<label for="tell">تلفن</label>
                    <input type="text" name="tell" class="form-control" 
                    value="<?php echo $rows["tell"] ?>" />
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
                	<label for="madrak">مدرک</label>
                        <select name="madrak" id="madrak">
                            <option value="لیسانس" selected="selected">لیسانس</option>
                            <option value="فوق-لیسانس">فوق لیسانس</option>
                            <option value="دکتری">دکتری</option>
                        </select>
                </div>
                <div class="form-group">
                	<label for="file">آپلود فایل</label>
                    <input type="file" name="file" class="form-control" />
                </div>
                <div class="form-group">
                	<label for="username">نام کاربری</label>
                    <input type="text" name="username" class="form-control"
                    value="<?php echo $rows["username"] ?>" />
                </div>
                <div class="form-group">
                	<label for="password">رمز</label>
                    <input type="text" name="password" class="form-control" 
                    placeholder="بازنشانی رمز"/>
                </div>
                <div class="form-group">
                 <input type="submit" name="edit" class="btn btn-info" value="ویرایش اطلاعات" />
                 <input type="reset" name="reset" class="btn btn-warning" value="انصراف" />
                </div>
            </form>
           <?php } ?>
         </div>
         <div class="col-md-3"></div>
    </div>
</div>



</body>
</html>