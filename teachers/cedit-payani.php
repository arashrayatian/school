<?php
include "../connect.php";
if(isset($_POST["edit"])){
	if(empty($_POST["nomre"])){
		header("location:edit-payani.php?empty=3030&nomre=".$_POST["nomre"]."&id=".$_GET["id"]."");
		exit;
	}
	$nomre = $_POST["nomre"];
	$query = "UPDATE `school`.`payani` SET `nomre` = '".$nomre."' WHERE `payani`.`id` ='".$_GET["id"]."';";
	$result=$db->query($query);
	if($result){
		header("location:nomre.php?pok=1010");
		exit;
	}
	else{
		header("location:nomre.php?perror=2020");
		exit;
	}
}
else{
	header("location:nomre.php");
	exit;
}
?>