<?php
include "../connect.php";
if(isset($_POST["insert"])){
	if(empty($_POST["ndars"])){
		header("location:dars.php?empty=1010");
		exit;
	}
	$dars = $_POST["ndars"];
	$ostad = $_POST["modares"];
	$reshte = $_POST["reshte"];
	$paye = $_POST["paye"];
	$query = " INSERT INTO `school`.`dars` 
	VALUES (NULL, '".$reshte."', '".$paye."', '".$ostad."' , '".$dars."');  ";
	$result = $db->query($query);
	if($result){
		header("location:dars.php?ok=9090");
		exit;
	}
	else{
		header("location:dars.php?error=8080");
		exit;
	}
}
else{
	header("location:dars.php");
	exit;
}
?>