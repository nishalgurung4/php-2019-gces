<?php
require_once("./Employee.php");

require_once("./Company.php");

require_once("./helper.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science";

$gces->address = "Lamachaur, Pokhara";

//Employee
$nishal = new Employee;
$nishal->name = "Nishal Gurung";
$nishal->address = "Mustangchowk";

$hari = new Employee;
$hari->name = "Hari Baral";
$hari->address = "Pokhara";

$sita = new Employee;
$sita->name = "Sita KC";
$sita->address = "Kathmandu";

array_push($gces->employees, $nishal);
array_push($gces->employees, $hari);
array_push($gces->employees, $sita);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Detail of <?= $gces->name ?></h1>

<P>Company Name: <?= $gces->name ?></P>
<p>Address: <?= $gces->address ?></p>
<p>Number of Employees: <?= count($gces->employees) ?></p>
<table border="1px">
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
		</tr>
	</thead> 
	<tbody>
		<?php
			foreach($gces->employees as $employee) {
		 ?>
		<tr>
			<td><?= $employee->name ?></td>
			<td><?= $employee->address ?></td>
		</tr>
		<?php } ?>
	</tbody>
	
</table>
</body>
</html>