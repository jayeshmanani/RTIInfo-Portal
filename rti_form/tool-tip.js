
$(document).ready(function () {
  $("span.question").hover(function () {
   $(this).append('<div class="tooltip"> Enter only numeric values (0-9).</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});


$(document).ready(function () {
  $("EmailId.question").hover(function () {
   $(this).append('<div class="tooltip"> e.g user@domain.com.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});



$(document).ready(function () {
  $("cal.question").hover(function () {
    $(this).append('<div class="tooltip">Click on calendar icon to select a date.<br/>Date Format is DD/MM/YYYY.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("reg.question").hover(function () {
    $(this).append('<div class="tooltip"> e.g DOP&T/R/2005/00001</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("username.question").hover(function () {
    $(this).append('<div class="tooltip">Please enter username which should be<br>of minimum eight alphanumeric characters.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("pass.question").hover(function () {
    $(this).append('<div class="tooltip"><p>Password should be minimum of 8 <br/>characters having atleast<br/>one Alphabet,<br/>one Numeric,<br/>one Special Character.<br/>Special characters allowed  !@#$%^&*()</p></div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("cpass.question").hover(function () {
    $(this).append('<div class="tooltip">Password and Confirm password<br> should be same.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("email.question").hover(function () {
    $(this).append('<div class="tooltip">Please enter valid Email Id.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("cnfemail.question").hover(function () {
    $(this).append('<div class="tooltip">Email Id and Confirm Email-ID<br> should be same.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("uType.question").hover(function () {
    $(this).append('<div class="tooltip">Please select at least one user type.</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("add.question").hover(function () {
    $(this).append('<div class="tooltip">Enter address for correspondence. Characters allowed <br> A-Z a-z 0-9 . , / - _( ) :&</p></div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("pin.question").hover(function () {
   $(this).append('<div class="tooltip">Enter only numeric values (0-9)<br>eg. 110001</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});

$(document).ready(function () {
  $("phone.question").hover(function () {
   $(this).append('<div class="tooltip">Enter Phone Number with STD Code without zero and country code.<br>eg. 1123340829</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});



$(document).ready(function () {
  $("cell.question").hover(function () {
   $(this).append('<div class="tooltip">Enter only numeric values (0-9)<br>eg. 9400000001</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});




$(document).ready(function () {
  $("email_update.question").hover(function () {
    $(this).append('<div class="tooltip">To change your Email-Id, Send an email to:-<br>helprtionline-dopt[at]nic[dot]in</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});


$(document).ready(function () {
  $("cell_update.question").hover(function () {
   $(this).append('<div class="tooltip">To change your Mobile Number, Send an email to:-<br>helprtionline-dopt[at]nic[dot]in</div>');
  }, function () {
    $("div.tooltip").remove();
  });
});




/*********************************Start Water Mark*****************************/

$(document).ready(function() {
 var watermark = 'e.g user@domain.com';
 $('#Email').blur(function(){
  if ($(this).val().length == 0)
    $(this).val(watermark).addClass('watermark');
 }).focus(function(){
  if ($(this).val() == watermark)
    $(this).val('').removeClass('watermark');
 }).val(watermark).addClass('watermark');
});

//$(document).ready(function() {
//var watermark = 'Enter pincode';
//$('#pincode').blur(function(){
//if ($(this).val().length == 0)
//$(this).val(watermark).addClass('watermark');
//}).focus(function(){
//if ($(this).val() == watermark)
//$(this).val('').removeClass('watermark');
//}).val(watermark).addClass('watermark');
//});

//$(document).ready(function() {
//var watermark = 'Enter phone number';
//$('#phone').blur(function(){
//if ($(this).val().length == 0)
//$(this).val(watermark).addClass('watermark');
//}).focus(function(){
//if ($(this).val() == watermark)
//$(this).val('').removeClass('watermark');
//}).val(watermark).addClass('watermark');
//});


//$(document).ready(function() {
//var watermark = 'Enter mobile number';
//$('#cell').blur(function(){
//if ($(this).val().length == 0)
//$(this).val(watermark).addClass('watermark');
//}).focus(function(){
//if ($(this).val() == watermark)
//$(this).val('').removeClass('watermark');
//}).val(watermark).addClass('watermark');
//});



//function showWatermarkPin(theID)
//{
//    var element = document.getElementById(theID);
//    if (element.value.length == 0)
//        element.style.backgroundImage = 'url(\'../images/letterBox.png\')';
//    else
//        element.style.backgroundColor = 'white';
//}

//function showWatermarkPhone(theID)
//{
//    var element = document.getElementById(theID);
//    if (element.value.length == 0)
//        element.style.backgroundImage = 'url(\'../images/phone.png\')';
//    else
//        element.style.backgroundImage = 'url(\'../images/phone.png\')';
//}

//function hideWatermarkPhone(theID)
//{
//    var element = document.getElementById(theID);
//    element.style.backgroundImage = 'url(\'../images/phone.png\')';
//    element.style.backgroundImage = 'url(\'../images/phone.png\')';
//}

//function showWatermarkMob(theID)
//{
//    var element = document.getElementById(theID);
//    if (element.value.length == 0)
//        element.style.backgroundImage = 'url(\'../images/mob.png\')';
//    else
//       element.style.backgroundImage = 'url(\'../images/mob.png\')';
//}
//function hideWatermarkMob(theID)
//{
//    var element = document.getElementById(theID);
//    element.style.backgroundImage = 'url(\'../images/mob.png\')';
//    element.style.backgroundImage = 'url(\'../images/mob.png\')';
//}


/*********************************End Water Mark*****************************/
