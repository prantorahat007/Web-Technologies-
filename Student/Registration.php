<?php 
      require_once 'controllers/Registrationcontroller_st.php';
	 
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location: login_st.php");
	}
?>

<html>
   <head> 
      <style>
	
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
      <fieldset align="center" style ="width:700px">
          <legend><h1> Registration</h1></legend>
      
             <form action="" method="post">
      
                <table align="center" >
                
						 <tr>
					<td><span>Bangla</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				
				</td>
				</tr>
				<tr>
					<td><span>English</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				</br>
				</td>
				</tr>
				<tr>
					<td><span>Higher Math</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				</br>
				</td>
				</tr>
				<tr>
					<td><span>Physics</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				</br>
				</td>
				</tr>
				<tr>
					<td><span>Chemistry</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				</br>
				</td>
				</tr>
				<tr>
					<td><span>Biology</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				</br>
				</td>
				</tr>
				<tr>
					<td><span>Ict</span></td>
					<td>: 
					<input type="checkbox" value="A" name="section[]"> A 
					<input type="checkbox" value="B" name="section[]"> B
					<input type="checkbox" value="C" name="section[]"> C
					<span><?php echo $err_section;?></span></td>
				</br>
				</br>
				</td>
				</tr>
						
						<tr>
							<td colspan="2"><input class="btn my-font" type ="submit" value="registration"> </td>
							
						</tr>
                  
                 </table> 
                </form>
				<button class="btn my-font" ><a href="dashboard.php">back</a></button>
              </fieldset>
			  <div class="footer"></div>
      </body>

 

</html>