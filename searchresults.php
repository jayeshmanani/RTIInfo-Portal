<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	<style type="text/css">
		.clsh1{
			margin: 10px 10px 0px 10px; 
			text-align: center;
			font-size: 50px;
		}
 		.showrti{
 			/*background-color: gray;*/
 			margin:  100px;
 		}
	</style>
</head>
<body>

</body>
</html>
<div class="clsh1">Search Results</div>

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


<div class="article-container">
	<div class="showrti">
		<?php 
		if (isset($_POST['submit'])) {
			$search = mysqli_real_escape_string($conn,$_POST['search']);
			$sql="select * from content where description like '%$search%' OR filename like '%$search%'";
			$res=mysqli_query($conn,$sql);
			$qRes= mysqli_num_rows($res);
			echo "There are ".$qRes." results.";
			echo "<table><tr><td>Serial No.</td><td>FileName</td><td>Description</td></tr></table>";
			if($qRes>0){
		while ($row=mysqli_fetch_assoc($res)) {
			# code...
			echo "
				<div>
					<td><p>".$row['filename']."</p></td><br>
					<td><p>".$row['description']."</p></td><br>
				</div>
			";
		}
			# code...
		}
		else{
			echo "No match";
		}
	}
	 ?>
	</div>
</div>

<?php require 'footer.php'; ?>
</body>
 </html>