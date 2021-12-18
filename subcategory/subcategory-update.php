<?php 

	include('../config.php');

	$subcategory_id = $_POST['subcategory_id'];
	$subcategory_name = $_POST['subcategory_name'];
	$course_id = $_POST['course_id'];

	$sql = "UPDATE subcategories SET subcategory_name = '$subcategory_name', course_id='$course_id' WHERE subcategory_id = $subcategory_id ";

	mysqli_query($conn, $sql);

	header('location: subcategory-list.php');
