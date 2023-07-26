$(document).ready(function () {
    function clear_callback(){
		$('#callBackNameID').val('');
		$('#callBackEmailID').val('');
		$('#callBackPhone_numberID').val('');
		var arrayX=['callback_name', 'callback_email', 'callback_phone_number']
		arrayX.forEach(function(key) {
			// do something with `item`
			$('.'+key+'_err').text('');
		});
	}
	



//this function is called when starting or exiting request call back							
$('#show_fixed_sidebar').click(function(e){
	
	//reset the group id
	$('#callbackShowID').show();
    $('#callbackHideID').hide();
    //clear the error   
	var arrayX=['callback_name', 'callback_email', 'callback_phone_number']
	arrayX.forEach(function(key) {
		// do something with `item`
		$('.'+key+'_err').text('');
	});
    //clear the text
	$('#callBackNameID').val('');
	$('#callBackEmailID').val('');
	$('#callBackPhone_numberID').val('');


	e.preventDefault();
	//$('#help_cotainer').toggle();
	var effect = 'slide';
    // Set the options for the effect type chosen
    var options = { direction: "left" };
    // Set the duration (default: 400 milliseconds)
    var duration = 400;
    $('#help_cotainer').toggle(effect, options, duration);
	$('#help_cotainer').toggleClass('show_help_sidebar');
	var pos	=	$(this).position();
	
	if( $(this).hasClass("sidebar_opened")){ //close
		$(this).css("left", "-90px"); //init 50
		$(this).addClass("sidebar_closed").removeClass("sidebar_opened");
	}else{
		$(this).css("left", pos.left + 550 - 90); //open 
		$(this).addClass("sidebar_opened").removeClass("sidebar_closed");
	}
	
});


$('.close_sidebar').click(function(e){
	e.preventDefault();
	if( $('#help_cotainer').hasClass('show_help_sidebar') ){
		$('#help_cotainer').hide();
		$('#help_cotainer').removeClass('show_help_sidebar');
		$('#show_fixed_sidebar').addClass("sidebar_closed").removeClass("sidebar_opened");
		$('#show_fixed_sidebar').css("left", "-90px");
	}
});

   //These are the forged mobile equivalent */
   $('#callback_btnID').click(function(e){
        e.preventDefault();
		clear_callback();
		var effect = 'slide';
        // Set the options for the effect type chosen
        var options = { direction: "down" };
        // Set the duration (default: 400 milliseconds)
        var duration = 400;
		$('#callback_formID').toggle(effect, options, duration);
		
   });
  
   $('.callback_top_form').click(function(e){
	    e.preventDefault();
	    clear_callback();
		var effect = 'slide';
	    // Set the options for the effect type chosen
	    var options = { direction: "down" };
	    // Set the duration (default: 400 milliseconds)
	    var duration = 400;
	   $('#callback_formID').toggle(effect, options, duration);
	
    });

});