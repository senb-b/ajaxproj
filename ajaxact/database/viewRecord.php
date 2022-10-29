<?php
require ('connect.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM students WHERE id = $id";
	$result = mysqli_query($connection , $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
?>