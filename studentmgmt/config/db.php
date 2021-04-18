<?php
// require_once("../helper.php");

$host = "localhost";
$username = "studentwt";
$password = "GCES@123";
$databaseName = "studentmgmt";

$conn = new mysqli($host, $username, $password, $databaseName);

if ($conn->connect_error) {
	die("Connection fail");
}

