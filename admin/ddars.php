<?php
include '../connect.php';
	if(isset($_GET["id"])){
		$query = "DELETE FROM `school`.`dars` WHERE `dars`.`id` = '".$_GET["id"]."' ";
		$result=$db->query($query);
		if($result){
			header("location:dars.php?delok=1212");
			exit;
		}
		else{
			header("location:dars.php?delerr=2222");
			exit;
		}
		
	}
	else{
		header("location:dars.php");
		exit;
	}

?>