<?php
require_once("../config/db.php");

$query = "SELECT * FROM students";

$result = $conn->query($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		View Students
	</title>
</head>
<body>
<table border="1px">
	<thead>
		<tr>
			<th>
				Name
			</th>
			<th>
				Roll No
			</th>
			<th>
				Address
			</th>
			<th>
				Gender
			</th>
			<th>
				Nationality
			</th>
			<th>
				Bio
			</th>
			<th>
				Action
			</th>
		</tr>
	</thead>
	<tbody>
		<?php

		if ($result->num_rows > 0) {
				while($data = $result->fetch_assoc()) {
			?>
		<tr>
			<td>
				<?= htmlspecialchars($data['name']) ?>
			</td>
			<td>
				<?= htmlspecialchars($data['roll_no']) ?>
			</td>
			<td>
				<?= htmlspecialchars($data['address']) ?>
			</td>
			<td>
				<?= htmlspecialchars($data['gender']) ?>
			</td>
			<td>
				<?= htmlspecialchars($data['nationality']) ?>
			</td>
			<td>
				<?= htmlspecialchars($data['bio']) ?>
			</td>
			<td>
				
				<a href="edit/index.php?id=<?= $data['id'] ?>">Edit</a>
				<form action="delete.php" method="POST" style="margin-top:5px;">
					<input type="hidden" name="id" value="<?= $data['id'] ?>">
					<input type="submit" value="Delete">
				</form>
			</td>
			
		</tr>
		<?php } ?>
	<?php } else {?>
		<tr>
			<td colspan="7" align="center">No Data Found</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
</html>