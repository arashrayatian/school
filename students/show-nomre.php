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
						<th>نام درس</th>
						<th class='bg-info'>نمره</th>
					</tr>
				</thead>
                <?php
$query="SELECT * FROM `nomre` WHERE uname='".$_GET["uname"]."' && dname='".$_GET["dname"]."'";
				$result=$db->query($query);
				$i=0;
				$sum=0;
				while($rows = $result->fetch_assoc()){
					echo "
				<tbody>
					<tr>
						
						<td>".$rows["dname"]."</td>
						<td class='bg-info'>".$rows["nomre"]."</td>
						
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