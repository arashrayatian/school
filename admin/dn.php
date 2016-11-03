<?php
include '../connect.php';
	if(isset($_GET["id"])){
		$query = "DELETE FROM `school`.`news` WHERE `news`.`id` = '".$_GET["id"]."' ";
		$result=$db->query($query);
		if($result){
			header("location:insert-news.php?delok=1212");
			exit;
		}
		else{
			header("location:insert-news.php?delerr=2222");
			exit;
		}
		
	}
	else{
		header("location:insert-news.php");
		exit;
	}

?>