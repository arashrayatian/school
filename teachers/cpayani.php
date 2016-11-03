<?php
include "../connect.php";
if(isset($_POST["insert"])){
	if(empty($_POST["nomre"])){
		header("location:insert-payani.php?empty=1010");
		exit;
	}
	$query = "INSERT INTO payani VALUES (NULL , '".$_GET["uname"]."' , '".$_GET["dname"]."' , '".$_POST["nomre"]."');";
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