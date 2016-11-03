<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فرم ویرایش اطلاعات دانش آموزان</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(
function()
{
  $("#reshte").val("<?php echo $_GET["reshte"] ?>");  
  $("#paye").val("<?php echo $_GET["paye"] ?>");
}
);
</script>
</head>

<body>


<div class="container">
    <div class="row wel">
    <h3 class="text-center">فرم ویرایش اطلاعات دانش آموزان</h3>
    	<div class="col-md-4"></div>
         <div class="col-md-4">
       <?php
			
			$_SESSION["idt"] = $_GET["id"];
			$query = "SELECT * FROM `students` WHERE id='".$_GET["id"]."' ";
			$result=$db->query($query);
			while($rows = $result->fetch_assoc()){
			
		?>
         	<form action="ces.php" method="post">
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" 
                    value="<?php echo $rows["fname"] ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="lname" class="form-control"
                    value="<?php echo $rows["lname"] ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="ncode" class="form-control" 
                    value="<?php echo $rows["ncode"] ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="age" class="form-control" 
                    value="<?php echo $rows["age"] ?>" />
                </div>
                <div class="form-group">
                    <textarea type="text" name="address" class="form-control" /><?php echo $rows["address"] ?></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="tell" class="form-control" 
                    value="<?php echo $rows["tell"] ?>" />
                </div>
                <div class="form-group">
                	<label for="tell">رشته تحصیلی</label>
                    <select name="reshte" id="reshte">
                        <option value="کامپیوتر">کامپیوتر</option>
                        <option value="معماری">معماری</option>
                        <option value="حسابداری">حسابداری</option>
                    </select>
                </div>
                <div class="form-group">
                	<label for="tell">پایه تحصیلی</label>
                    <select name="paye" id="paye">
        				<option value="2">دوم</option>
        				<option value="3">سوم</option>
					</select>
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                    value="<?php echo $rows["username"] ?>" />
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" 
                    placeholder="بازنشانی رمز" />
                </div>
                <div class="form-group">
                    <input type="submit" name="edit" class="btn btn-info" value="ویرایش اطلاعات" />
                     <input type="reset" name="reset" class="btn btn-warning" value="انصراف" />
                </div>
            </form>
           <?php } ?>
         </div>
         <div class="col-md-4"></div>
    </div>
</div>





</body>
</html>