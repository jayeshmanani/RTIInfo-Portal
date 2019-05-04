function isNumeric(keyCode)
{    
	if (keyCode!=8)
	{
		if (keyCode!=9)
		{
		if ((keyCode<45||keyCode>57) && (keyCode<96||keyCode>105))         
		return  false;    
		}
		else
		
		
	return true;   
	} 
}



function requestPassword(num) 
{
	var p1 = document.getElementById('Pass');
	var p2 = document.getElementById('cnfPass');
		
		if(num.value=='Y'){
		p1.removeAttribute("style");
		p2.removeAttribute("style");
		}
		else if(num.value=='N'){
		p1.style.display='none';
		p2.style.display='none';
		}
		/*else{
		p1.style.display='none';
		p2.style.display='none';
		}*/
}

function radioClick()
{
this.blur();
this.focus();
}

/*function changeBPL(Id,language) 
{
    var submit;
    var makePayment;
    if(language == 'hi-IN')
    {
        submit = "डालें";
        makePayment = "भुगतान";
    }
    else
    {
        submit = "Submit";
        makePayment = "Make Payment";
    }
	var b1   = document.getElementById('bplcn');
	var b2   = document.getElementById('bplY');
	var b3   = document.getElementById('bplIsAuth');
	var b4   = document.getElementById('bplUploadMsg');
	var bt   = document.getElementById('requestSubmit');
	var Pay  = document.getElementById('PayMsg');
	var Star = document.getElementById('RedStar');
	

		if(Id.value=='Y'){
		b1.removeAttribute("style");
		b2.removeAttribute("style");
		b3.removeAttribute("style");
		b4.removeAttribute("style");
		Pay.style.display='none';
		Star.removeAttribute("style");
		document.getElementById('requestSubmit').value=submit;
		}
		else if(Id.value=='N'){
		b1.style.display='none';
		b2.style.display='none';
		b3.style.display='none';
		b4.style.display='none';
	    Pay.removeAttribute("style");
		Star.style.display='none';
		document.getElementById('requestSubmit').value=makePayment;
		}
		else{
		b1.style.display='none';
		b2.style.display='none';
		b3.style.display='none';
		b4.style.display='none';
		Pay.style.display='none';
		Star.style.display='none';
		document.getElementById('requestSubmit').value=submit;
		}
}*/


// change  Educational Status
function changeEducational(num) 
{
	var e1 = document.getElementById('er1');
	var e2 = document.getElementById('er2');
	var e3 = document.getElementById('er3');
	var e4 = document.getElementById('er4');
		
		if(num.value=='L'){
		e1.removeAttribute("style");
		e2.removeAttribute("style");
		e3.removeAttribute("style");
		e4.removeAttribute("style");
		}
		
		else if(num.value=='I'){
		e1.style.display='none';
		e2.style.display='none';
		e3.style.display='none';
		e4.style.display='none';
		}
		
		else {
		e1.style.display='none';
		e2.style.display='none';
		e3.style.display='none';
		e4.style.display='none';
		}
		
}


function chngCountryTxt(cval)
{
	var c1 = document.getElementById('txtCountryName');
	var s2 = document.getElementById('txtState');
	var s3 = document.getElementById('inputState');
	
		if(cval.value=='001')
		{
		c1.style.display='none';
		s2.removeAttribute("style");
		s3.style.display='none';
		}
		else if(cval.value=='999')
		{
		c1.removeAttribute("style");
	    s2.style.display='none';
		s3.removeAttribute("style");
		}
		else
		{
	    c1.style.display='none';
		s2.removeAttribute("style");
		s3.style.display='none';
		}
}

function chngCountry(cnt)
{
	var c1 = document.getElementById('txtCountryName');
	var c2 = document.getElementById('cngOthCountry');
	var s1 = document.getElementById('txtState');
	var s2 = document.getElementById('cngstateName');	
	

		if(cnt.value=='001')
		{
		s1.removeAttribute("style");
		s2.removeAttribute("style");
		c1.style.display='none';
		c2.style.display='none';
		document.getElementById('PhoneStdCode').value='+91';
		document.getElementById('MobileStdCode').value='+91';
		}
		else if(cnt.value=='999')
		{
		c1.removeAttribute("style");
		c2.removeAttribute("style");
		s1.style.display='none';
		s2.style.display='none';
		document.getElementById('PhoneStdCode').value='+';
		document.getElementById('MobileStdCode').value='+';
		}
		else
		{
		c1.style.display='none';
		c2.style.display='none';
		s1.removeAttribute("style");
		s2.removeAttribute("style");
		document.FrmRegistration.PhoneStdCode.value='+91';
		document.FrmRegistration.MobileStdCode.value='+91';
		}
}





function changeUserType(Id) 
{
	var g1 = document.getElementById('rowgender');


		if(Id.value=='R'){
		g1.removeAttribute("style");
		}
		else if(Id.value=='C'){
		g1.style.display='none';
		}
		else if(Id.value=='N'){
		g1.style.display='none';
		}
		else if(Id.value=='O'){
		g1.style.display='none';
		}
		else{
		g1.removeAttribute("style");
		}
}

function changeDegree()
{
	var e1 = document.getElementById('er1');
	var e2 = document.getElementById('er2');
	var e3 = document.getElementById('er3');
	var e4 = document.getElementById('er4');
	var chk = document.getElementById("educational_Status").checked;
	
	if(chk === false) {
	e1.style.display='none';
	e2.style.display='none';
	e3.style.display='none';
	e4.style.display='none';	
	} 
}


