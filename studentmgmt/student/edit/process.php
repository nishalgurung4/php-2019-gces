<?php

require_once("../../config/db.php");

$id = $_POST['id'];
$name = $_POST['full_name'];
$address = $_POST['address'];
$rollNo = $_POST['roll_no'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$bio = $_POST['bio'];

$query = "UPDATE students SET name = '$name', address = '$address', roll_no = $rollNo, gender = '$gender', nationality = '$nationality', bio = '$bio' WHERE id = $id";


$result = $conn->query($query);

header('Location: ../../index.php');