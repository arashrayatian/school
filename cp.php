<?php
include "connect.php";
include "jdf.php";
	if(isset($_POST["message"])){
		$name = $_POST["name"];
		$mail = $_POST["email"];
		$text = $_POST["text"];
		$date = jdate('Y/n/j');
		if(empty($name) || empty($mail) || empty($text) ){
			header("location:payam.php?empty=1010");
			exit;
		}
		else{
			$sql = "INSERT INTO `comments` 
			VALUES (NULL, '".$name."', '".$mail."', '".$text."' , '".$date."');";
			$query = mysql_query($sql);
			if($query){
			
					header("location:contact.php?ok=2020");
					exit;
				}
			else{
				header("location:contact.php?error=3030");
				exit;
			}
		}
		
	}
	else{
		header("location:payam.php");
		exit;
	}
?>