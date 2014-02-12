		 <div class="dashRow">
            <div class="row-fluid">

                <div class="span3">
                   

                  
                    <div class="dashWidget noPadding">

                      <div class="well" style="background-color: #bae6ba;margin-top:30px;">
                        <b>Instructor Filter</b>
                        <select name="instructor_selection" class="change_me" id="instructor_selection">  
                          <?php

                          //****************************************************************************//
                          //list pros
                          //****************************************************************************//
                          if($user_id == '173') {
                          foreach($golf_pros as $pro){
                          ?>

                          <option value="<?php echo $pro->ID_auth_t; ?>">
                            <?php echo $pro->first_name_t; ?> <?php echo $pro->last_name_t; ?>
                          </option>  

                          <?php } ?>
                          <option value="all">all pros</option>
                          <?php } else { ?>
                          <option value="<?php echo $user_id; ?>"><?php echo $full_name; ?></option>
                          <?php } ?>
                        </select>
                        <br>
                        <br>
                        <b>Plan Filter</b>
                        <select name="plan_selection" class="change_me" id="plan_selection">  
                          <?php

                          //****************************************************************************//
                          //create the grey header attribute
                          //****************************************************************************//
                          foreach($golf_plans as $plan){
                          ?>
                          <option value="<?php echo $plan->ID_auth_dp; ?>">
                            <?php echo $plan->name; ?>
                          </option>  
                           

                          <?php
                          }
                          ?>
                          <option value="all">all plans</option>
                        </select>

               </div>
             </div>
           </div>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showing client results for <span id="instructor_name_shown" class="label" style="font-size:.8em;"> <?php echo $this->session->userdata('first_o'); ?>&nbsp;<?php echo $this->session->userdata('last_o'); ?></span>&nbsp;in plan <span id="plan_name_shown" class="label" style="font-size:.8em;"><?php echo $first_plan->name;;?></span></h3>
                <div class="span9">
                    <div class="dashWidget noPadding well">
                      <textarea style="width:100%; height:250px;" id="text_area"><?php foreach($email_holder as $email){ echo $email->appointment_email . ', ';} ?></textarea>  
                      

                    </div>
                </div>
            </div>
        </div>


   

    </div> <!-- END view-holder -->


</div> <!-- END Layout Center -->

<!--Modal Window Templates-->
   
    <div class="modal fade" id="replyModal">
          <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Reply:</h3>
          </div>
          <div class="modal-body">
            <textarea style="width:98%; height:100px;"></textarea>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-primary">Post Reply</a>
          </div>
    </div>
	<!--date picker widget-->
    <script>
	$(function() {
    
    $(document).on("change", ".change_me", function() {
      var inst = $('#instructor_selection').val();
      var inst_display = $('#instructor_selection option:selected').text();
      var plan = $('#plan_selection').val();
      var plan_display = $('#plan_selection option:selected').text();
      //alert(inst_display + ' ' + plan_display);
      $('#instructor_name_shown').text(inst_display);
      $('#plan_name_shown').text(plan_display);

      $.post("<?php echo base_url();?>index.php/organizer/client_detail/get_clients", {inst: inst, plan: plan}, function(data){
            var html_var ="";
            $.each(data, function(i, item) {
                html_var += item.appointment_email + ", ";
            })
            $('#text_area').val(html_var);
            
            
      }, 'json');
    });
  });

   
   
	</script>