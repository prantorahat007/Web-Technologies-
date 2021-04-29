<?php include 'main_header.php';
	  require_once 'controllers/class_routinecontroller_st.php';
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
          <legend><h1> View Routine</h1></legend>
      
             <form action="" method="post">
      
                <table align="center" >
				
				<tr>
                    <td><span>Institute ID</span></td>
                    <td>:
                        <input type="text" name="iid" value="<?php echo $iid; ?>"
                            placeholder="<?php echo $iid; ?>">
                        <span><?php echo $err_iid; ?></span>
                    </td>
                </tr>
				<br>
				
				<tr>
                 <td><label for="depertment">depertment:</label></td>

						<td><select name="depertment" id="depertment">
						<option></option>
						  <option value="science">scince</option>
						  <option value="Arts">Arts</option>
						  <option value="commerce">commerce</option>
						</select>
						<span><?php echo $err_dept; ?></span></td>
						</tr>
						<br><br>
						
						
						<tr>
						<label for="Year">Year:</label>

						<select name="year" id="year">
						<option></option>
						  <option value="2020-21">2020-21</option>
						  <option value="2019-210">2019-20</option>
						</select>
						 <span><?php echo $err_year; ?></span></td>
						</tr>
				
								<br><br>
						<tr>
							<td colspan="2"><input class="btn my-font" type ="submit" value="View"> </td>
							
							
							

							
						</tr>
                  
                 </table> 
                </form>
				<button class="btn my-font" ><a href="dashboard.php">back</a></button>
              </fieldset>
			  <div class="footer"></div>
      </body>

 

</html>