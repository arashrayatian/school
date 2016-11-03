<?php
include "../connect.php";

if(isset($_POST["login"])){
	$user = $_POST["username"];
	$pass = $_POST["password"];
	if(empty($user) || empty($pass)){
		header("location:login.php?empty=1010");
		exit;
	}
	else{
	$query = "SELECT * FROM `students` WHERE username='".$user."' && password='".$pass."' ";
		$result=$db->query($query);
		
		if($result->num_rows > 0){
				$_SESSION["user"]= $user;
				$_SESSION["pass"]= $pass;
				$_SESSION["studlog"]=1;
				header("location:index.php");
				exit;
		}
		else{
			header("location:login.php?error=2020");
			exit;
		}
	}
}
else{
	header("location:login.php");
	exit;
}

?>