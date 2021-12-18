<!DOCTYPE html>
<html>
<head>
  <title>YDP Youth Development Programe</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="icon" type="jpg" href="1.png" size="16*16">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="javascript.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="st0yle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="custom.js">$('.single-item').slick();</script>
     <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>


</head>
<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };



         window.jssor_2_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_2", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
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
  src:url('rr.otf');
}
h2{
  font-family:bb;
  
}
@font-face

{
  font-family:bb;
  src:url('selawkl.ttf');
}

.hidden-thing
{
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}
body, html {
    height: 100%;
}

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("130.jpg");

  /* Set a specific height */
  height: 70%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
div#carouselExampleIndicators img
    {
     width:100px;
     padding-right: 
     height:400px;
     /*object-fit:cover;*/
   }

   
a.justify-content-end:
.carousel-item {
  position: relative;
}

/* Bottom right text */
.text-block {
  position: absolute;
  bottom: 160px;
  right: 90px;
  background-color: rgba(155,212,240,0.2);
  color: black;
  padding-left: 20px;
  padding-right: 20px;
}
.text-block1 {
  position: absolute;
  bottom: 250px;
  right: 250px;
  background-color: rgba(155,212,240,0.3);
  color: black;
  padding-left: 20px;
  padding-right: 20px;
}

.text-block2 {
  position: absolute;
  bottom: 200px;
  right: 100px;
  background-color: rgba(155,212,240,0.3);
  color: black;
  padding-left: 20px;
  padding-right: 20px;
}
.column {
  float:right;
  width: 33.33%;
  padding: 50px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.footer {
  
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#9BD4F0;
  color:black;
  
  
}

.button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {width: 250px;}
.button2 {width: 50%;}
.button3 {width: 100%;}

.hote
{
  text-align:center;
}
#counter1
{
  width:100%;
  height: 480px
}
flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
#navbar
{
  background-color: :#9BD4F0;
}

/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height:100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

  /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

</style>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " id="navbar">
  <a class="navbar-brand" href="#"><img src="e.png" style="width:100px; height:80px">
      </a>
      <h2 >Youth Development Programme</h2>

  
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="index.php"><b>Home</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="course/course0.php"><b>Courses</b> <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="speaker/speaker.php"><b>Speakers</b><span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link" href="about.php"><b>About </b><span class="sr-only">(current)</span></a>
          </li>
<li class="nav-item active px-3">
            <a class="nav-link" href="activity/activity.php"><b>Activity</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="contact.php"><b>Contact</b> <span class="sr-only">(current)</span></a>
          </li>
         
      </ul></div></div>

      </nav>
 <div class="hero-image my-5">
  <div class="hero-text">
    <h2 class="myat my-5"><b>ESC Youth Development Programme</b></h2>

    <h4 class="my-5">Our youth programme provide a great oppourtunity 
        and 21st Century  
        soft skill for your life</h4>
        
<a href="course/course0.php" id="contactbtn" align="center" class="my-5" style="padding:1.25rem 5.25rem;
  font-size: .85rem;
  font-weight: 1000;
  text-transform: uppercase;
  border:none;
  border-radius:10rem;
  background-color:#9BD4F0;
  color:black;">Start Learning</a> 
</div>
</div>

<div class="row col-lg-12 col-md-12 col-sm-12" align="center">
  <div class="col-lg-4 col-md-12 col-sm-12  " >
    <img src="k.png" alt="Snow" style="width:150px">
    <h2 class="col-lg-12 col-md-4 col-sm-4">Regular</h2>
    <p class="col-lg-8 col-md-4 col-sm-4">Youth development programme where you can learn the studies of various sectors such as Social, Economic, Health, Education and Life skill. 
    tempor .
    </p>
  </div>
  <div class="col-lg-4 col-md-12 col-sm-12  " >
    <img src="h.png" alt="Forest" style="width:150px">
     <h2 class="col-lg-12 col-md-4 col-sm-4">Online</h2>
    <p class="col-lg-8 col-md-4 col-sm-4">Youth development programme where you can learn easily on social media.
It can save your time and energy and you can spend your time efficiently and effectively.
    </p>
  </div>
 <div class="col-lg-4 col-md-12 col-sm-12  " >
    <img src="j.png" alt="Mountains" style="width:150px">
     <h2 class="col-lg-12 col-md-4 col-sm-4">Service</h2>
    <p class="col-lg-8 col-md-4 col-sm-4">
      1. provide monthly classes for youths <br>
2. build the skills of youths <br>
3. train them the skills they need.
    </p>
  </div>
</div>


                 <h2 align="center" class="my-5">Browse Our Top Course</h2>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="single-item">
      <div class="carousel-inner">
        
        <div class="carousel-item active" class="col-lg-12 col-md-12 col-sm-12 my-3">
          <img src="11.jpg" class="d-block w-50" alt="..."  >
          <div class="text-block">
                 <h2>ESC Youth Leadership Programme</h2>
               <h5>No Matter Your Profession, we're in it together.</h5>
               <a href="course/courserse.php"style="color: black"><h4><u>Read More</u></h4></a>
               </div>
        </div>
        
        <div class="carousel-item" class="col-lg-12 col-md-12 col-sm-12 my-3">
          <img src="12.jpg" class="d-block w-50" alt="...">
          <div class="text-block">
                 <h2>ESC Youth Capactiy Building Programme</h2>
               <h5>No Matter Your Profession, we're in it together.</h5>
               <a href="about.php"style="color: black"><h4><u>Read More</u></h4></a>
               </div>
        </div>
        
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<div id="counter1 ">
            <div class="container1 p-5 my-5">
            <h2 style="text-align: center">About YDP</h2>

              <div class="row">
              
          <div class="col-lg-6 col-md-6 col-sm-6 my-5">
                            

                          
                          <div class="row mx-5">
                            
            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 my-5">
            <h5>ESC Myanmar was established as a social enterprise in September, 2016. With the efforts of the various enthusiastic youth from different professional fields and universities, </h5>

          

                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                <!-- <img src="14.jpg"style="width:700px; height:480px"> -->
                <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="110.jpg" alt="Paris" style="width:500px;height:330px">
    </div>
    <div class="flip-box-back">
        <img src="130.jpg" alt="Paris" style="width:500px;height:330px">
    </div>
  </div>
</div>
                          
          </div>
                  </div>
              </div>
          </div>
<!--                         <h2 align="center">Our Partners</h2>

          <div class="container1">
            
              <div class="row">
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/escmyanmar.institute/"><img src="33.png" alt="Snow" style="width:100%"></a>
                  <p align="center"><b>ESC Institute</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="http://escmyanmar.org/"><img src="44.png" alt="Forest" style="width:100%"></a>
                   <p align="center"><b>ESC Myanmar</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/escinnolab/"><img src="55.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Inno Lab</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/dayforwomendayforyoung/"><img src="22.png" alt="Snow" style="width:100%"></a>
                  <p align="center"><b>Day</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                    <a href="https://www.facebook.com/escyouthcamp/"><img src="11.png" alt="Forest" style="width:100%"></a>
                     <p align="center"><b>ESC Youth Camp</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/escyouthcamp/"><img src="66.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Myan Tal</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/leadacademymyanmar/"><img src="lead.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Lead Academy</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/IHYangon/"><img src="impacthub.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Impact Hub Yangon</b></p>
                </div>
                
              </div>
      </div>
  
  <h2 align="center">Our Sponsers</h2>

          <div class="container1">
            <div class="row">
            </div>
              <div class="row">
  <div class="column col-lg-2 col-md-4 col-sm-4">
    <a href="https://www.facebook.com/CocaColaMyanmar/"><img src="cocacola.png" alt="Snow" style="width:100%"></a>
    <p align="center"><b>Coca Cola</b></p>
  </div>
  <div class="column col-lg-2 col-md-4 col-sm-4">
    <a href="https://www.facebook.com/HP/"><img src="HP.png" alt="Forest" style="width:100%"></a>
     <p align="center"><b>HP</b></p>
 </div>
  <div class="column col-lg-2 col-md-4 col-sm-4">
    <a href="https://www.facebook.com/100PlusMyanmar/"><img src="100plus.png" alt="Mountains" style="width:100%"></a>
     <p align="center"><b>100 plus</b></p>
    </div>
    <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/MyanmarEnervonC/"><img src="enervon-c.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Enervon-C</b></p>
                </div>
    <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/Shwe-Lamin-Nagar-Group-Of-Companies-466622497003568/"><img src="shwelamin.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Shwe Lamin Nagar</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/MFMMyanmar/"><img src="manhattan.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>The Manhattan</b></p>
                </div>
                

  
         
  <div class="column col-lg-2 col-md-4 col-sm-4">
    <a href="https://www.facebook.com/pencellstudio/"><img src="pencell.png" alt="Snow" style="width:100%"></a>
    <p align="center"><b>Pencell Studio</b></p>
  </div>
  <div class="column col-lg-2 col-md-4 col-sm-4">
    <a href="https://www.facebook.com/pepsicolamyanmar/"><img src="pepsi.png" alt="Forest" style="width:100%"></a>
     <p align="center"><b>Pepsi</b></p>
 </div>
  <div class="column col-lg-2 col-md-4 col-sm-4">
    <a href="https://www.facebook.com/ZwareZayat/"><img src="zayat.png" alt="Mountains" style="width:100%"></a>
     <p align="center"><b>Zayat</b></p>
    </div>
    <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/jooskstudio/"><img src="joosk.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>Joosk Studio</b></p>
                </div>
                <div class="column col-lg-2 col-md-4 col-sm-4">
                  <a href="https://www.facebook.com/CMHLCareer/"><img src="cmhl.png" alt="Mountains" style="width:100%"></a>
                   <p align="center"><b>CMHL</b></p>
                </div>
  
          </div>
      </div> -->
       <h2 align="center" class="my-5">Our Partners</h2>
 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:100%;width:100px;height:100px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:130px;overflow:hidden;">
            <div>

                <a href="https://www.facebook.com/escmyanmar.institute/"><img data-u="image" src="33.png" /></a>

            </div>
            <div>
                <a href="http://escmyanmar.org/"><img data-u="image" src="44.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/escinnolab/"><img data-u="image" src="55.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/dayforwomendayforyoung/"><img data-u="image" src="22.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/escyouthcamp/"><img data-u="image" src="11.png" /></a>
            </div>
            <div>
               <a href="https://www.facebook.com/myantal.com.mm"> <img data-u="image" src="66.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/leadacademymyanmar/"><img data-u="image" src="lead.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/IHYangon/"><img data-u="image" src="impacthub.png" /></a>
            </div>
           
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <h2 align="center" class="my-5">Our Sponsers</h2>
<div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:50px;height:50px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:130px;overflow:hidden;">
            <div>

                <a href="https://www.facebook.com/CocaColaMyanmar/"><img data-u="image" src="cocacola.png" /></a>

            </div>
            <div>
                <a href="https://www.facebook.com/HP/"><img data-u="image" src="HP.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/100PlusMyanmar/"><img data-u="image" src="100plus.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/MyanmarEnervonC/"><img data-u="image" src="enervon-c.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/Shwe-Lamin-Nagar-Group-Of-Companies-466622497003568/"><img data-u="image" src="shwelamin.png" /></a>
            </div>
            <div>
               <a href="https://www.facebook.com/MFMMyanmar/"> <img data-u="image" src="manhattan.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/pencellstudio/"><img data-u="image" src="pencell.png" /></a>
            </div>
            <div>
                <a href="https://www.facebook.com/pepsicolamyanmar/"><img data-u="image" src="pepsi.png" /></a>
            </div>
             <div>
                <a href="https://www.facebook.com/ZwareZayat/"><img data-u="image" src="zayat.png" /></a>
            </div>
             <div>
                <a href="https://www.facebook.com/jooskstudio/"><img data-u="image" src="joosk.png" /></a>
            </div>
             <div>
                <a href="https://www.facebook.com/CMHLCareer/"><img data-u="image" src="cmhl.png" /></a>
            </div>
           
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
    </div>
    <script type="text/javascript">jssor_2_slider_init();
    </script>
<div class="footer">
 <div class="container">
  <div class="row my-5">
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
 