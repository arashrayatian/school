<?php
include '../connect.php';
	if(isset($_GET["id"])){
		$query = "DELETE FROM `school`.`payam` WHERE `payam`.`id` = '".$_GET["id"]."' ";
		$result=$db->query($query);
		if($result){
			header("location:send.php?delok=1212");
			exit;
		}
		else{
			header("location:send.php?delerr=2222");
			exit;
		}
		
	}
	else{
		header("location:send.php");
		exit;
	}

?>