<html>
	<head></head>
	<body>
		<table border="2" align="center">
			<tr>
				<th>Group ID</th>
				<th>Name</th>
				<th>CGPA</th>
			</tr>
			<tr>
				<td>13</td>
				<td>Pranto</td>
				<td>3.18</td>
			</tr>
			<tr>
				<td rowspan="2">12</>
				<td>Rashed</td>
				<td>3.20</td>
			</tr>
			<tr>
				<td>ishan</td>
				<td>3.60</td>
			</tr>
			<tr>
				<td colspan="3" align="center">Group Specifier</td>
			</tr>
		</table>
		<h1>User Registration</h1>
		<form action="submitted.php" method="post">
			<table>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
				</tr>
				<tr>
					<td><span><b>Hobbies</b>:</span></td>
					<td><input type="checkbox"><span>sports</span>
					    <input type="checkbox"><span>Travelling</span>
						<input type="checkbox"><span>Games</span>
						<input type="checkbox"><span>Gossiping</span></td>
				</tr>
				<tr>
					<td><span><b>Profession</b>:</span></td>
					<td>
						<select name="profession">
							<option disabled selected>Choose One</option>
							<option>student</option>
							<option>Teaching</option>
							<option>Business</option>
							<option>others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><span><b>Mobile/Phone</b>:</span></td>
					<td><input type="tel" name="phone_no"></td>
				</tr>
				<tr>
					<td><span><b>Date</b>:</span></td>
					<td><input type="date" name="date"></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="Submit">
		</form>
	</body>
</html>