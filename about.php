<!DOCTYPE html>
<html>
<head>
  <title>About</title>
  <link href="about/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="about/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="about/css/animate.css" rel="stylesheet" />
  <!--<link rel="stylesheet" href="assets/css/main.css" />-->
  <!-- Squad theme CSS -->
  <link href="about/css/style.css" rel="stylesheet">
  <link href="about/color/default.css" rel="stylesheet">
  <script src="about/js/jquery.min.js"></script>
  <script src="about/js/bootstrap.min.js"></script>
  <script src="about/js/jquery.easing.min.js"></script>
  <script src="about/js/jquery.scrollTo.js"></script>
  <script src="about/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="about/js/custom.js"></script>
</head>
<body>
  <?php include_once 'header.php'; 
  //echo "header about";?>

<header id="header">
        <?//php echo "header header"; ?>
        <a class="logo" href="index.php">RTI</a>
        <nav>
          <?php 
          session_start();
            if(isset($_SESSION['access_token']))
            {
              $FName=$_SESSION['givenName'];
              echo "<a href='profile.php'>$FName</a>";
            }
            else{
              echo "<a href='login.php'>SignIn</a>";
              
            }
          ?> 
          <a href="#menu">Menu</a>
        </nav>
      </header>

    <!-- Nav -->
      <nav id="menu">
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <?php 
            /* if(isset($_SESSION["access_token"]))
            {
              echo "<li><a href='rti_form/rti_form.html'>Apply Now</a></li>";
            }
            else{
              echo "<li><a href='login.php'>Apply Now</a></li>";
            } */
          ?>
          <li><a href='rti_form/rtiform.php'>Apply Now</a></li>
          <li><a href="find.php">Find RTI</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <?php 
          //session_start();
            if(isset($_SESSION['access_token']))
            {
              
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else{
              echo "<li><a href='login.php'>SignIn</a></li>";
              
            }
          ?>
          
          <!--<li><a href="#">SignUp</a></li> -->
        </ul>
      </nav>


	<div id="heading" >
        <h1>About Us</h1>
      </div>
      <section id="main" class="wrapper">
        <div class="inner">
          <div class="content">
            <header>
              <center><h2>Our Motto</h2></center>
            </header>
            <p>Our motto is to Provide a platform to People of india. Where they can upload their Previous RTI replies from government. So, Other people can view it and save their Time and Money.</p>
            
          </div>
        </div>
      </section>
    <!-- Section: about 
      <section id="about" class="home-section text-center">
        <div class="heading-about">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                  <div class="section-heading">
                    <h2>Our Team</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">

          <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
              <hr class="marginbot-50">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                  <div class="inner">
                    <h5>Anna Hanaceck</h5>
                    <p class="subtitle">Pixel Crafter</p>
                    <div class="avatar"><img src="about/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                  <div class="inner">
                    <h5>Maura Daniels</h5>
                    <p class="subtitle">Ruby on Rails</p>
                    <div class="avatar"><img src="about/img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                  <div class="inner">
                    <h5>Jack Briane</h5>
                    <p class="subtitle">jQuery Ninja</p>
                    <div class="avatar"><img src="about/img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                  <div class="inner">
                    <h5>Tom Petterson</h5>
                    <p class="subtitle">Typographer</p>
                    <div class="avatar"><img src="about/img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
      <!-- /Section: about -->
      <?php include 'footer.php' ?>
    </body>
</html>