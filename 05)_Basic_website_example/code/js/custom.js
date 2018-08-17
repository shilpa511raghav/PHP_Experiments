/*!
 * Designed By WaveInfotech.biz
 */
//initialize animation
new WOW().init();


// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$('.feedback-body').hide();
$('.feedback-header').click(function() {
    $('.feedback-body').slideToggle();
});

// datepicker trigger 
$(function(){
				$('#calendar1').appendDtpicker({
					"dateOnly": true,
					"autodateOnStart": false,
					"futureOnly": true,
					"closeOnSelected": true,
					"todayButton": false
				});
			});
			
			$(function(){
				$('#calendar2').appendDtpicker({
					"autodateOnStart": false,
					"futureOnly": true,
					"closeOnSelected": true,
					"todayButton": false
				});
			});
			
// login-popover
$('.login-wrap').hide();
$('.btn-login,.close-login').click(function() {
    $('.login-wrap').slideToggle('slow');
});


//edit profile 

		$('.edit_button').click(function(){
			var editParent = $(this).parent();
		  
			editSection($(editParent).parent('div.editings'));
			
			
			
		});
		
		 function editSection(section){
			
             var $para = section.find($('.to-b-hidden'));
			 var $textarea = section.find($('.form_component'));
			 
			  $para.addClass('hidden');
			  $textarea.removeClass('hidden');
			  
          }
//=================================================================//
//			FORM JAVASCRIPT
//=================================================================//

// preview Image
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
	
	//only alphabets
	$('.nodigi').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z._\b]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            
			return true;
        }
        else
        {
        e.preventDefault();
		return false;
        }
    });	
	
    // only numbers
	$('.noalpha').keypress(function (e) {
        var regex = new RegExp("^[0-9._\b]+$");
        var str = String.fromCharCode(!e.NCode ? e.which : e.NCode);
		 var value = $(this).val();
        if (regex.test(str)) {
           return true; 
        }
        else
        {
        e.preventDefault();
        return false;
        }
    });	
	
	//pin codes
	$('.pin').keypress(function (e) {
		var regex = new RegExp("^[._\b]+$");
        var str = String.fromCharCode(!e.NCode ? e.which : e.NCode);
        var value = $(this).val();
		if (regex.test(str)) {
           return true; 
        }
        else
        {
			if (value.length  <= 5 ) {
				return true;
			}
        e.preventDefault();
        return false;
        }
    });	
	
	// phone numbers
	$('.phone').keypress(function (e) {
		var regex = new RegExp("^[._\b.\v]+$");
        var str = String.fromCharCode(!e.NCode ? e.which : e.NCode);
        var value = $(this).val();
		if (regex.test(str)) {
           return true; 
        }
        else
        {
			if (value.length  <= 9 ) {
				return true;
			}
        e.preventDefault();
        return false;
        }
    });	



//=================================================================//
//			ANIMATIONS JAVASCRIPT
//=================================================================//

var lefttoright = function(targetElement, speed){
    
    $(targetElement).css({left:'180px',opacity:'1'});
    $(targetElement).animate(
        {
        'left': $(document).width() - 350 
        }, 
        { 
        duration: speed, 
        complete: function(){
			$('.truck2').css({opacity:'0'});
            righttoleft($('.truck1'), 7000);
			
            }
        }
    );
    
};

var righttoleft = function(targetElement, speed){
    
    $(targetElement).css({right:'180px',opacity:'1'});
    $(targetElement).animate(
        {
        'right': $(document).width() - 350 
        }, 
        { 
        duration: speed, 
        complete: function(){
			$('.truck1').css({opacity:'0'});
            lefttoright($('.truck2'), 7000);
            }
        }
    );
    
};
lefttoright($('.truck2'), 7000);
//animation end