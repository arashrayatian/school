<?php
include '../connect.php';
	if(isset($_GET["id"])){
		$query = "DELETE FROM `school`.`comments` WHERE `comments`.`id` = '".$_GET["id"]."' ";
		$result=$db->query($query);
		if($result){
			header("location:nazar.php?delok=1212");
			exit;
		}
		else{
			header("location:nazar.php?delerr=2222");
			exit;
		}
		
	}
	else{
		header("location:nazar.php");
		exit;
	}

?>