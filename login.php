<?php
    require_once "config.php";
//session_start();
	 if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}
    /* if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    } */
	$loginURL = $gClient->createAuthUrl();
        
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <?php include_once 'header.php'; 
   // echo "header login";
    ?>

    <header id="header">
                <?//php echo "header header"; ?>
                <a class="logo" href="index.php">RTI</a>
                <nav>
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
  //                  session_start(); 
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

    <!--<div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

                <img src="images/logo.png"><br><br>

                <form >
                    <input placeholder="Email..." name="email" class="form-control"><br>
                    <input type="password" placeholder="Password..." name="password" class="form-control"><br>
                    <input type="submit" value="Log In" class="btn btn-primary">
                </form>

            </div>
        </div>
    </div>-->
                <center style = "padding-top: 100px;padding-bottom: 100px;">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </center>
    <?php include 'footer.php' ?>
</body>
</html>