<?php include 'main_header.php';
	  require_once 'controllers/signupController_st.php';
?>







<html>
	<head>
	<style>
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
	<fieldset align="center"style ="width:600px">
          <legend><h1>sign up</h1></legend>
	
		<form  action="" method="post">
			<table align="center">

				 <tr>
                    <td><span>Name</span></td>
                    <td>:<input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>">
                        <span><?php echo $err_name; ?></span></br>
                    </td>

                </tr>

                  <tr>
                    <td><span>Institute ID</span></td>
                    <td>:
                        <input type="text" name="iid" value="<?php echo $iid; ?>"
                            placeholder="<?php echo $iid; ?>">
                        <span><?php echo $err_iid; ?></span>
                    </td>
                </tr>

				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
					<span><?php echo $err_pass;?></span></td>
				</tr>

				<tr>
                    <td><span>E-mail</span></td>
                    <td>:<input type="text" name="email" value="<?php echo $email; ?>" >
                        <span><?php echo $err_email; ?></span>
                    </td>
                </tr>

				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span> 
					<input type="radio" name="gender" value="Female">Female<br></td>
				</tr>
				<tr>
					<td><span>Favourite Genre</span></td>
					<td>: 
					<input type="checkbox" value="Literature" name="Genres[]"> Literature 
					<input type="checkbox" value="Sci-Fi" name="Genres[]"> Sci-Fi 
					<input type="checkbox" value="History" name="Genres[]"> History 
					<input type="checkbox" value="Biography" name="Genres[]"> Biography</br></td>
				</tr>
				
				<tr>
					<td><span>Profession</span></td>
					<td>
						:<select name="profession">
							<option disabled selected>Chose One</option>
							<option>Teacher</option>
							<option>Student</option>
							<option>Admin</option>
						</select>
					</td>
				</tr>

				<tr>
                    <td><span>Contact Number</span></td>
                    <td>:
                        <input type="text" name="contact_number" value="<?php echo $contact_number; ?>"
                            placeholder="<?php echo $contact_number; ?>">
                        <span><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>

				
				<tr>
					<td><input class="btn my-font" type="submit" name="submit" value="signup"></td>
				</tr>
				
			</table>
		</form>
		  </fieldset>
		  
		  <div class="footer"></div>
		  </body>

 

</html>
		
		
		