<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="productRegist.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtName"></td>
			</tr>
			<tr>	
				<td>Course</td>
				<td>
					<select name="cbCourse">
						<option value="iphone">iphone XS</option>
						<option value="Nokia">Nokia 1280</option>
						<option value="Samsung">Galaxy X9</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="Date" name="dob"/></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<td>Favorites</td>
				<td>
					<input type="checkbox" name="game" value="game">game
					<input type="checkbox" name="sport" value="sport">sport
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Register"></td>
			</tr>
		</table>
	</form>
</body>
</html>