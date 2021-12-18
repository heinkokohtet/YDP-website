<!DOCTYPE html>
<html>
<head>
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
 <?php 
        include('../config.php');

    ?>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#"><img src="../e.png" style="width:100px; height:80px">
      </a>
<h2 >Youth Development Programme</h2>
  
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="../index.php"><b>Home </b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="../course/course0.php"><b>Courses</b> <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="../speaker/speaker.php"><b>Speakers</b><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="../about.php"><b>About </b><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="activity.php"><b>Activity</b> <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="../contact.php"><b>Contact</b> <span class="sr-only">(current)</span></a>
          </li>
           
      </ul></div></div>
      </nav>
      <!-- end of navi -->

      <div id="container" style="background-color: #9BD4F0">

        <div class="about_image" align="center">
          <img src="../33.png" style="width:300px">
        </div> <br> 
      </div>

      <div class="container" align="center" style="padding-left: 100px">
        <b><h2 style="text-align: center;">ACTIVITIES</b></h2><br> 

       
<div class="row" >
          <?php 

                          $result = mysqli_query($conn, "SELECT * FROM activities ORDER BY activity_id DESC "); 

                          while($row = mysqli_fetch_assoc($result)): 
                            
                        ?>

                        <div class="col-lg-5 col-md-6 col-sm-12 my-5">
            <img src="./photos/<?php echo $row['photo'] ?>"class="rounded"width="400px" height="300px">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 my-5"> 
            <h3><?php echo $row['title'] ?></h3> <br><br>
            <p><?php echo $row['post'];?></p> 
 
          </div>

          
                      <?php endwhile; ?>
          </div>
                   
         </div>
<br> <br>



      <div class="footer" style="background-color: #9BD4F0">
 <div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 my-5">
      <h5><strong>About</strong></h5>
        <p><span>Privacy</span></p>
        <p><span>Terms& Conditions</span></p>
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