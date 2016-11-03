<?php
include "../connect.php";
include "../jdf.php";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>درج خبر جدید</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../editor/ckeditor.js"></script>
</head>

<body><br>


<div class="container">
    <div class="row wel">            
     
         <div class="col-md-6">
         <?php
		 	if(isset($_GET["editok"])){
				echo '<div class="alert alert-success">اطلاعات با موفقیت بروزرسانی شد.</div>';
			}
			else if(isset($_GET["editerr"])){
				echo '<div class="alert alert-warning">خطا در ارسال اطلاعات</div>';
			}

		 ?>
         	 <?php
			
			
			$query = "SELECT * FROM `admin` ";
			$result = $db->query($query);
			while($rows = $result->fetch_assoc()){
			
		?>
         	<form action="cea.php" method="post">
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" 
                    value="<?php echo $rows["fname"] ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="lname" class="form-control"
                    value="<?php echo $rows["lname"] ?>" />
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
         <div class="col-md-6">
        <div class="panel panel-success">
        <div class="panel-heading">پنل مدیریت سیستم</div>
        <div class="panel-body">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>نام کاربری</th>
                                        <th>رمز</th>
                                    </tr>
                                </thead>
<?php
$query = "SELECT * FROM `admin` ORDER BY id DESC";
$result = $db->query($query);
if($query){
while($rows=$result->fetch_assoc()){
echo "
<tbody>
	<tr>
		<td>".$rows["fname"]."</td>
		<td>".$rows["lname"]."</td>
		<td>".$rows["username"]."</td>
		<td>".$rows["password"]."</td>
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


<script language="javascript">
CKEDITOR.replace( 'textarea_id', {
	// Load the German interface.
	language: 'fa'
});
</script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>