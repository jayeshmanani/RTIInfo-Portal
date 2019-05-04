<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--<link rel="stylesheet" href="assets/css/main.css" />-->
		
	</head>
	<body class="is-preload">
		<?php include_once 'header.php'; 
		//echo "header contact";?>

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

		<!-- Heading -->
			<div id="heading" >
				<h1>Contact Us</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<div class="contact-form">
							<form id="contact-form" method="post" action="contact_handler.php">
								<input type="text" name="name" class="form-control" placeholder="Enter Your full Name" required=""><br>
								<input type="email" name="email" class="form-control" placeholder="Enter Your email" required=""><br>

								<textarea name="message" class="form-control" placeholder="Message" rows="4" required=""></textarea><br>
								
								<input type="submit" class="form-control submit" value="SEND MESSAGE">
							</form>
						</div>
					</div>
				</div>
			</section>

		<?php include 'footer.php' ?>

	</body>
</html>