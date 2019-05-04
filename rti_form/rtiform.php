<?php
	session_start();
	if (!isset($_SESSION['access_token'])) {
        header('Location: ../login.php');
        exit();
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title>RTI form</title>
	<link href="form.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<!-- Calendar -->
	<!--<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
		});
	</script>-->
	<!-- //Calendar -->
	<script> function getDepartmentList(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Cabinet Secretariat"){
		var optionArray = ["|--Select--","Cabinet Secretariat|Cabinet Secretariat"];
	} else if(s1.value == "Comptroller and Auditor General of India"){
		var optionArray = ["|--Select--","Comptroller and Auditor General of India|Comptroller and Auditor General of India"];
	} else if(s1.value == "Department of Administrative Reforms & PG"){
		var optionArray = ["|--Select--","Department of Administrative Reforms &amp; PG|Department of Administrative Reforms &amp; PG"];
	}else if(s1.value == "Department of Agricultural Research & Education"){
		var optionArray = ["|--Select--","Agricultural Technology Application Research Institute Zone I (ICAR)|Agricultural Technology Application Research Institute Zone I (ICAR)","Central Agricultural University, Imphal|Central Agricultural University, Imphal","Central Agroforestry Research Institute(ICAR)|Central Agroforestry Research Institute(ICAR)","Central Coastal Agricultural Research Institute (ICAR)|Central Coastal Agricultural Research Institute (ICAR)","Central Institute for Arid Horticulture (ICAR)|Central Institute for Arid Horticulture (ICAR)"];
	}else if(s1.value == "Department of Agriculture, Cooperation & Farmers Welfare"){
		var optionArray = ["|--Select--","All India Soil & Land Use Survey|All India Soil & Land Use Survey","Central Farm Machinery Training & Testing Institute|Central Farm Machinery Training & Testing Institute","Central Fertiliser Quality Control & Training Institute (CFQCTI), Faridabad|Central Fertiliser Quality Control & Training Institute (CFQCTI), Faridabad","Central Institute of Horticulture|Central Institute of Horticulture","Coconut Development Board|Coconut Development Board"];
	}		
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
	//document.getElementById('').innerHTML=newOption;
}
function confirmEmail() {
        var email = document.getElementById("Email").value;
        var confemail = document.getElementById("ConfirmEmail").value;
        if(email != confemail) {
            alert('Email Not Matching!');
			return false;
        }
		else{
			return true;
		}
    }

	function ValidateEmail(inputText)
	{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(inputText.value.match(mailformat))
	{
	document.frmRequest.Email.focus();
	return true;
	}
	else
	{
	alert("You have entered an invalid email address!");
	document.frmRequest.Email.focus();
	//header('location:rti_form.html');
	return false;
	}
}
</script>
</head>
<body>
	<!-- Header -->
			<header id="header">
				<?//php echo "header rti_form"; ?>
				<a class="logo" href="../index.php">RTI</a>
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
					<li><a href="../index.php">Home</a></li>
					<?php 
						/* if(isset($_SESSION['access_token']))
						{
							echo "<li><a href='../rti_form.php'>Apply Now</a></li>";
						}
						else{
							echo "<li><a href='../login.php'>Apply Now</a></li>";
						} */
					?>  
					<!--<li><a href='rti_form.php'>Apply Now</a></li>-->
					<li><a href="../find.php">Find RTI</a></li>
					<li><a href="../about.php">About Us</a></li>
					<li><a href="../contact.php">Contact Us</a></li>
					<?php 
					//session_start();
						if(isset($_SESSION['access_token']))
						{
							
							echo "<li><a href='../logout.php'>Logout</a></li>";
						}
						else{
							
							echo "<li><a href='../login.php'>SignIn</a></li>";
						}
					?>
					
					<!--<li><a href="#">SignUp</a></li> -->
				</ul>
			</nav>
	<div style="padding-top: 50px;">			
		<h1>Online RTI Request Form</h1>
	</div>
    <div class="bg-agile">
	<div class="book-appointment">
	<!--<h2>Medical Information</h2>-->
			<form name="frmRequest" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off" id="Form_1519018800" onsubmit="return (confirmEmail() && ValidateEmail(document.frmRequest.Email))">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>Select Ministry/Department/Apex body</p>
						<select class="form-control" name="MinistryId" id="MinistryId" onchange="getDepartmentList('MinistryId','DepartmentId')" required>
								<option value="" selected="">--Select--</option>
			                    <option value="Cabinet Secretariat">Cabinet Secretariat</option>;
			                    <option value="Comptroller and Auditor General of India">Comptroller and Auditor General of India</option>;
			                    <option value="Department of Administrative Reforms & PG">Department of Administrative Reforms &amp; PG</option>;
			                    <option value="Department of Agricultural Research & Education">Department of Agricultural Research &amp; Education</option>;
			                    <option value="Department of Agriculture, Cooperation & Farmers Welfare">Department of Agriculture, Cooperation &amp; Farmers Welfare</option>;
						</select>						
					</div>
					<div class="gaps">
						<p>Select Public Authority</p>
						<select name="DepartmentId" id="DepartmentId" class="form-control"  required>
							<option value="" selected="">--Select--</option>
						</select>
					</div>
					<div class="gaps" style="padding-bottom:10px;">
						<p>Personal Details of RTI Applicant:-</p>
					</div>
					<div class="gaps">
						<p>Name</p>
						<input type="text" minlength="3" maxlength="20" id="Name" name="Name" placeholder="" required=""/>
					</div>	
					<div class="gaps">
						<p>Gender</p>	
							<input type="radio" name="gender" id="gender" class="radio" value="M" required=""/> Male            
							<input type="radio" name="gender" id="gender" class="radio" value="F" required=""/> Female           
							<input type="radio" name="gender" id="gender" class="radio" value="T" required=""/> Third Gender
					</div>
					<div class="gaps" style="padding-top:10px;">
						<p>Address</p>		
						<input type="text" name="address1" id="address1" class="address" maxlength="50" value=""  autocomplete="off" required="" />
						<input type="text" name="address2" id="address2" class="address" maxlength="50" value="">
					</div>
					<div class="gaps">
						<p>Pin Code</p>		
						<input type="text" name="pincode" minlength="6" maxlength="6" onkeydown="return isNumeric(event.keyCode);" value="" required=""/>
					</div>
					<div class="gaps">
						<p>Country</p>		
						<input type="radio" name="chkCountry" id="chkCountry" checked="checked" class="radio" value="india" onchange="chngCountry(this);" onclick="radioClick();"> India                     

					</div>
					<div class="gaps" style="padding-top:10px;">
						<p>State</p>		
						<select class="form-control" name="stateId" id="stateId" class="select" required="">
							<option value="">--Select--</option>
							<option value="AP">Andhra Pradesh</option>
							<option value="AR">Arunachal Pradesh</option>
							<option value="AS">Assam</option>
							<option value="BH">Bihar</option>
							<option value="CH">Chandigarh</option>
							<option value="CG">Chattisgarh</option>
							<option value="DH">Delhi</option>
							<option value="GD">Goa</option>
							<option value="GJ">Gujarat</option>
							<option value="HY">Haryana</option>
							<option value="HP">Himachal Pradesh</option>
							<option value="JK">Jammu And Kashmir</option>
							<option value="JH">Jharkhand</option>
							<option value="KN">Karnataka</option>
							<option value="KL">Kerala</option>
							<option value="LD">Lakshadweep</option>
							<option value="MP">Madhya Pradesh</option>
							<option value="MH">Maharashtra</option>
							<option value="MN">Manipur</option>
							<option value="MG">Meghalaya</option>
							<option value="MZ">Mizoram</option>
							<option value="NL">Nagaland</option>
							<option value="XX">No State</option>
							<option value="OR">Odisha</option>
							<option value="PC">Puducherry</option>
							<option value="PB">Punjab</option>
							<option value="RJ">Rajasthan</option>
							<option value="SK">Sikkim</option>
							<option value="TN">Tamilnadu</option>
							<option value="TG">Telangana</option>
							<option value="TR">Tripura</option>
							<option value="UT">Union Territory</option>
							<option value="UC">Uttarakhand</option>
							<option value="UP">Uttar Pradesh</option>
							<option value="WB">West Bengal</option>
						</select>
					</div>
					<div class="gaps">
						<p>Status</p>
						<input type="radio" name="status" value="R" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio" required=""/> Rural 
						<input type="radio" name="status" value="U" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio" required=""/> Urban
					</div>
					<div class="gaps" style="padding-top:10px;">
						<p>Education Status</p>
						<input type="radio" name="graduate_degree" value="BT" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio" required="required">	Below 12<span class="ordinal">th</span> Standard	
						<input type="radio" name="graduate_degree" value="TP" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio" required=""> 12<span class="ordinal">th</span> Standard Pass

						<input type="radio" name="graduate_degree" value="GD" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio" required=""> Graduate
						<input type="radio" name="graduate_degree" value="PG" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio" required=""> Above Graduate	
					</div>
					<div class="gaps" style="padding-top:10px;">	
						<p>Mobile Number</p>
						<input type="text" name="MobileStdCode" id="MobileStdCode" value="+91" class="smallinput" readonly="readonly" style="width: 10%;">
						<input type="text" name="cell" id="cell" maxlength="10" minlength="10" class="numeric" onkeydown="return isNumeric(event.keyCode);" required>
					</div>	
					<div class="gaps">
						<p>Email Id</p>
						<input type="email" name="Email" maxlength="70" value="" id="Email" class="watermark"  required>
					</div>
					<div class="gaps">
						<p>Confirm Email</p>
						<input type="email" name="ConfirmEmail" id="ConfirmEmail" maxlength="70" value="" required>
					</div>
					<div class="gaps" style="padding-top: 10px; padding-bottom: 10px;">
						<p>Request Details :-</p>
					</div>			
					<div class="gaps">	
						<p>Citizenship<cite>(Only Indian citizens can file RTI Request application)</cite></p>
						<select class="form-control" name="Citizenship" id="Citizenship" onchange="chkCitizenship(this);" required="">
							<option value="I">Indian</option>
							<option value="N">Other</option>
						</select>
					</div>
					<div class="gaps" style="padding-top: 10px; padding-bottom: 10px;">
						<p style="color: red;">(Enter Text for RTI Request application upto 3000 characters)</p>
					</div>
					<div class="gaps">	
						<p>Text for RTI Request application</p>
						<textarea name="Description" id="Description" maxlength="3000" class="alphaNumericText" rows="6" cols="40" required></textarea>
					</div>
				</div>
				<center>
				<div class="clear">
					<input type="submit" name="requestSubmit" id="requestSubmit" value="Submit">
				</div>
				</center>
			</form>
		</div>
   </div>
   <!-- Footer --> 
      <footer id="footer">
        <div class="inner">
          <div class="content">
            
            <section>
              <h4>Menu</h4>
                <hr>
              <ul class="alt">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../login.php">Apply Now</a></li>
                <li><a href="#">Find RTI</a></li>
                <li><a href="../about.php">About Us</a></li>
                <li><a href="../contact.php">Contact Us</a></li>
              </ul>
            </section>
            <section></section>
            <section>
              <h4>Social Media</h4>
              <ul class="plain">
                <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
              </ul>
            </section>
          </div>
          <div class="copyright">
            &copy; RTI<a href="../index.php">info</a>, portal.
          </div>
        </div>
      </footer>  

    <!-- Scripts -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/browser.min.js"></script>
      <script src="../assets/js/breakpoints.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="../assets/js/main.js"></script>
</body>
</html>