<?php
  require_once 'models/db_config.php';
	$Bangla="";
	$English="";
	$Higher_Math="";
	$Physics="";
	$Chemistry="";
	$Biology="";
	$Ict="";
	$section="";
	$err_section="";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$Bangla=$_POST["Bangla"];
		$English=$_POST["English"];
		$Higher_Math=$_POST["Higher_Math"];
		$Physics=$_POST["Physics"];
		$Chemistry=$_POST["Chemistry"];
		$Biology=$_POST["Biology"];
		$Ict=$_POST["ict"];
		
		$query = "insert into registration values (NULL,'$Bangla','$English','$Higher_Math','$Physics','$Chemistry','$Biology','$Ict')";
		if(mysqli_query($conn,$query)){
			echo "value inserted";
		}
		else{
			echo "problem not inserted";
		}


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		 if(empty($_POST["section"])){
			$err_section="You need to choose section";
		}
		elseif($err_section<2){
    $err_section = "Select at least one section";
    }
		
		else{
			$section=$_POST["section"];
		}

}
?>