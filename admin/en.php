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
            <h3 class="text-center">برای ویرایش اخبار از فرم زیر استفاده کنید.</h3>
    	<div class="col-md-2"></div>
         <div class="col-md-8">
         <?php	
			$query = "SELECT * FROM news WHERE id= '".$_GET["id"]."'";
			$result=$db->query($query);
			$_SESSION["idn"] = $_GET["id"];
			while($rows = $result->fetch_assoc()){
				
		 ?>
         
            <form action="cen.php" method="post">
                <div class="form-group">
                <label for="title">تیتر خبر : </label>
                <input type="text" name="title" class="form-control"
                value="<?php echo $rows["title"];?>" />
                </div>
                <div class="form-group">
                <label for="stext">چکیده خبر : </label>
                <textarea class="form-control" name="stext" 
                rows="2"><?php echo $rows["stext"];?></textarea>
                </div>
                <div class="form-group">
                <label for="ltext">متن خبر : </label>
               <textarea class="form-control" id="textarea_id" name="ltext" 
               rows="3"><?php echo $rows["ltext"];?></textarea>
                </div>
                <div class="form-group">
                <input type="submit" name="edit" class="btn btn-success" value="ویرایش خبر" />
                </div>
            </form>
		<?php } ?>
            </div>
         </div>
         <div class="col-md-2"></div>
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