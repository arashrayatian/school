<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>لیست دانش آموزان</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br><br><div class="row">

			<table class="table table-bordered table-hover table-striped">
				<thead class="bg-warning">
					<tr>
						<th>نام</th>
						<th>نام خانوادگی</th>
						<th>تصویرکاربری</th>
                        <th colspan="2">درج نمره</th>
                        <th colspan="2">لیست نمرات</th>
					</tr>
				</thead>
                <?php
				include "../connect.php";
				$query = " SELECT * FROM `students` WHERE `reshte`='".$_GET["reshte"]."' && `paye`='".$_GET["paye"]."';";
				$result=$db->query($query);
				while($rows = $result->fetch_assoc()){
					$_SESSION["dname"] = $_GET["dname"];
					echo "
				<tbody>
					<tr>
						<td><img class='img-thumbnail' src=../admin/".$rows["pic"]."></td>
						<td>".$rows["fname"]."</td>
						<td>".$rows["lname"]." </td>
<td><a href=insert-nomre.php?uname=".$rows["username"]."> نمره میان ترم</a></td>
<td><a href=insert-payani.php?uname=".$rows["username"]."&dname=".$_GET["dname"].">نمره پایانی</a></td>
<td><a href=show-nomre.php?uname=".$rows["username"]."&dname=".$_GET["dname"].">نمرات کلاسی</a></td>
<td><a href=show-payani.php?uname=".$rows["username"]."&dname=".$_GET["dname"].">نمرات پایانی</a></td>
					</tr>
				</tbody>
					
					";
				}
				?>
				
			</table>
		</div></br></div>



<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
</body>
</html>