<?php
include ("../connect.php");
	if(isset($_POST["edit"])){
		
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$ncode = $_POST["ncode"];
		$age = $_POST["age"];
		$address = $_POST["address"];
		$tell = $_POST["tell"];
		$reshte = $_POST["reshte"];
		$paye = $_POST["paye"];
		$user = $_POST["username"];
		$pass = $_POST["password"];
		
			if(empty($fname) || empty($lname) || empty($ncode) || empty($age) || 
		empty($address) || empty($tell) || empty($user) || empty($pass)){
			header("location:et.php?empty=9090&id=".$_SESSION["idt"]."");
			exit;
	}
		
		$query = "UPDATE `school`.`students` SET 
		`fname` = '".$fname."', 
		`lname` = '".$lname."', 
		`ncode` = '".$ncode."', 
		`age` = '".$age."', 
		`tell` = '".$tell."', 
		`address` = '".$address."',
		`reshte` = '".$reshte."', 
		`paye` = '".$paye."',
		`username` = '".$user."', 
		`password` = '".$pass."' WHERE `students`.`id` = '".$_SESSION["idt"]."' ;";
		$result=$db->query($query);
		if($result){
			header("location:insert-student.php?editok=3535");
			exit;
		}
		else{
			header("location:insert-student.php?editerr=2525");
			exit;
		}
	}
	else{
		header("location:insert-student.php");
			exit;
	}

?>