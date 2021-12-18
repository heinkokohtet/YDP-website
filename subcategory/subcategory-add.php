<?php 

	include('../config.php');

	$subcategory_name = $_POST['subcategory_name'];
	$course_id = $_POST['course_id'];

	$sql = "INSERT INTO subcategories (subcategory_name, course_id) VALUES ('$subcategory_name','$course_id')";

	mysqli_query($conn, $sql);

	header('location: subcategory-list.php');
	