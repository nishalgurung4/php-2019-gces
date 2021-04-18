<?php
require_once("../config/db.php");


$id = $_POST['id'];

$query = "DELETE FROM students WHERE id = $id";

$result = $conn->query($query);

header('Location: index.php');

?>