<?php
include "../connect.php";
include "../jdf.php";
if(isset($_POST["send"])){
	$title = $_POST["title"];
	$ltext = $_POST["ltext"];
	$date=jdate('Y/n/j');
	if(empty($title) || empty($ltext)){
		header("location:nazar.php?empty=1010");
		exit;
	}
	$query = "INSERT INTO `school`.`comments` VALUES (NULL, '".$title."', '".$ltext."', '".$date."'); ";
	$result=$db->query($query);
	if($result){
		header("location:nazar.php?ok=2929");
		exit;
	}
	else{
		header("location:nazar.php?error=3939");
		exit;
	}
}
else{
	header("location:nazar.php");
	exit;
}

?>