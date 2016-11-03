<?php
include "../connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>درس جدید</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="container"><br>
  <br>
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-info">
        <div class="panel-heading">درج درس جدید</div>
        <div class="panel-body">
	<?php
		if(isset($_GET["empty"])){
			echo "<div class='alert alert-danger'>پر کردن فیلدها الزامی است.</div>";
		}elseif(isset($_GET["error"])){
			echo "<div class='alert alert-warning'>خطا.</div>";
		}
		elseif(isset($_GET["ok"])){
			echo "<div class='alert alert-success'>نمره ثبت شد.</div>";
		}
		elseif(isset($_GET["perror"])){
			echo "<div class='alert alert-warning'>خطا.</div>";
		}
		elseif(isset($_GET["pok"])){
			echo "<div class='alert alert-success'>نمره جدید ثبت شد.</div>";
		}
    ?>        
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="panel panel-success">
        <div class="panel-heading">مدیریت دروس وارد شده</div>
        <div class="panel-body">
          <table class="table table-bordered table-hover">
            <thead class="bg-warning">
              <tr>
                <th>ش</th>
                <th>رشته</th>
                <th>پایه</th>
                <th>نام درس</th>
              </tr>
            </thead>
            <?php
				$query = "SELECT * FROM `dars` WHERE `ostad`='".$_SESSION["ostad"]."' ORDER BY id DESC";
				$result=$db->query($query);
				if($result){
				while($rows=$result->fetch_assoc()){
				echo "
					<tbody>
						<tr>
						<td>".$rows["id"]."</td>
						<td>".$rows["rid"]."</td>
						<td>".$rows["pid"]."</td>
			<td><a href=show-study.php?reshte=".$rows["rid"]."&paye=".$rows["pid"]."&dname=".$rows["name"].">".$rows["name"]."</a></td>
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
<script src="../js/bootstrap.js"></script> 
<script src="../js/jquery.js"></script>
</body>
</html>