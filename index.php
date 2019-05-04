<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" type="text/css" href="slider.css">
	    <!--<link rel="stylesheet" href="assets/css/main.css" />-->
		
	</head>
<body class="is-preload">
	
	             <?php include 'header.php'; 
	             ?>

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
				//	session_start();
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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Welcome to RTI info portal </h1>
					<p>The Right to Information Act, simply known as RTI, is a revolutionary Act that aims to promote transparency in government institutions in India.<br /> The Act came into existence in 2005, after sustained efforts of anti-corruption activists.<br />
					</p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>How to File RTI?</h2>
						<p>Every Indian should know about RTI filing.The procedure to File RTI is simple and hassle-free.</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="About_RTI.php" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3><strong>How to File Online RTI?</strong></h3>
								</header>
								<p>Currently, Central and a few State government departments have facility for filing Online RTI. However, there are multiple independent websites that let you file your application online. They charge you a nominal amount, for which they draft your application and send it to the relevant department.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="About_RTI.php" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3><strong>How to use RTI to solve problems in the community?</strong></h3>
								</header>
								<p>If in your community, you think the facilities are not as expected or you observe some government maintained property in bad condition, you can use RTI to get the government working on it.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="About_RTI.php" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3><strong>How powerful is RTI Act</strong></h3>
								</header>
								<p>As per law, the RTI information should be provided in 30 days. However, sometimes government records are misplaced or missing.</p>
							
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="About_RTI.php" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3><strong>How powerful is RTI Act</strong></h3>
								</header>
								<p>As per law, the RTI information should be provided in 30 days. However, sometimes government records are misplaced or missing.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="About_RTI.php" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3><strong>Why RTI is a success?</strong></h3>
								</header>
								<p>This is because, or the first time in the history of independent India, there is a law which casts a direct accountability on the officer for non-performance.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="About_RTI.php" class="icon fa-qrcode"><span class="label">Icon</span></a>
									<h3><strong>Who is covered under RTI?	</strong></h3>
								</header>
								<p>The Central RTI Act extends to the whole of India except the State of Jammu and Kashmir.</p>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h1>Pure CSS3 Text Carousel</h1>

						<div class="content-slider">
						  <div class="slider">
						    <div class="mask">
						      <ul>
						        <li class="anim1">
						          <div class="quote">Hello, this is a quote from a person.</div>
						          <div class="source">- Person</div>
						        </li>
						        <li class="anim2">
						          <div class="quote">Hello, this is a quote from another person.</div>
						          <div class="source">- Another person</div>
						        </li>
						        <li class="anim3">
						          <div class="quote">Hello, this is a quote from an animal.</div>
						          <div class="source">- Animal</div>
						        </li>
						        <li class="anim4">
						          <div class="quote">Hello, this is a quote from a plant.</div>
						          <div class="source">- Plant</div>
						        </li>
						        <li class="anim5">
						          <div class="quote">How do ya like that.</div>
						          <div class="source">- Cassidy</div>
						        </li>
						      </ul>
						    </div>
						  </div>
						</div>

				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Our Team</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/jm.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Jayesh Manani</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/nv.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Nirav Solanki</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/km.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Harshesh Kamli</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/aki.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Axay Patel</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<?php include 'footer.php' ?>

	</body>
</html>