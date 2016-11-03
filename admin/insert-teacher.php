<?php
include "../connect.php";
include "../jdf.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>درج استاد جدید</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../editor/ckeditor.js"></script>
</head>

<body><br>


<div class="container">
    <div class="row wel">            
     
         <div class="col-md-4">
         <?php
		 	if(isset($_GET["empty"])){
				echo '<div class="alert alert-danger">پر کردن همه فیلدها الزامی است.</div>';
			}
			else if(isset($_GET["insok"])){
				echo '<div class="alert alert-success">اطلاعات با موفقیت ارسال شد.</div>';
			}
			else if(isset($_GET["inserr"])){
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
         	<form action="cit.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" 
                    placeholder="نام" />
                </div>
                <div class="form-group">
                    <input type="text" name="lname" class="form-control"
                    placeholder="نام خانوادگی" />
                </div>
                <div class="form-group">
                    <input type="text" name="ncode" class="form-control" 
                    placeholder="کد ملی" />
                </div>
                <div class="form-group">
                    <input type="text" name="age" class="form-control" 
                    placeholder="سن" />
                </div>
                <div class="form-group">
                    <textarea type="text" name="address" class="form-control" /></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="tell" class="form-control" 
                    placeholder="تلفن" />
                </div>
                <div class="form-group">
                	<label for="reshte">رشته تحصیلی</label>
                        <select name="reshte" id="reshte">
                            <option value="Computer" selected="selected" >Computer</option>
                            <option value="Memari">Memari</option>
                            <option value="Hesabdari">Hesabdari</option>
                        </select>
                </div>
                <div class="form-group">
                	<label for="madrak">مدرک</label>
                        <select name="madrak" id="madrak">
                            <option value="Lisans" selected="selected">Lisans</option>
                            <option value="Fogh-Lisans">Fogh-Lisans</option>
                            <option value="Doctora">Doctora</option>
                        </select>
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                    placeholder="نام کاربری" />
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" 
                    placeholder="رمز" />
                </div>
                <div class="form-group">
                  <input type="submit" name="insert" class="btn btn-info" value="ثبت اطلاعات" />
                  <input type="reset" name="reset" class="btn btn-warning" value="انصراف" />
                </div>
            </form>
         </div>
        <div class="col-md-8">
                    <div class="row well text-center">
                <form class="form-inline" method="post" action="tsearch.php">
                    <div class="form-group">
                        <input type="text" name="gasht" class="form-control">
                    </div>
                        <input name="search" type="submit" class="btn btn-default" value="جستجو">
                </form>
            </div>
            <div class="row">
        <div class="panel panel-success">
        <div class="panel-heading">لیست مدرسین</div>
        <div class="panel-body">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>تصویر</th>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>ارسال پیام</th>
                                        <th colspan="2" class="text-center">عملیات</th>
                                    </tr>
                                </thead>
<?php
$query = "SELECT * FROM `teachers` ORDER BY id DESC";
$result=$db->query($query);
if($result){
while($rows=$result->fetch_assoc()){
echo "
<tbody>
	<tr>
		<td><img class='img-thumbnail' src=".$rows["pic"]." /></td>
		<td>".$rows["fname"]."</td>
		<td>".$rows["lname"]."</td>
		<th><a class='btn btn-success' href=send.php?id=".$rows["id"].">ارسال</a></th>
		<th><a class='btn btn-danger' href=dt.php?id=".$rows["id"].">حذف</a></th>
		<th><a class='btn btn-info' href=et.php?id=".$rows["id"]."&reshte=".$rows["reshte"]."&madrak=".$rows["madrak"].">ویرایش</a></th>
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