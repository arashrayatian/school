<?php
include '../connect.php';
	if(isset($_GET["id"])){
		$query = "DELETE FROM `school`.`payam` WHERE `payam`.`id` = '".$_GET["id"]."' ";
		$result=$db->query($query);
		if($result){
			header("location:comments.php?delok=1212");
			exit;
		}
		else{
			header("location:comments.php?delerr=2222");
			exit;
		}
		
	}
	else{
		header("location:comments.php");
		exit;
	}

?>