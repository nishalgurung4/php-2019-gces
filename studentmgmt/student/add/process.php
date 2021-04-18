<?php

require_once("../../config/db.php");

$name = $_POST['full_name'];
$address = $_POST['address'];
$rollNo = $_POST['roll_no'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$bio = $_POST['bio'];

$query = "INSERT INTO students (`name`, `address`, `roll_no`, `gender`, `nationality`, `bio`) VALUES ('$name', '$address', $rollNo, '$gender', '$nationality', '$bio')";

$result = $conn->query($query);

header('Location: ../../index.php');