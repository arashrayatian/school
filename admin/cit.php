<?php
$name = $_FILES["file"]["name"];
$type = $_FILES["file"]["type"];
$size = $_FILES["file"]["size"];
$temp = $_FILES["file"]["tmp_name"];
include '../connect.php';
if(isset($_POST["insert"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$ncode = $_POST["ncode"];
		$age = $_POST["age"];
		$address = $_POST["address"];
		$tell = $_POST["tell"];
		$reshte = $_POST["reshte"];
		$madrak = $_POST["madrak"];
		$user = $_POST["username"];
		$pass = $_POST["password"];
		
	//چک خالی بودن فیلدها
	if(empty($fname) || empty($lname) || empty($ncode) || empty($age) || 
		empty($address) || empty($tell) || empty($user) || empty($pass)){
			header("location:insert-teacher.php?empty=9090");
			exit;
	}
	
	//چک فایل آپلودی
	if(is_uploaded_file($temp)){
		$pasvand = array("image/jpeg","image/jpg","image/png","image/gif");
	if(in_array($type,$pasvand)){
		$filename = md5($name.microtime()).substr($name,-5,5);
		$location ="pteacher/".$filename;
		$move = move_uploaded_file($temp,$location);
	if($move){
		
		$query = "INSERT INTO `school`.`teachers` VALUES (NULL, 
		'".$fname."', 
		'".$lname."', 
		'".$ncode."', 
		'".$age."', 
		'".$address."', 
		'".$tell."',
		'".$reshte."',
		'".$madrak."',
		'".$location."' ,
		'".$user."', 
		'".$pass."');";
                $result=$db->query($query);
	if($result){
			header("location:insert-teacher.php?insok=4040");
			exit;
	}// if query
	else{
		header("location:insert-teacher.php?inserr=4545");
		exit;
	}
	
	}//check if move
	else{
		header("location:insert-teacher.php?uperr=3935");
		exit;
	}
	
	}// format image check
	else{
		header("location:insert-teacher.php?pasvand=4945");
		exit;
	}
	
	}//if upload file
	else{
		header("location:insert-teacher.php?http-8080");
		exit;
	}
	
}//if aval=isset
else{
	header("location:insert-teacher.php");
	exit;
}

?>