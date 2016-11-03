<?php
include "../connect.php";
include "../jdf.php";

if(isset($_POST["insert"])){
	$title = $_POST["title"];
	$stext = $_POST["stext"];
	$ltext = $_POST["ltext"];
	$date = jdate('Y/n/j');
	if(empty($title)){
		header("location:insert-news.php?empty=1010");
		exit;
	}
		$query = " INSERT INTO `school`.`news`  
		VALUES (NULL, 
		'".$title."', 
		'".$stext."', 
		'".$ltext."',
		'".$date."', 
		CURRENT_TIMESTAMP); ";
		$result=$db->query($query);
		if($result){
				header("location:insert-news.php?ok=2020");
				exit;
			}
			else{
				header("location:insert-news.php?error=3030");
				exit;
			}
}
else{
	header("location:insert-news.php");
	exit;
}
?>