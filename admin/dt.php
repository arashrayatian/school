<?php
include '../connect.php';
	if(isset($_GET["id"])){
		$query = "DELETE FROM `school`.`teachers` WHERE `teachers`.`id` = '".$_GET["id"]."' ";
		$result=$db->query($query);
		if($result){
			header("location:insert-teacher.php?delok=5050");
			exit;
		}
		else{
			header("location:insert-teacher.php?delerr=6060");
			exit;
		}
	}
	else{
		header("location:insert-teacher.php");
		exit;
	}

?>