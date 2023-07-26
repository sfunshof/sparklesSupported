$("#applyBtnID").click(function(event) {
      
    function printErrorMsg (msg) {
        //clesar the previous errors
        var arrayX=['name', 'email', 'phone_number', 'job_wanted']
        arrayX.forEach(function(key) {
            // do something with `item`
            $('.'+key+'_err').text('');
        });

        $.each( msg, function( key, value ) {
            //console.log(key);
              $('.'+key+'_err').text(value);
              //alert(value);
       });
    }

    
    //alert("ok");
    /* stop form from submitting normally */
    var id_key= store.get('my_name');
    var id_value= $('#' + id_key).val();
    event.preventDefault();
    jQuery.ajax({
       url: apply_post,
       method: 'post',
       data: { 
           "_token": apply_token,
           name: $('#nameID').val(),
           email: $('#emailID').val(),
           phone_number: $('#phone_numberID').val(),
           job_wanted: $('#job_wantedID').val(),
           [id_key]:id_value,
           valid_from: $("input[name=valid_from]").val()
        },
        success: function(data) {
            if($.isEmptyObject(data.error)){
               // alert(data.success);
               $('#applyID').hide();
               $('#applySentID').show();

            }else{
                printErrorMsg(data.error);
            }
        },
        error: function(result) {
           alert("error");
        }
    });

});
