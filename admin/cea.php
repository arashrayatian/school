
<?php
include ("../connect.php");
	if(isset($_POST["edit"])){
		
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$user = $_POST["username"];
		$pass = $_POST["password"];
		
		$query = "UPDATE `school`.`admin` SET 
		`fname` = '".$fname."', 
		`lname` = '".$lname."', 
		`username` = '".$user."', 
		`password` = '".$pass."'";
		$result=$db->query($query);
		if($result){
			header("location:admin.php?editok=3535");
			exit;
		}
		else{
			header("location:admin.php?editerr=2525");
			exit;
		}
	}
	else{
		header("location:admin.php");
		exit;
	}

?>