<?php
include ("../connect.php");
	if(isset($_POST["edit"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$ncode = $_POST["ncode"];
		$age = $_POST["age"];
		$tell = $_POST["tell"];
		$address = $_POST["address"];
		$reshte = $_POST["reshte"];
		$madrak = $_POST["madrak"];
		$user = $_POST["username"];
		$pass = $_POST["password"];
	if(empty($fname) || empty($lname) || empty($ncode) || empty($age) || 
		empty($address) || empty($tell) || empty($user) || empty($pass)){
			header("location:et.php?empty=9090&id=".$_SESSION["idt"]."");
			exit;
	}
		
		$query = "UPDATE `school`.`teachers` SET 
		`fname` = '".$fname."', 
		`lname` = '".$lname."', 
		`ncode` = '".$ncode."', 
		`age` = '".$age."', 
		`tell` = '".$tell."', 
		`address` = '".$address."',
		`reshte` = '".$reshte."', 
		`madrak` = '".$madrak."',
		`username` = '".$user."', 
		`password` = '".$pass."' WHERE `teachers`.`id` = '".$_SESSION["idt"]."' ;";
		$result=$db->query($query);
		if($result){
			header("location:et.php?ok=3535&id=".$_SESSION["idt"]."");
			exit;
		}
		else{
			header("location:et.php?error=2525&id=".$_SESSION["idt"]."");
			exit;
		}
	}
	else{
		header("location:et.php");
			exit;
	}

?>