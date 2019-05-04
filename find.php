<?php require 'conn.php'; ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Find RTI</title>
 	<style type="text/css">
 		.showrti{
 			/*background-color: gray;*/
 			margin:  100px;
 		}
 		

 	</style>
 </head>
 <body>
 		<!-- Header Start -->
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
			<!-- Header Finished -->



			
<center>
<form method="post" action="searchresults.php">
	<input type="" name="search" size="100%" style="height:45px">
	<input type="submit" name="submit" value="Search" style="height:45px; margin:15px 0px 0px 0px ;">
</form>

<h1 >All RTI's</h1> </center>
<div class="article-container"></div>
<div class="showrti">
<?php 
	$sql= "Select * from content";
	$res=mysqli_query($conn,$sql);
	$qRes= mysqli_num_rows($res);
	echo "<table><tr><td>Serial No.</td><td>FileName</td><td>Description</td></tr></table>";
	if($qRes>0){
		while ($row=mysqli_fetch_assoc($res)) {
			# code...
			echo "
				<div>
					<p>".$row['sr_no']."</p><br>
					<p>".$row['filename']."</p><br>
					<p>".$row['description']."</p><br>
				</div>
			";
		}
	}
 ?>
</div>


		<?php require 'footer.php'; ?>
</body>
 </html>
