$(".callBackSubmitBtnClass").click(function(event) {
      
    function printErrorMsg (msg) {
        //clesar the previous errors
        var arrayX=['callback_name', 'callback_email', 'callback_phone_number']
        arrayX.forEach(function(key) {
            // do something with `item`
            $('.'+key+'_err').text('');
        });

        $.each( msg, function( key, value ) {
            //console.log(key);
            str=String(value);
            $('.'+key+'_err').text(str.replace('callback',''));
            
       });
    }
    


    /* stop form from submitting normally */
    var id_key= store.get('my_name');
    var id_value= $('#' + id_key).val();
    event.preventDefault();
    jQuery.ajax({
       url: callback_post,
       method: 'post',
       data: { 
           "_token": callback_token,
           callback_name: $('#callBackNameID').val(),
           callback_email: $('#callBackEmailID').val(),
           callback_phone_number: $('#callBackPhone_numberID').val(),
           [id_key]:id_value,
           valid_from: $("input[name=valid_from]").val()
        },
        success: function(data) {
            if($.isEmptyObject(data.error)){
                $('#callBackNameID').val('');
                $('#callBackEmailID').val('');
                $('#callBackPhone_numberID').val('');
                $('#callbackShowID').hide();
                $('#callbackHideID').show();
            }else{
                printErrorMsg(data.error);
            }
            //alert(JSON.stringify(data))
        },
        error: function(result) {
            alert(JSON.stringify(result))
        }
    });

});
