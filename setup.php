<?php 
	
	include("config.php");


	$drop="Drop Table learningtypes";
	$droprun=mysqli_query($conn,$drop);

	$drop="Drop Table courses";
	$droprun=mysqli_query($conn,$drop);	

	$drop="Drop Table coursecategories1";
	$droprun=mysqli_query($conn,$drop);

	$drop="Drop Table teachers";
	$droprun=mysqli_query($conn,$drop);

	$drop="Drop Table subcategories";
	$droprun=mysqli_query($conn,$drop);
	
	$drop="Drop Table speakers";
	$droprun=mysqli_query($conn,$drop);
	
	$drop="Drop Table coursecategories";
	$droprun=mysqli_query($conn,$drop);
	
	$drop="Drop Table courseteacherdetail";
	$droprun=mysqli_query($conn,$drop);

	$drop="Drop Table admins";
	$droprun=mysqli_query($conn,$drop);
	
	$drop="Drop Table visitors";
	$droprun=mysqli_query($conn,$drop);

	$drop="Drop Table visitorcoursedetail";
	$droprun=mysqli_query($conn,$drop);

	$drop="Drop Table reviews";
	$droprun=mysqli_query($conn,$drop);	

	


	$create = "Create table learningtypes
	(
		learning_id int auto_increment not null primary key,
		learning_name varchar(255)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Learningtypes Table Successfully.";
	}

	#########################################

	$create = "Create table courses
	(
		course_id int auto_increment not null primary key,
		photo varchar(255),
		course_name varchar(255),
		start_date date,
		end_date date,
		duration varchar(255),
		price varchar(255),
		start_at time,
		end_at time,
		learning_id int,
		Foreign key(learning_id) references learningtypes(learning_id)

	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Course Table Successfully.";
	}

	###################################
	

	$create = "Create table teachers
	(
		teacher_id int auto_increment not null primary key,
		teacher_name varchar(255),
		profile varchar(255),
		position varchar(255),
		email varchar(255),
		phone_no varchar(255)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Teacher Table Successfully.";
	}

	###################################

	$create = "Create table courseteacherdetail
	(
		courseteacher_id int auto_increment not null primary key,
		course_id int,
		teacher_id int,
		Foreign key(course_id) references courses(course_id),
		Foreign key(teacher_id) references teachers(teacher_id)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "CourseTeacherDetail Table Successfully.";
	}

	####################################

	$create = "Create table admins
	(
		admin_id int auto_increment not null primary key,
		admin_name varchar(255),
		password varchar(255)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Admin Table Successfully.";
	}

	##################################

	$create = "Create table coursecategories
	(
		coursecategory_id int auto_increment not null primary key,
		coursecategory_name varchar(255),
		course_id int,
		Foreign key(course_id) references courses(course_id)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "CourseCategories Table Successfully.";
	}

	####################################

	$create = "Create table visitors
	(
		visitor_id int auto_increment not null primary key,
		visitor_name varchar(255),
		email varchar(255),
		phone_no varchar(255),
		address varchar(255)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Visitors Table Successfully.";
	}

	########################################

	$create = "Create table visitorcoursedetail
	(
		visitorcoursedetail_id int auto_increment not null primary key,
		visitor_id int,
		course_id int,
		Foreign key(visitor_id) references visitors(visitor_id),
		Foreign key(course_id) references courses(course_id)

	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "VisitorCourseDetail Table Successfully.";
	}

	##########################################

	$create = "Create table reviews
	(
		review_id int auto_increment not null primary key,
		review_name varchar(255),
		batch_name varchar(255),
		review text
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Review Table Successfully.";
	}

	###########################################

	$create = "Create table subcategories
	(
		subcategory_id int auto_increment not null primary key,
		subcategory_name varchar(255),
		coursecategory_id int,
		Foreign key(coursecategory_id) references coursecategories(coursecategory_id)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Sub Category Table Successfully.";
	}

	############################################

	$create = "Create table speakers
	(
		speaker_id int auto_increment not null primary key,
		speaker varchar(255),
		speaker_name varchar(255)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "Speaker Table Successfully.";
	}

	###########################################

	$create = "Create table coursecategories1
	(
		coursecategory_id int auto_increment not null primary key,
		coursecategory_name varchar(255),
		course_id int,
		Foreign key(course_id) references courses(course_id)
	)";

	$createresult = mysqli_query($conn, $create);
	if($createresult)
	{
		echo "CourseCategories1 Table Successfully.";
	}

	

	
	

?>