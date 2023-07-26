<div id="callbackShowID" style="padding-left:50px">
    <form id='callbackFormID'>
       <div class="row">
           <p style="color:#007C5A;padding-top:10px; text-align:center"> 
               Send us your contact details and we will call you back
            </p>
       </div>
       
        {{-- @honeypot --}}       
       <div class="row">
           <div class="col-sm-12">
                <div class="form-group">
                   <input type="text" name="callback_name" id="callBackNameID"  style="width:90%"  class="form-control" placeholder="Name"  autocomplete="off">
                   <span class="help-block with-errors callback_name_err"></span>
               </div>
           </div>

           <div class="col-sm-12">
               <div class="form-group">
                   <input type="email" name="callback_email" id="callBackEmailID" style="width:90%"  class="form-control"  placeholder="Email"  autocomplete="off">
                   <span class="help-block with-errors callback_email_err"></span>
               </div>
           </div>

           <div class="col-sm-12">
               <div class="form-group">
                   <input type="text" name="callback_phone_number" id="callBackPhone_numberID"  style="width:90%"  class="form-control" placeholder="Phone" autocomplete="off">
                   <span class="help-block with-errors callback_phone_number_err"></span>
               </div>
           </div>
       </div>
       <div class="row">
            <div class="col text-center">
                <button type="button" class="default-btn-two  callBackSubmitBtnClass " 
                     id="callBackSubmitBtnID">
                     Call Me Back
                </button>
           </div>
       </div>      

        <div id="callBackmsgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </div>
    </form>
</div>

<div id="callbackHideID"  class="notvisible"  style="padding-top: 40px">
  <p style="#007C5A"> We have received your details and 
    will call you back as soon as possible
  </p>  
</div>


<script>
    var callback_post =   "{{ url('miscellaneous/post')}}";
    var callback_token = "{{ csrf_token() }}";
   // var_my_name="<?php echo config('honeypot.name_field_name'); ?>";
    //my_name will be used in ajax and got from store
    //var my_name=get_honeyPotName('#callbackFormID',var_my_name);
</script>

