<?php
    require_once 'models/db_config.php';
$sub="";
$err_sub="";
$file="";
$err_file="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		if(empty($_POST["subject"])){
			$err_sub="subject Required";
		}else{
			$sub=$_POST["subject"];
			
			if(empty($_POST["file"])){
			$err_file="file Required";
		}else{
			$file=$_POST["file"];
		}

		 
		
		
	}
		 
	
}
?>
