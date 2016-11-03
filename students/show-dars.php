<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>نمایش نمرات دانش آموز</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br><br>
	<div class="row">
		<div class="col-md-6">
			<table class="table table-bordered table-striped">
				<thead class="bg-success">
					<tr>
						<th>ش</th>
						<th>رشته</th>
						<th>پایه</th>
                        <th>نام درس</th>
                        <th colspan="2">نمایش نمره</th>
					</tr>
				</thead>
                <?php
$query = "SELECT * FROM `dars` WHERE `rid`='".$_GET["rid"]."' && `pid`='".$_GET["pid"]."';";
				$result=$db->query($query);
				while($rows = $result->fetch_assoc()){
					echo "
				<tbody>
					<tr>
						<td>".$rows["id"]."</td>
						<td>".$rows["rid"]."</td>
						<td>".$rows["pid"]."</td>
						<td>".$rows["name"]."</td>
<td><a href=show-nomre.php?uname=".$_GET["uname"]."&dname=".$rows["name"].">نمایش نمره کلاسی</a></td>
<td><a href=payani.php?uname=".$_GET["uname"]."&dname=".$rows["name"].">نمایش نمره پایانی</a></td>
					</tr>
				</tbody>
					
					";
				}
				?>
			</table>
		</div>
		<div class="col-md-6"></div>
	</div>
</div>



<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>