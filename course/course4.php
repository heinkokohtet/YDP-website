<!DOCTYPE html>
<html>

<head>
    <style type="text/css">

body{
  overflow-x: hidden;
}

h1{
  font-family: aa;
}

@font-face

{
  font-family:aa;
  src:url('../rr.otf');
}
h2{
  font-family:bb;
  
}
@font-face

{
  font-family:bb;
  src:url('../selawkl.ttf');
}

.hidden-thing
{
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}
  </style>
	<title>YDP Youth Development Programe</title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
  <link rel="icon" type="jpg" href="../1.png" size="16*16">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../javascript.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../stoyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script type="text/javascript" src="custom.js"></script>

</head>

<body>

  <?php 
        include('../config.php');

       /* $result = mysqli_query($conn, "SELECT * FROM courses ca, coursecategories cc, learningtypes lt WHERE ca.coursecategory_id = cc.coursecategory_id and ca.learning_id = lt.learning_id");
*/
       // $result = mysqli_query($conn, "SELECT * FROM courses ca, learningtypes lt WHERE ca.learning_id = lt.learning_id LIMIT 24,3");

       $result = mysqli_query($conn, "SELECT course_name, photo, start_date, end_date, duration, start_at, end_at , learning_name FROM subcategories sc, courses cs, learningtypes lt WHERE sc.course_id = cs.course_id and cs.learning_id = lt.learning_id and sc.subcategory_name = 'None' ");

       // $result = mysqli_query($conn, "SELECT * FROM subcategories sc, courses cs, learningtypes lt WHERE sc.course_id = cs.course_id and cs.learning_id = lt.learning_id and subcategory_name = 'None' ");

       // $result = mysqli_query($conn, "SELECT course_name, photo, start_date, end_date, duration, start_at, end_at , learning_name FROM subcategories sc, courses cs, learningtypes lt, coursecategories cc WHERE sc.course_id = cs.course_id and cs.learning_id = lt.learning_id and cs.coursecategory_id = cc.coursecategory_id and subcategory_name = 'None' ");


    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light  " id="navbar">
  <a class="navbar-brand" href="#"><img src="../e.png" style="width:100px; height:80px">
      </a>
<h2 >Youth Development Programme</h2>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">      <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="../index.php"><b>Home </b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="course0.php"><b>Courses</b> <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="../speaker/speaker.php"><b>Speakers</b><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="../about.php"><b>About </b><span class="sr-only">(current)</span></a>
          </li>
<li class="nav-item active px-3">
            <a class="nav-link" href="../activity/activity.php"><b>Activity</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="../contact.php"><b>Contact</b> <span class="sr-only">(current)</span></a>
          </li>
          
          
      </ul></div></div>

      </nav>

            <div style="background-color:#9BD4F0;">

      <div class="col-lg-12 col-md-6 col-sm-6">
<video autoplay muted loop width="100%" height="500px">
  <source src="../youth.mp4" type="video/mp4">
</video>
</div>

</div>
      <h2 align="center">Building Capacity</h2>



    <div class="container my-3 col-lg-12 col-md-6 col-sm-12 my-5">

    <div class="row">
                      <?php while($row = mysqli_fetch_assoc($result)): ?>

      <div class="col-lg-4 col-md-4 col-sm-12 my-3">
        <div class="card" value="<?php echo $row['course_id'] ?>" name="course_id">
<img src="./photos/<?php echo $row['photo'] ?>"class="card-img-top"></td>          
            <div class="card-body">
            
            <h5 class="card-title"><?php echo $row['course_name'] ?></h5>
            <h5 class="card-title"><?php echo $row['start_date'] ?> to <?php echo $row['end_date'] ?></h5>
            <h5 class="card-title"><?php echo $row['duration'] ?></h5>
            <h5 class="card-title"><?php echo $row['start_at'] ?> to <?php echo $row['end_at'] ?></h5>
            <h5 class="card-title" value="<?php echo $row['learning_id'] ?>">                <?php echo $row['learning_name'] ?>
</h5>

          </div>
         
        </div>
      </div>
                        <?php endwhile; ?>

    </div>

  </div>

<div class="footer" style="background-color:#9BD4F0;">
 <div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 my-5">
      <h5><strong>About</strong></h5>
        <p><span>Privacy</span></p>
        <p><span>Terms& Condition</span></p>
        <p><span>Preferences</span></p>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 my-5">
      <h5><strong>Support</strong></h5>
         <p><span>Careers</span></p>
         <p><span>Account</span></p>
         <p><span>Membership</span></p>
    </div>

    <div class="col-lg-5=6 col-md-6 col-sm-12 my-5">
      
      <h5 class="hello"><strong>Follow Us</strong></h5>
        <a href="" style="color: black"><i class="fab fa-facebook"></i></a>
        <a href="" style="color: black; padding: 15px"><i class="fab fa-twitter"></i></a>
        <a href="" style="color: black"><i class="fab fa-instagram"></i></a>

      <div class="input-group mb-3 my-3">

  <input type="text" class="form-control" placeholder="Type Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-secondary" type="button" id="button-addon2">Subscribe</button>
  </div>
</div>
    
  </div>
  
 </div>


<div class="row">
      <div class="col-12">
        <div class="h5 text-center">@2020 ESC Myanmar.org</div>
      </div>
    </div> 
</div> 

</div>
 </body>
</html>


