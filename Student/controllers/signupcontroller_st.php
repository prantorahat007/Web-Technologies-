<?php
 require_once 'models/db_config.php';
	
	$name = "";
    $err_name = "";
    $iid = "";
    $err_iid = "";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$genres="";
	$err_genrea="";
	$contact_number = "";
    $err_contact_number = "";
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name=$_POST["name"];
		$institute_id=$_POST["iid"];
		$username=$_POST["uname"];
		$password=$_POST["pass"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$favourite_genere=$_POST["genres"];
		$profession=$_POST["profession"];
		$contact_number=$_POST["contact_number"];
		
		
		
		$query = "insert into signup values ('$name',$iid'$uname','$pass','$email',
		'$gender','$genres','$profession','$contact_number')";
		if(mysqli_query($conn,$query)){
			echo "value inserted";
		}
		else{
			echo "problem not inserted";
		}
	}



	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		 if(empty($_POST["name"])){
			$err_name="Name Required";
		}
		else{
			
			$name=$_POST["name"];
			ucfirst($name);
		}

		 if(empty($_POST["uname"])){
			$err_uname="Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_uname="Username Must be 6 Characters Long";
		}
		elseif(strpos($_POST["uname"]," ")){
			$err_uname="Username should not contain white space";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
		}
		
		elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 
		 
		 	
		if($user = authenticateUser($_POST["username"],$_POST["password"])){
			session_start();
			$_SESSION["user"]=$user["username"];
			//setcookie("user",$username,time()+1000,"/");
			header("Location: login_st.php");
			
		}
		 
		else{
			$pass=$_POST["pass"];
		}

		 if (empty($_POST["email"])) {
            $err_email = "Email Required";
            $hasError = true;
        }
        elseif(!strpos($_POST["email"],"@")){
            $err_email="Add @";
            $hasError=true;
    
        }
        /*elseif (!validateEmail($_POST["email"])) {
            $err_email = "Insert a valid email";
            $hasError = true;
        }*/
        else {
            $email = htmlspecialchars($_POST["email"]);
        }



        if (empty($_POST["contact_number"])) {
            $err_contact_number = "Please fill this field";
            $hasError = true;
        } 
        elseif (!is_numeric($_POST["contact_number"])) {
            $err_contact_number = "This field requires only numeric values";
            $hasError = true;
        }
        else{
            $contact_number=htmlspecialchars($_POST["contact_number"]);
        }
 		

 		if (empty($_POST["iid"])) {
            $err_iid = "Please fill this field";
            $hasError = true;
        } 
        elseif (!is_numeric($_POST["iid"])) {
            $err_iid = "This field requires only numeric values";
            $hasError = true;
        }
       if(!$hasError){
			 header ("location: login.php");
		
	}
		
	}
		
?>