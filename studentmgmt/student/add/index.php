<!DOCTYPE html>
<html>
<head>
	<title>Create Student Detail</title>
</head>
<body>
	<form action="./process.php" method="POST">
		<input type="text" name="full_name" placeholder="Enter your name"> <br /><br />

		<input type="number" name="roll_no" placeholder="Enter your Roll No" /> <br /><br />

		<input type="text" name="address" placeholder="Enter your address" /> <br /><br />

		<textarea name="bio" cols="30" rows="10" placeholder="Enter your bio"></textarea> <br><br />

		<select name="nationality">
			<option value="nepal">Nepal</option>
			<option value="india">India</option>
			<option value="china">China</option>
		</select>
		<br><br />

		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<br /> <br />
		<input type="reset" value="Cancel" />
		<input type="submit" value="Create" />

	</form>
</body>
</html>