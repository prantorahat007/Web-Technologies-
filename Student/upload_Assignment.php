<?php 
      require_once 'controllers/upload_asignmentcontroller_st.php';
	 
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location: login.php");
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
      <fieldset style ="width:750px">
          <legend><h1> upload assignment</h1></legend>
      
             <form action="" method="post">
    
                <table >
				  <label for="subject">Choose a subject:</label>
	<tr>
		<select name="subject" id="subject">
			<option ></option>
			<option value="Bangla">bangla</option>
			<option value="english">english</option>
			<option value="higher math">h.math</option>
			<option value="ict">ict</option>
			<option value="Biology">biology</option>
			<option value="physics">physics</option>
			<option value="chemistry">chemistry</option>
		</select>
		<span><?php echo $err_sub; ?></span></td>
	</tr>
	<br><br>
	<tr>
        
			<label for="myfile">Select a file:</label>
			<input type="file" id="file" name="myfile"><br><br>
			<button class="btn my-font"><input type="submit"></button>
			<br><br>
			<span><?php echo $err_file; ?></span></td>
			
	</tr>
			 
			  <tr>
			  <button class="btn my-font"><a href="dashboard.php">back</a></button>
			  </tr>

		<div class="footer"></div>
      </body>

 

</html>



