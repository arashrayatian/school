<?php
include "../connect.php";
if(isset($_POST["insert"])){
	if(empty($_POST["nomre"])){
		header("location:nomre.php?empty=1010");
		exit;
	}
	$nomre = $_POST["nomre"];
	$query = "INSERT INTO `school`.`nomre` VALUES (NULL, '".$_SESSION["uname"]."', '".$_SESSION["dname"]."', '".$nomre."');";
	$result=$db->query($query);
	if($result){
		header("location:nomre.php?ok=2010");
		exit;
	}
	else{
		header("location:nomre.php?error=3010");
		exit;
	}
}
else{
	header("location:nomre.php");
		exit;
}

?>