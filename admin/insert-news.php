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
<div class="row">
		<div class="col-md-6">
        <div class="panel panel-default">
        <div class="panel-heading">ارسال خبر جدید</div>
        <div class="panel-body">
        <?php
			if(isset($_GET["empty"])){
				echo '<div class="alert alert-danger">قرار دادن عنوان خبر الزامی است.</div>';
			}elseif(isset($_GET["ok"])){
				echo '<div class="alert alert-success">خبر با موفقیت ارسال شد.</div>';
			}elseif(isset($_GET["error"])){
				echo '<div class="alert alert-warning">خطا.</div>';
			}
		?>
        	<form action="cin.php" method="post">
                    <div class="form-group">
                    <label for="title">عنوان خبر</label>
                    <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="title">چکیده خبر</label>
        <textarea class="form-control" name="stext" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="title">متن کامل خبر</label>
         <textarea class="form-control" id="textarea_id" name="ltext" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <input type="submit" name="insert" value="درج خبر" class="btn btn-info">
                    </div>
                </form>
        </div>
        </div>                
        </div>
		<div class="col-md-6">
        <div class="panel panel-success">
        <div class="panel-heading">مدیریت اخبار ارسال شده</div>
        <div class="panel-body">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ش</th>
                                        <th>عنوان</th>
                                        <th>تاریخ</th>
                                        <th colspan="2" class="text-center">عملیات</th>
                                    </tr>
                                </thead>
								<?php
								$query = "SELECT * FROM `news` ORDER BY id DESC";
								$result=$db->query($query);
								if($result){
								while($rows=$result->fetch_assoc()){
									echo "
								<tbody>
                                    <tr>
                                        <td>".$rows["id"]."</td>
										<td>".$rows["title"]."</td>
										<td>".$rows["date"]."</td>
	<th><a class='btn btn-danger' href=dn.php?id=".$rows["id"].">حذف</a></th>
	<th><a class='btn btn-info' href=en.php?id=".$rows["id"].">ویرایش</a></th>
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