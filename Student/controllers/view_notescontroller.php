<?php
    require_once 'models/db_config.php';
$dept="";
$err_dept="";
$sub="";
$err_sub="";
$year="";
$err_year="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		 if(empty($_POST["depertment"])){
			$err_dept="Department Required";
		}else{
			$dept=$_POST["depertment"];
		}
		if(empty($_POST["subject"])){
			$err_sub="subject Required";
		}else{
			$sub=$_POST["subject"];
			
			if(empty($_POST["year"])){
			$err_year="year Required";
		}else{
			$year=$_POST["year"];
		}

		 
		
		
	}
		 
	
}
?>