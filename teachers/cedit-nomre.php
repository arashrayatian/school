<?php
include "../connect.php";
if(isset($_POST["edit"])){
	if(empty($_POST["nomre"])){
		header("location:edit-nomre.php?empty=3030&nomre=".$_POST["nomre"]."&id=".$_GET["id"]."");
		exit;
	}
	$query = "UPDATE `school`.`nomre` SET `nomre` = '".$_POST["nomre"]."' WHERE `nomre`.`id` ='".$_GET["id"]."';";
	$result=$db->query($query);
	if($result){
		header("location:nomre.php?ok=1010");
		exit;
	}
	else{
		header("location:nomre.php?error=2020");
		exit;
	}
}
else{
	header("location:edit-nomre.php");
	exit;
}

?>