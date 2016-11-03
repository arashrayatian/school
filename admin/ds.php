<?php
include '../connect.php';
if(isset($_GET["id"])){
	$query = "DELETE FROM `school`.`students` WHERE `students`.`id` = '".$_GET["id"]."' ";
	$mquery = "SELECT * FROM `school`.`students` WHERE `students`.`id` = '".$_GET["id"]."' ";
	$mresult=$db->query($mquery);
	$rows = $mresult->fetch_assoc();
	
	$result = $db->query($query);
	if($result){
		unlink($rows["pic"]);
		header("location:insert-student.php?delok=5050");
		exit;
	}
	else{
		header("location:insert-student.php?delerr=6060");
		exit;
	}
}
else{
	header("location:insert-student.php");
	exit;
}

?>