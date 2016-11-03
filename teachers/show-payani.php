<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>نمرات دانش آموز</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br><br>
	<div class="row">
		<div class="col-md-5">
			<table class="table table-bordered table-striped table-hover">
				<thead class="bg-warning">
					<tr>
						<th>نمرات</th>
						<th>اصلاح نمره</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
                <?php
				include "../connect.php";
				
				$query = "SELECT *FROM payani WHERE `uname`='".$_GET["uname"]."' && `dname`='".$_GET["dname"]."';";
				$result=$db->query($query);
				while($rows=$result->fetch_assoc()){
					echo "
				<tbody>
					<tr>
						<td>".$rows["nomre"]."</td>
			<td><a class='text-info' href='edit-payani.php?nomre=".$rows["nomre"]."&id=".$rows["id"]."'>ویرایش</a></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
					
					";
				}
				?>
			</table>
		</div>
	</div>
</div>



<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
</body>
</html>