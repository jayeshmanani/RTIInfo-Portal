<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
	//$conn = mysqli_connect('localhost', 'root', '','test');
  include 'conn.php';
	
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
	<!--<link rel="stylesheet" href="assets/css/main.css" />-->
</head>
<body>
	<?php include_once 'header.php'; 
	//echo "header profile";?>
	
<header id="header">
				<?//php echo "header header"; ?>
				<a class="logo" href="index.php">RTI</a>
				<nav>
					<?php 
					//session_start();
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


<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<img style="width: 80%;" src="<?php echo $_SESSION['picture'];
			$picture = $_SESSION['picture']; 
			 ?>">
		</div>

		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>



					<form method="post" action="upload_file.php" enctype="multipart/form-data">
    <p>File :</p>
    <input type="file" name="Filename"> 
    <br/>
    Description:<textarea maxlength="200" required="required" name="Description"></textarea>
    <input TYPE="submit" name="upload" value="Submit"  />
</form>

<form method="post" action="retrive_file.php" enctype="multipart/form-data">
    <p>File :</p>
   <input TYPE="submit" name="retrive" value="retrive"/>
</form><br>


					<button type = "submit" name = "logout" onclick  = "location.href = 'logout.php'">logout</button>
					
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ;
						$fn = $_SESSION['givenName']; 
						?></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'];
						$ln = $_SESSION['familyName']; 
						?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ;
						$email = $_SESSION['email']; 
						?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $_SESSION['gender'] ;
						$gender = $_SESSION['gender']; 
						?></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
<?php 

					$check= "SELECT * from g_data where email='$email'";
					$rs=mysqli_query($conn,$check);
					$res=mysqli_fetch_array($rs,MYSQLI_NUM);
					if($res[0]>1){
						echo "Welcome Back Buddy ".$fn;
					}	
					else{
					$query = "INSERT INTO g_data(picture,firstname,lastname,email,gender) VALUES('$picture','$fn','$ln','$email','$gender')";
					mysqli_query($conn, $query);
						echo "Welcome to the world of RTI Info ".$fn;
					}
?>