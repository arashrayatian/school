<?php
include '../connect.php';
	if(isset($_POST["edit"])){
		$title = $_POST["title"];
		$stext = $_POST["stext"];
		$ltext = $_POST["ltext"];
		
		$query = "UPDATE `school`.`news` SET 
		`title` = '".$title."', 
		`stext` = '".$stext."' ,
		`ltext` = '".$ltext."'
		WHERE `news`.`id` = '".$_SESSION["idn"]."' ;";
		$result=$db->query($query);
		if($result){
			header("location:insert-news.php?editok=2334");
			exit;
		}
		else{
			header("location:insert-news.php?editerr=3456");
			exit;
		}
	}
	else{
		header("location:edit-news.php");
		exit;
	}

?>