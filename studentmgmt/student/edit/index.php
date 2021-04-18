<?php
require_once("../../config/db.php");

$id = $_GET['id'] ?? 0;

$query = "SELECT * FROM students WHERE id = $id";

$result = $conn->query($query);

if ($result->num_rows < 1) {
	header('Location: ../index.php');
}

$data = $result->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Student Detail</title>
</head>
<body>
	<form action="./process.php" method="POST">
		<input type="text" name="full_name" placeholder="Enter your name" value="<?= $data['name'] ?>"> <br /><br />

		<input type="hidden" name="id" value="<?= $data['id'] ?>">

		<input type="number" name="roll_no" placeholder="Enter your Roll No" value="<?= $data['roll_no'] ?>" /> <br /><br />

		<input type="text" name="address" placeholder="Enter your address" value="<?= $data['address'] ?>" /> <br /><br />

		<textarea name="bio" cols="30" rows="10" placeholder="Enter your bio"><?= $data['name'] ?></textarea> <br><br />

		<select name="nationality">
			<option value="nepal" <?php if($data['nationality'] == "nepal") echo "selected" ?>>Nepal</option>
			<option value="india" <?php if($data['nationality'] == "india") echo "selected" ?>>India</option>
			<option value="china" <?php if($data['nationality'] == "china") echo "selected" ?>>China</option>
		</select>
		<br><br />

		<input type="radio" <?php if($data['gender'] == "male") echo "checked" ?> name="gender" value="male">Male
		<input type="radio" <?php if($data['gender'] == "female") echo "checked" ?>  name="gender" value="female">Female
		<br /> <br />
		<input type="reset" value="Cancel" />
		<input type="submit" value="Update" />

	</form>
</body>
</html>