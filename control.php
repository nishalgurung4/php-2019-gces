<?php

$percentage = 59;
if ($percentage >= 80) {
    echo "Distinction";
} elseif ($percentage >= 60) {
	echo "First Division";
} elseif ($percentage >= 40) {
	echo "Second Division";
}
 else {
	echo "Fail";
}

$value = 2;

switch ($value) {
	case 1:
		echo "1";
		break;

	case 2:
		echo "2";
		break;
	default:
		echo "Invalid";
	
}
