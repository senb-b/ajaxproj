<?php
require ('connect.php');
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		$query = "UPDATE students set name ='$name' , age = $age , course = '$course' WHERE id = $id";
		mysqli_query($connection , $query);
?>