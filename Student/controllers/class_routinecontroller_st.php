<?php
require_once 'models/db_config.php';
$iid="";
$err_iid="";
$dept="";
$err_dept="";
$year="";
$err_year="";
$hasError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["iid"])) {
            $err_iid = "Please fill this field";
            $hasError = true;
        } 
		 elseif (!is_numeric($_POST["iid"])) {
            $err_iid = "This field requires only numeric values";
            $hasError = true;
        }
	
		 if(empty($_POST["depertment"])){
			$err_dept="Department Required";
		}else{
			$dept=$_POST["depertment"];
		}
		
			if(empty($_POST["year"])){
			$err_year="year Required";
		}else{
			$year=$_POST["year"];
		}

		
	}
		 

?>