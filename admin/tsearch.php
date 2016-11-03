<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>جستجوی افراد</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">	
</head>

<body>
<div class="container"><br>
	<div class="row">
	    <hr>
    	<h3 class="text-success text-center">نتایج جستجو</h3>
        <hr>
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>تصویر</th>
					<th>نام</th>
					<th>نام خانوادگی</th>
                    <th>کدملی</th>
                    <th>سن</th>
                    <th>تلفن</th>
                    <th>آدرس</th>
                    <th colspan="2">عملیات</th>
				</tr>
			</thead>
            <?php
				include "../connect.php";
				if(isset($_POST["search"])){
					if(empty($_POST["gasht"])){
					header("location:insert-teacher.php?sempty=2020");
					exit;
					}
				$query = "SELECT * FROM `teachers` WHERE `fname`='".$_POST["gasht"]."'";
				$result=$db->query($query);
				while($rows = $result->fetch_assoc()){
					echo "
						<tbody>
							<tr>
								<td><img class='img-thumbnail' src=".$rows["pic"]." /></td>
								<td>".$rows["fname"]."</td>
								<td>".$rows["lname"]."</td>
								<td>".$rows["ncode"]."</td>
								<td>".$rows["age"]."</td>
								<td>".$rows["tell"]."</td>
								<td>".$rows["address"]."</td>
	<th><a class='btn btn-danger' href=ds.php?id=".$rows["id"].">حذف</a></th>
	<th><a class='btn btn-info' href=es.php?id=".$rows["id"].">ویرایش</a></th>
								
							</tr>
						</tbody>					
					";
				}
				}
				else{
					header("location:insert-teacher.php");
					exit;
				}	
				
			?>

		</table>
	</div>
    <div class="row">
    	<hr>
    	<a href="insert-student.php" class="btn btn-primary">بازگشت به صفحه قبل</a>
        <hr>
    </div>
</div>






<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
</body>
</html>