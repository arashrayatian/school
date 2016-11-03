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
<div class="container"><br>
  <br>
  <div class="row">
    <div class="col-md-6">
      <table class="table table-bordered table-striped">
        <thead class="bg-success">
          <tr>
            <th>نام درس</th>
            <th class='bg-warning'>نمره پایانی</th>
            <th class='bg-danger'>نمره کلاسی</th>
            <th class='bg-primary'>نمره نهایی</th>
          </tr>
        </thead>
        <tbody>
          <?php
				$j=0;
				$ave=0;
				$query = "SELECT * FROM payani WHERE `uname`='".$_GET["uname"]."'";
				$result=$db->query($query);
				while($rows = $result->fetch_assoc()){
$mquery = "SELECT * FROM nomre WHERE `uname`='".$_GET["uname"]."' && dname='".$rows["dname"]."';";
				$mresult=$db->query($mquery);
				$mrows = $mresult->fetch_assoc();
				$j++;
					$payani=$rows["nomre"];
					$dars = $rows["dname"];
					$kelasi = $mrows["nomre"];
					$sum = round($payani+$kelasi)/2;
					$ave+=$sum;
					echo "
					<tr>
                		<td class=bg-primary>".$dars."</td>
						<td>".$payani."</td>
                		<td>".$kelasi."</td>
						<td>".$sum."</td>
                	</tr>
					";
				}
				$average=$ave/$j;
				echo "
				<tr>
                	<td class='text-center lead'>میانگین نمرات : </td>
                    <td colspan='4' class='text-center lead'>".$average."</td>
                </tr>
				
				";
				?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6"></div>
  </div>
</div>
<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.js"></script>
</body>
</html>