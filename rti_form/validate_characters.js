
//<!--Allow  alphaNumUser In Text Box onlly-->
var nospecialChars = "/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\"|\;|\:|\s/g";
var onlyWhiteSpaceAllowed = "/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\"|\;|\:/g";
	$(function() {
            $('input.alphaNumUser[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z0-9]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
//                }
                if (this.value.match(nospecialChars)) {
                this.value = this.value.replace(nospecialChars, '');
                }
            });
        });

	
//<!--Allow  Alphanumeric In Text Box onlly-->
	$(function() {
            $('input.alphaNumeric[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
//                }
                if (this.value.match(onlyWhiteSpaceAllowed)) {
                this.value = this.value.replace(onlyWhiteSpaceAllowed, '');
                }
            });
        });
	

//<!--Allow  Alpha In Text Box onlly-->
	$(function() {
            $('input.alpha[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z ]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
//                }
            });
        });
	
	
//<!--Allow  Alpha In Text Box onlly-->
	$(function() {
            $('input.name[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z0-9\,\.\-\(\)\& ]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z0-9\,\.\-\(\)\& ]/g, '');
//                }
                if (this.value.match(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\""|\;|\:/g)) {
                this.value = this.value.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\""|\;|\:/g, '');
                }
                 
            });
        });	
	
//<!--Allow  Numeric In Text Box onlly-->
	$(function() {
            $('input.numeric[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^0-9 ]/g)) {
//                    this.value = this.value.replace(/[^0-9 ]/g, '');
//                }
            });
        });
	


//<!--Allow  AlphaNumeric In Text Area onlly-->
	$(function() {
            $('input.address[$id=TextAreaId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z0-9\.\,\-\_\(\)\/\:\& ]/g)) 
//                {
//                    this.value = this.value.replace(/[^a-zA-Z0-9\.\,\-\_\(\)\/\:\& ]/g, '');
//                }
            });
        });	
	
//<!--Allow  AlphaNumeric In Text Area onlly-->
$(function() {
 $('textarea.alphaNumericText[$id=TextAreaId]').keyup(function() {
// if (this.value.match(/[^a-zA-Z0-9\,\.\-\_\(\)\/\@\:\&\\\%\n ]/g)) {
// this.value = this.value.replace(/[^a-zA-Z0-9\,\.\-\_\(\)\/\@\:\&\\\%\n ]/g, '');
// }
 });
});		


//<!--Allow  Registration No In Text Box onlly-->
	$(function() {
            $('input.regOnly[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z0-9&/]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z0-9&/]/g, '');
//                }
            });
        });

//<!--Allow  Email Only In Text Box onlly-->
$(function() {
	$('input.EmailOnly[$id=TxtId]').keyup(function() {
//		if (this.value.match(/[^a-zA-Z0-9\.\-\_\@]/g)) {
//			this.value = this.value.replace(/[^a-zA-Z0-9\.\-\_\@]/g, '');
//		}
	});
});


//<!--Allow  Activation Kay In Text Box onlly-->
	$(function() {
            $('input.ActivationKey[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^A-Z0-9/]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z0-9&/ ]/g, '');
//                }
            });
        });	
	
//<!--Allow  Email In Text Box onlly-->
	$(function() {
            $('input.EmailTxt[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^a-zA-Z0-9-_.@/]/g)) {
//                    this.value = this.value.replace(/[^a-zA-Z0-9-_.@/ ]/g, '');
//                }
            });
        });	
	
//<!--Allow  STD COD In Text Box onlly-->
	$(function() {
            $('input.STDCode[$id=TxtId]').keyup(function() {
//                if (this.value.match(/[^0-9+/]/g)) {
//                    this.value = this.value.replace(/[^0-9+/ ]/g, '');
//                }
            });
        });	
