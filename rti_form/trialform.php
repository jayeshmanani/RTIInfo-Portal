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
	<title>RTI Info</title>
	
	<link href="trailform.css" rel="stylesheet" type="text/css" />
    <script> function getDepartmentList(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Cabinet Secretariat"){
		var optionArray = ["|--Select--","|Cabinet Secretariat"];
	} else if(s1.value == "Comptroller and Auditor General of India"){
		var optionArray = ["|--Select--","|Comptroller and Auditor General of India"];
	} else if(s1.value == "Department of Administrative Reforms & PG"){
		var optionArray = ["|--Select--","|Department of Administrative Reforms &amp; PG"];
	}else if(s1.value == "Department of Agricultural Research & Education"){
		var optionArray = ["|--Select--","|Agricultural Technology Application Research Institute Zone I (ICAR)","|Central Agricultural University, Imphal","|Central Agroforestry Research Institute(ICAR)","|Central Coastal Agricultural Research Institute (ICAR)","|Central Institute for Arid Horticulture (ICAR)"];
	}else if(s1.value == "Department of Agriculture, Cooperation & Farmers Welfare"){
		var optionArray = ["|--Select--","|All India Soil & Land Use Survey","|Central Farm Machinery Training & Testing Institute","|Central Fertiliser Quality Control & Training Institute (CFQCTI), Faridabad","|Central Institute of Horticulture","|Coconut Development Board"];
	}		
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
<link rel="stylesheet" type="text/css" href="trialform.css">

<script type="text/javascript" src="alphanumric.js"></script>
		<script type="text/javascript" src="comman.js"></script>
		<script type="text/javascript" src="datepick.js"></script>
		<script type="text/javascript" src="md5.js"></script>
		<script type="text/javascript" src="min.js"></script>
		<script type="text/javascript" src="textareacounter.js"></script>
		<script type="text/javascript" src="tool-tip.js"></script>
		<script type="text/javascript" src="validate.js"></script>
		<script type="text/javascript" src="validate_characters.js"></script>
		
		<link type="text/javascript" href="Formsubmit.js">
		<div  style="margin-left: 20px; margin-right: 20px;">
		<div id="slider-From"><h4>Online RTI Request Form</h4>
		<p>Note:Fields marked with <samp style="color:#FF0000"><b>*</b></samp> are Mandatory. </p></div>

	<center><div id="form1">
		
		
		<!--Start Left SideBar-->
			<div id="content-form">
		
				<form name="frmRequest" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off" id="Form_1519018800">

<!-- if session found create new Token -->
<!--end create new Token-->
	<table width="100%" border="1" class="tbl-border" cellpadding="0" cellspacing="0">
				<table width="100%" border="0 px" class="Searchheading">
				<tbody>

				<center><th width="40%">Public Authority Details :-</th></center>
                <tr>    <td width="60%">
                    <!--<strong class="greenrow">Search Public Authority</strong> 
		 
						<input type="text" name="SerchMinistry" id="inputString" onkeyup="lookup(this.value);" class="LargeSerchBox name" placeholder="Type name or part of name of public authority">
   -->
						<span class="suggestionsBox" id="suggestions" style="display:none;">
							<img src="upArrow.png" style="position: relative; top: -12px; left: 80px;" alt="upArrow">
							<div class="suggestionList" id="autoSuggestionsList">&nbsp;</div>

						</span>
					</td>
				</tr>
				</tbody>
				</table>
		
		<table width="100%" border="0" class="tbl-border" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
                    <th class="THfirst">&nbsp;</th>
                    <td class="TDfirst" style="text-align: right;">
                                            </td>
				</tr>
        <tr><th><samp style="color:#FF0000" ><b>*</b></samp> Select Ministry/Department/Apex body</th>
		<td><select name="MinistryId" id="MinistryId" class="selectXLLong" onchange="getDepartmentList('MinistryId','DepartmentId')" required>
                        <option value="" selected="">--Select--</option>
			                            <option value="Cabinet Secretariat">Cabinet Secretariat</option>;
			                            <option value="Comptroller and Auditor General of India">Comptroller and Auditor General of India</option>;
			                            <option value="Department of Administrative Reforms & PG">Department of Administrative Reforms &amp; PG</option>;
			                            <option value="Department of Agricultural Research & Education">Department of Agricultural Research &amp; Education</option>;
			                            <option value="Department of Agriculture, Cooperation & Farmers Welfare">Department of Agriculture, Cooperation &amp; Farmers Welfare</option>;
			                           
					    </select>
		</td>
		</tr>
		
		
        <tr><th>&nbsp;</th><td>&nbsp;</td></tr>
        
        <tr><th><samp style="color:#FF0000"><b>*</b></samp> Select Public Authority <p></p><address>(Your Request will be filed with this selected Public Authority)</address><p></p></th>
		<td> 
        <div id="DepartmentDiv"><select name="DepartmentId" id="DepartmentId" class="selectXLLong"  required>
		<option value="">--Select--</option>
	</select></div>
   		</td>
		</tr>
        <tr><th>&nbsp;</th><td>&nbsp;</td></tr>

        </tbody></table>
		
		<table width="100%" border="1" class="heading">
		<tbody>
		<tr><th colspan="2">Personal Details of RTI Applicant:-:-</th></tr>
		</tbody>
		</table>
		
		<table width="100%" border="0" class="tbl-border" cellpadding="0" cellspacing="0">
		<tbody><tr>
                    <th class="THfirst"><samp style="color:#FF0000"><b>*</b></samp>Name</th>
                    <td class="TDfirst">
                        <input type="text" name="Name" id="Name" maxlength="50" value="" class="name" placeholder="" required>
                    </td>
                </tr>
		<tr>
                    <th><samp style="color:#FF0000" required><b>*</b></samp>Gender </th>
                    <td>
                                                <fieldset id="gender" style="width: 250px">
                            <legend>Gender</legend>
                            <input type="radio" name="gender" id="gender" class="radio" value="M" required> Male            
							<input type="radio" name="gender" id="gender" class="radio" value="F" required> Female           
							<input type="radio" name="gender" id="gender" class="radio" value="T" required> Third Gender    
							</fieldset>
                    </td>
		</tr>
		
		<tr><th><samp style="color:#FF0000"><b>*</b></samp> Address</th>
		<td>
                    <input type="text" name="address1" id="address1" class="address" maxlength="50" value=""  autocomplete="off" required>
                    <!--<add class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></add>-->
		</td></tr>
		
		<tr><th>&nbsp;</th>
		<td><input type="text" name="address2" id="address2" class="address" maxlength="50" value=""></td></tr>
		
		<tr><th>&nbsp;</th>
		<td><input type="text" name="address3" id="address3" class="address" maxlength="50" value=""></td></tr>
		
		
		<tr><th>Pin code</th>
                    <td><input type="text" name="pincode" minlength="6" maxlength="6" onkeydown="return isNumeric(event.keyCode);" value="">
<!--                    <pin class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></pin>		-->
		</td></tr>
	
		<tr><th>Country</th>
		<td>
                    <input type="radio" name="chkCountry" id="chkCountry" checked="checked" class="radio" value="001" onchange="chngCountry(this);" onclick="radioClick();"> India                    <input type="radio" name="chkCountry" id="chkCountry" value="999" class="radio" onchange="chngCountry(this);" onclick="radioClick();"> Other 
		
		</td>
		</tr>
		
	<tr><th><font id="cngstateName">State</font>
	<font id="cngOthCountry" style="display:none;">Country name</font> </th>
	<td><span id="txtState">
	<select name="stateId" id="stateId" class="select">
	<option value="">--Select--</option>
	<option value="AP">Andhra Pradesh</option><option value="AR">Arunachal Pradesh</option><option value="AS">Assam</option><option value="BH">Bihar</option><option value="CH">Chandigarh</option><option value="CG">Chattisgarh</option><option value="DH">Delhi</option><option value="GD">Goa</option><option value="GJ">Gujarat</option><option value="HY">Haryana</option><option value="HP">Himachal Pradesh</option><option value="JK">Jammu And Kashmir</option><option value="JH">Jharkhand</option><option value="KN">Karnataka</option><option value="KL">Kerala</option><option value="LD">Lakshadweep</option><option value="MP">Madhya Pradesh</option><option value="MH">Maharashtra</option><option value="MN">Manipur</option><option value="MG">Meghalaya</option><option value="MZ">Mizoram</option><option value="NL">Nagaland</option><option value="XX">No State</option><option value="OR">Odisha</option><option value="PC">Puducherry</option><option value="PB">Punjab</option><option value="RJ">Rajasthan</option><option value="SK">Sikkim</option><option value="TN">Tamilnadu</option><option value="TG">Telangana</option><option value="TR">Tripura</option><option value="UT">Union Territory</option><option value="UC">Uttarakhand</option><option value="UP">Uttar Pradesh</option><option value="WB">West Bengal</option>	</select></span>
	
	<span id="txtCountryName" style="display:none">
	<input type="text" name="txtCountry" id="txtCountry" class="alpha" maxlength="30"> 
	<cite>Enter country Name.</cite></span>
	</td></tr>
        
	<tr><th>Status</th><td>
		<input type="radio" name="status" value="R" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> Rural 
		
		<input type="radio" name="status" value="U" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> Urban		</td></tr>

		<tr class="tab"><th>Educational Status</th><td>
		<input type="radio" name="educational_Status" value="L" onchange="changeEducational(this);" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> Literate 	
		<input type="radio" name="educational_Status" value="I" onchange="changeEducational(this);" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> Illiterate</td></tr>

		<tr id="er1" style="display:none;"><th>&nbsp;</th><td>
		<input type="radio" name="graduate_degree" value="BT" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> 
		Below 12<span class="ordinal">th</span> Standard	</td></tr>

		<tr id="er2" style="display:none;"><th>&nbsp;</th>
                    <td>
                        <input type="radio" name="graduate_degree" value="TP" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> 12<span class="ordinal">th</span> Standard Pass </td></tr> 
                    
		
        <tr id="er3" style="display:none;" class="tab"><th>&nbsp;</th><td>
		<input type="radio" name="graduate_degree" value="GD" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> Graduate 
		</td></tr>
 		
        <tr id="er4" style="display:none;"><th>&nbsp;</th><td>
		<input type="radio" name="graduate_degree" value="PG" ondblclick="this.checked=!this.checked" onclick="radioClick()" class="radio"> Above Graduate		</td></tr>
	
		
				
		<tr><th>Phone Number</th>
		<td><input type="text" name="PhoneStdCode" id="PhoneStdCode" value="+91 " class="smallinput" readonly="readonly" >
		
		<input type="text" name="phone" id="phone" minlength="10" maxlength="10" onkeydown="return isNumeric(event.keyCode);" class="numeric">
<!--<phone class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></phone>-->
<!-- <cite>Provide STD code without zero eg.1123456789</cite>-->
</td></tr>


		
		
				<tr><th>Mobile Number<cite>(For receiving SMS alerts)</cite></th>
                    <td><input type="text" name="MobileStdCode" id="MobileStdCode" value="+91" class="smallinput" readonly="readonly">
		
		<input type="text" name="cell" id="cell" maxlength="10" minlength="10" class="numeric" onkeydown="return isNumeric(event.keyCode);">
		
<!--<cell class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></cell>-->
		<!-- <cite>eg. 9400000001</cite>-->
</td></tr>

	
		<tr><th><samp style="color:#FF0000"><b>*</b></samp> Email-ID</th>
		<td>
		<input type="email" name="Email" maxlength="70" value="" id="Email" class="watermark" required>
		<email class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></email>
		</td></tr>
        
        <tr><th><samp style="color:#FF0000"><b>*</b></samp> Confirm Email-ID</th>
		<td>
		<input type="email" name="ConfirmEmail" id="ConfirmEmail" maxlength="70" value="" required>
		<cnfemail class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></cnfemail>
		</td></tr>
		</tbody></table>
		
<table width="100%" border="0" class="heading">
<tbody>
<tr><th colspan="2">Request Details :-</th></tr>
</tbody>
</table>
		
	<table width="100%" border="0" class="tbl-border" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<th class="THfirst">Citizenship<p><cite>(Only Indian citizens can file RTI Request application)</cite></p>
		
		</th>
		<td class="TDfirst"><select name="Citizenship" id="Citizenship" class="selectLong" onchange="chkCitizenship(this);">
			<option value="I">Indian</option>
			<option value="N">Other</option>
		</select></td></tr>
        
<!--
    <tr><th>Does it concern the Life or Liberty of a Person ?</th>
    <td>
    <input type="radio" name="life" id="life" value="N"  class="radio"  
    style="display:inline-block;vertical-align:middle;padding-bottom:2px;" 
	checked="checked" /> No (Normal)
        
    <input type="radio" name="life" id="life" value="Y" class="radio" 
    style="display:inline-block;vertical-align:middle;" /> Yes (Urgent) 
    </td>
    </tr>

-->


<!--<tr><th><samp style="color:#FF0000"><b>*</b></samp> Is the Applicant Below Poverty Line ?</th>
<td><select name="BPL" id="BPL" class="select" >
<option value="">--Select--</option>
<option value="Y">Yes</option>
<option value="N">No</option>
</select>
</td>
</tr>-->

<tr id="PayMsg" style="display:none;"><th colspan="2"><cite>You are required to pay the RTI fee of ₹ 10 </cite>
</th></tr>

<tr id="bplcn" style="display:none;"><th>BPL Card No.<p><cite>(Proof of BPL may be provided as an attachment)</cite></p></th><td>
<input type="text" name="bplCardNo" id="bplCardNo" maxlength="50" value="" class="address"></td></tr>

<tr id="bplY" style="display:none;"><th>Year of Issue</th><td>
<input type="text" name="YearOfUssue" id="YearOfUssue" onkeydown="return isNumeric(event.keyCode);" maxlength="4" class="numeric" value="">
<!--<span class="question"><img src="https://rtionline.gov.in/images/questionToolTip.png" /></span>-->
</td></tr>

<tr id="bplIsAuth" style="display:none;"><th>Issuing Authority</th><td><input type="text" name="IssuAuthority" id="IssuAuthority" class="name" maxlength="50" value=""></td></tr>


<tr><td colspan="2" style="border-right:none;">(Enter Text for RTI Request application upto 3000 characters)</td></tr>

<tr><th colspan="2" style="border-right:1px #999999 solid;"><dfn>Note:- Only alphabets A-Z a-z number 0-9 and special characters , . - _ ( ) / @ : &amp; \ % are allowed in Text for RTI Request application.</dfn>
</th></tr>

<tr><th><samp style="color:#FF0000" ><b>*</b></samp> Text for RTI Request application</th>
<td><textarea name="Description" id="Description" maxlength="3000" class="alphaNumericText" rows="6" cols="40" required></textarea><div class="charleft originalTextareaInfo" style="width: 520px;">&nbsp;</div>
</td>
</tr>		

<tr><th><code id="RedStar" style="display:none;"><samp style="color:#FF0000"><b>*</b></samp></code> Supporting document  <span>(only pdf upto 1 MB)</span><p><cite id="bplUploadMsg" style="display:none;">(Upload the proof of BPL status)</cite></p></th>
<td><input type="file" name="DocumentFile" id="DocumentFile" onblur="chkFileType();" value="">
<input type="hidden" name="chkPdfFileType" id="chkPdfFileType" value="">
</td>
</tr>

<tr>
<th><samp style="color:#FF0000" required><b>*</b></samp>  Enter security code  </th><td>
<img src="https://rtionline.gov.in/captcha_code_file.php?rand=306386512" id="captchaimg" class="captcha" alt="captchaImage">
<input type="text" name="6_letters_code" id="6_letters_code" class="captchaSInput alphaNumeric" maxlength="10" autocomplete="off">
<br>
<small><a href="javascript: refreshCaptcha();">Refresh</a></small>
</td></tr>
<tr><th>&nbsp;</th><td>
<button class="bt"><input type="submit" name="requestSubmit" id="requestSubmit" value="Submit" class="btnPaySubmit"> </button>
<button class="bt"><input type="reset" value="Reset" class="btnSubmit"></button>

<input type="hidden" name="hndSessionFromId" value="6466663434376264353235336637376630343833663932616237383164633334">

</td></tr>
</tbody></table>

</table>

</form>	

<script type="text/javascript">
$("#MinistryId").trigger("change");
$('#Description').alphanumeric({allow:":@%, ./\ ( ) & - _ "});
$('#address1').alphanumeric({allow:":%, ./\ ( ) & - _ "});
$('#address2').alphanumeric({allow:":%, ./\ ( ) & - _ "});
$('#address3').alphanumeric({allow:":%, ./\ ( ) & - _ "});
</script>
 	
		
		</div>
	<!--End Left SideBar-->	
		
		<br class="clearfix">
		
	</div> 
<!--<div id="page-bottom">
	<p><a href="https://rtionline.gov.in">Home </a>| <a href="http://india.gov.in/" target="_blank"> National Portal of India </a>| <a href="http://dsscic.nic.in/online-appeal-application/onlineappealapplication/" target="_blank">Complaint &amp; Second Appeal to CIC </a>| <a href="https://rtionline.gov.in/faq.php"> FAQ </a> </p>
	
	<p class="Copyright">Copyright © 2013. All rights reserved. 
Designed, Developed and Hosted by National Informatics Centre, New Delhi</p>
	</div> --><!--end page-bottom--></div></center>
<br class="clearfix">
</div>
<!-- Footer --> 
   <!--   <footer id="footer">
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
   <!-- Footer Ends -->
    <!-- Scripts -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/browser.min.js"></script>
      <script src="../assets/js/breakpoints.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="../assets/js/main.js"></script>
</body> 
</html>