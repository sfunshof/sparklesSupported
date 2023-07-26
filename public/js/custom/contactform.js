   /* attach a submit handler to the form  */

    $("#submitBtnID").click(function(event) {
      
        function printErrorMsg (msg) {
            //clesar the previous errors
            var arrayX=['name', 'email', 'phone_number', 'msg_subject', 'message']
            arrayX.forEach(function(key) {
                // do something with `item`
                $('.'+key+'_err').text('');
            });

            $.each( msg, function( key, value ) {
                console.log(key);
                  $('.'+key+'_err').text(value);
                  //alert(value);
           });
        }
   
        
        //alert("ok");
        /* stop form from submitting normally */
       //fileName= 'my_name'
       var id_key= store.get('my_name');
       var id_value= $('#' + id_key).val();

        event.preventDefault();
        jQuery.ajax({
           url: contact_post,
           method: 'post',
           data: { 
               "_token": token,
               name: $('#nameID').val(),
               email: $('#emailID').val(),
               phone_number: $('#phone_numberID').val(),
               msg_subject: $('#msg_subjectID').val(),
               message: $('#messageID').val(),
               [id_key]:id_value,
               valid_from: $("input[name=valid_from]").val()
            },
            success: function(data) {
                if($.isEmptyObject(data.error)){
                    //alert(data.success);
                   $('#contactID').hide();
                   $('#msgSentID').show();

                }else{
                    printErrorMsg(data.error);
                }
            },
            error: function(jqXHR, exception) {
                if (jqXHR.status === 401) {
                    alert('HTTP Error 401 Unauthorized.');
                } else {
                    alert('Uncaught Error.\n' + jqXHR.responseText);
                }
            }
        });
   
    });
