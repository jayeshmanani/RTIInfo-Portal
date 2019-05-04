<?php
 include '../conn.php';
 if(!$conn){
 	echo "Db not connected";
 }


if(!empty($_POST['requestSubmit']))
{
	$ministry_id=$_POST['MinistryId'];
	$department_id=$_POST['DepartmentId'];

	$address_1=$_POST['address1'];
	$address_2=$_POST['address2'];
	//$address_3=$_POST['address3'];

	$name=$_POST['Name'];
	$description=$_POST['Description'];
	$gender=$_POST['gender'];
	$pincode=$_POST['pincode'];
	$country=$_POST['chkCountry'];
	$state=$_POST['stateId'];
	//$status=$_POST['status'];
	//$g_degree=$_POST['graduate_degree'];
	//$phone=$_POST['PhoneStdCode'];
	//$mobile_no=$_POST['MobileStdCode'];
	$mobile=$_POST['cell'];
	$e_mail=$_POST['Email'];
	//$c_mail=$_POST['ConfirmEmail'];
	//$citizenship=$_POST['Citizenship'];
		$q="insert into form_data(ministry,department,name,gender,mobile,email,address1,address2,pincode,state,country) values ('$ministry_id','$department_id','$name','$gender','$mobile','$e_mail','$address_1','$address_2','$pincode','$state','$country')";
	$res=mysqli_query($conn,$q);
	if(!$res){
		echo "Data Not INserted";
	}

 
	require("fpdf/fpdf.php");
	$pdf=new FPDF();
$pdf->AddPage();
	
$pdf->SetFont("Arial","",14);
$pdf->Cell(0,15,"GUJARAT GOVERNMENT",0,1,'C');

$pdf->SetFont("Arial","",12);
$pdf->Cell(0,5,"FORM A",0,1,'C');
$pdf->SetFont("Arial","",10);
$pdf->Cell(0,5,"Application form for obtaining information",0,1,'C');

$pdf->Cell(0,5,"",0,1,'');
$pdf->SetFont("Arial","",10);
$pdf->Cell(0,5,"To,",0,1,'');
$pdf->Cell(0,5,"Public Information Officer",0,1,'');

$pdf->SetFont("Arial","B",10);
$pdf->Cell(0,5,$ministry_id,0,1,'');
$pdf->SetFont("Arial","B",10);
$pdf->Cell(0,5,$department_id,0,1,'');

$pdf->SetFont("Arial","",10);
$pdf->Cell(15,5,"Address:",0,0,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->SetFont("Arial","",10);
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(15,5,"",0,0,'');

$pdf->MultiCell(0,5,"I want to obtain following information from you under the Right to Information Act, 2005. The details are as under. ",0,1,'');

$pdf->Cell(15,5,"1. Applicant's Name                         :",0,0,'');
$pdf->Cell(35,5,"",0,0,'');
$pdf->SetFont("Arial","B",10);
$pdf->Cell(0,5,$name,0,1,'');

$pdf->SetFont("Arial","",10);

$pdf->Cell(15,5,"2. Full Address of the applicant       :",0,0,'');
$pdf->SetFont("Arial","B",10);

$pdf->Cell(35,5,"",0,0,'');
$pdf->Cell(0,5,$address_1,0,1,'');
$pdf->Cell(50,5,"",0,0,'');
$pdf->Cell(0,5,$address_2,0,1,'');
//$pdf->Cell(50,5,"",0,0,'');
//$pdf->Cell(0,5,$address_3,0,1,'');

$pdf->SetFont("Arial","B",10);
$pdf->Cell(100,5,"3. Specific particulars details of information required :",1,0,'');
$pdf->Cell(0,5,"Specific duration of information required: ",1,1,'');
$pdf->MultiCell(100,5,$description,1,1,'');

// duration had to add 

$pdf->Cell(0,5,"",0,1,'');
$pdf->SetFont("Arial","",10);
$pdf->MultiCell(0,5,"4.*(1) I have paid application fee Rs________  in words rupees _________________________________________         on date :____/___/_______ vide receipt no ________________ in the department / office of_________________ .",0,1,'');

// date had to add

$pdf->MultiCell(0,5,"   *(2) I enclose here with crossed Demand Draft l Pay Order/Indian Postal Order for application fees. The details are as under. ",0,1,'');

$pdf->Cell(0,5,"I.  Number of demand draft / pay order / Indian postal order:_______________________________________________ .",0,1,'');
$pdf->Cell(0,5,"II. Date :____/___/_______",0,1,'');
$pdf->Cell(0,5,"III. Name and place of bank / post office: ______________________________________________________________ .",0,1,'');

$pdf->Cell(0,5,"IV. Drawn in favour of *(i) 'Government of Gujarat' OR 
	*(ii)_______________________________________________ .",0,1,'');

$pdf->Cell(0,5,"V. Amount Rupees: ____________",0,1,'');
$pdf->Cell(0,5,"*(3) Non-judicial stamp / court fee stamp / revenue stamp of Rs________ is affixed on this application. ",0,1,'');

$pdf->MultiCell(0,5,"*(4) I have paid application fee by chalan date:___/___/_______ at _________(mention name of bank,branch, place) Which is enclosed in original here with. ",0,1,'');
$pdf->MultiCell(0,5,"*(5) I have made application on Rs.20/- Non judicial stamp paper I judicial stamp paper hence no separate fee is paid. ",0,1,'');

$pdf->MultiCell(0,5,"*(6) I here by declare that I belong to B.P.L. family as on date: ___/___/______ and I enclose herewith certified copy / true copy of B.P.L card or certified copy I true copy of certificate for B.P.L. Therefore I have not paid application fee. ",0,1,'');

$pdf->Cell(0,5,"5. I hereby declare that I am a Citizen of India. ",0,1,'');
$pdf->Cell(0,5,"6. I hereby declare that above details are true the best ofmy knowledge and belief. ",0,1,'');

$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"Date:____/___/_______",0,1,'');
$pdf->Cell(0,5,"Place:________________________",0,1,'');
$pdf->Cell(0,5,"Signature of applicant:________________________________",0,1,'');
$pdf->Cell(13,5,"Phone: ",0,0,'');
$pdf->Cell(0,5,$mobile,0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->Cell(0,5,"",0,1,'');
$pdf->SetFont("Arial","B",10);
$pdf->Cell(0,5,"* Strike out whichever is not applicable. ",0,1,'');



$pdf->output();
}
?>