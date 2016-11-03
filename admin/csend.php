<?php
include "../connect.php";
include "../jdf.php";

if(isset($_POST["send"])){
	$title = $_POST["title"];
	$ltext = $_POST["ltext"];
	$date=jdate('Y/n/j');
	if(empty($title) || empty($ltext) ){
		header("location:send.php?empty=1919");
		exit;
	}
	$query = "SELECT *FROM `admin`";
	$result=$db->query($query);
	$rows = $result->fetch_assoc();
	$from = $rows["id"];
	$to = $_SESSION["to"];
	$mquery = "INSERT INTO `school`.`payam` VALUES (NULL, 
	'".$from."', 
	'".$to."', 
	'".$title."', 
	'".$ltext."', 
	'".$date."');";
	$mresult = $db->query($mquery);
	if($mresult){
		header("location:send.php?ok=2929");
		exit;
	}
	else{
		header("location:send.php?error=3939");
		exit;
	}
}
else{
	header("location:send.php");
	exit;
}
?>