<?php
include "../connect.php";
include "../jdf.php";

if(isset($_POST["send"])){
	$title = $_POST["title"];
	$ltext = $_POST["ltext"];
	$date=jdate('Y/n/j');
	if(empty($title) || empty($ltext) ){
		header("location:msg.php?empty=1919");
		exit;
	}
	
	$query = "INSERT INTO `school`.`payam` VALUES (NULL, 
	'".$_SESSION["fromteach"]."', 
	'1', 
	'".$title."', 
	'".$ltext."', 
	'1',
	'".$date."'
	);";
	$result=$db->query($query);
	if($result){
		header("location:msg.php?ok=2929");
		exit;
	}
	else{
		header("location:msg.php?error=3939");
		exit;
	}
}
else{
	header("location:msg.php");
	exit;
}
?>