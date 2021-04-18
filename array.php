<?php
include("./helper.php");

$name = [
	"Anil",
	"Mohan",
	"Rohit",
	"Sandesh"
];


$rollno = [
	2,
	5,
	15,
	40
];

//Associative array
$students = [
	2 => "Anil",
	5 => "Mohan",
	15 => "Rohit",
	40 => "Sandesh"
];

$anil = [
	"name" => "Anil Gurung",
	"roll" => 5,
	"skinColor" => [
			"grey",
			"white"
	]
];


foreach($anil as $key => $value)
{
	if ($key == "skinColor") {
		echo "Skin Color:";
		foreach($value as $color) {
			echo "$color";
		}
		continue;
	}
	echo "$key = $value";
	echo "<br />";
}

dd("");
foreach($students as $rollno => $name)
{
	echo "Name = $name Roll= $rollno";
	echo "<br />";
}
dd("");
for($i = 0; $i < 4; $i++) {
	echo "name = $name[$i] roll = $rollno[$i]";
	echo "<br />";
}


