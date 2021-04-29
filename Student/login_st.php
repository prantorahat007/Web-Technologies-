<?php include 'main_header.php';
      require_once 'controllers/login controller_st.php';
	  
	 
?>
<html>
	<head>
	<style>
		body{
			background-color:rgb(239,239,239);
		}
			.login-div{
				border:2px solid red;
				margin:auto;
				width:30%;
				margin-top:10%;
				background-color:rgb(157,146,194);
			}
			.my-font{
				font-size:25px;
				font-family:Candara;
			}
			
			.btn {
  background-color: #2883c1;
  border:none;
  color:white;
  border-radius: 6px;
  font-family: Georgia;
  font-size: 20px;
  padding: 6px 20px 10px 19px;
  text-decoration: none;
  width:100%;
}

.btn:hover {
  background-color: #89bef4;

}
.btn:active {
background-color: #24a0ed;
border:none;
}
.header{
	height:20px;
	background-color:black;
	position:fixed;
	top:0;
	left:0;
	width:100%;
}
.footer{
	height:20px;
	background-color:black; 
	position:fixed;
	bottom:0;
	left:0;
	width:100%;
}

		</style>
	</head>
	<body> 
			<div class="header"></div>
		
			<div class="login-div">
			<table align="center">
				<tr >
					<td align ="left"><img src="images/login.png" width="150px" height="150px"  ></td>
					<td><h1 align ="right">Login </h1></td>
				</tr>
			
			</table>
			
				<form action=""  method="post">
					<table align="center">
						<tr>
							<td><span class="my-font">Username:</span></td>
							<td><input type="text" name="uname" placeholder="username"><br>
							<span> <?php echo $err_uname;?></span></td>
						
						</tr>
						<tr>
							<td><span class="my-font">Password:</span></td>
							<td><input type="password" name="pass" placeholder="password"><br>
							<span> <?php echo $err_pass;?></span></td>
						</tr>
						
						<tr>
							<td colspan="2"><input class="btn my-font" type ="submit" value="Login"> </td>
									
						</tr>
						
						<tr>
						 
						  <td> <span"class="btn my-font""> Not Registerd yet? <a href="signup.php" > SignUp</a> </span> </td>
							
							
						</tr>
						
		</div>
		
		
					</table>
				</form>
				
				
				<button><a href="###">back</a></button>
					
			</div>
			
				
			<div class="footer"></>
		</body>
		<script src="js/loginValidation_st.js"></script>
</html>