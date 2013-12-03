		 <div class="dashRow">
            <div class="row-fluid">

                <div class="span3">
                   <?php echo "date_end " . $start_date . " date_start " .$end_date;
                    //print_r($result_for_report);
                    
            
                   ?>

                  
                    <div class="dashWidget noPadding">


                        <div class="projectBox">

					                               <h4>Start Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date:</h4>
					                               <input type="text" id="start_id" name="start_date" class="input-small" value="<?php echo $start_date;?>">&nbsp;&nbsp;&nbsp;<input type="text" id="end_id" name="end_date" class="input-small" value="<?php echo $end_date?>">

                        </div>
                        
                        <div class="projectBox">
                            <a href="javascript:void(0)" class="btn btn-large btn-info search_appt">Search Records</a> csv <input type="checkbox" name="csv" id="csv" value="csv">

                        <div style="clear:both;"></div>
                        </div>


             </div>
           </div>

                <div class="span9">
                    <input class=".search_input">
                    <div class="dashWidget noPadding">
                      <table class="table table-stripped" id="main_results">
                        <?php foreach($result_for_report as $result){?>
                        <tr>
                          <td><?php echo "<span class='label'>" . $result->human_date ." </span></br><b> ". $result->start_readable ." <i class='icon icon-arrow-right'></i> ". $result->end_readable . "</b>";   ?></td>
                          <td>
                            <?php echo $result->cust_name_bm;?><br>
                            <span class="label"><?php echo $result->appointment_email;?></span>
                          </td>
                          <td><?php echo $result->appointment_type_name;?></td>
                          <td><?php echo $result->appointment_price_desc;?></td>
                         <?php 
                         if($result->paid == "not paid"){
                          $class_passed = "btn-danger";
                          }else{
                          $class_passed = "btn-success";
                          }

                         ?>
                          <td><?php echo $result->appointment_type_flag;?></td>
                          <td><a href="javascript:void(0)" class="btn btn-small <?php echo $class_passed;?> flag-paid" data-id="<?php echo $result->ID_auth_bm; ?>">$</a></td>
                          <td><a href="javascript:void(0)" class="btn btn-small btn-danger remove_appt" data-id="<?php echo $result->ID_auth_bm; ?>">x</a></td>
                        </tr>
                       
                       <?php } ?>  
                       </table> 

                    </div>
                </div>
            </div>
        </div>


   

    </div> <!-- END view-holder -->


</div> <!-- END Layout Center -->

<!--Modal Window Templates-->
    <div class="modal fade" id="myModal">
          <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Add a New Task</h3>
          </div>
          <div class="modal-body">
            <h3>Title:</h3>
            <input type="text" placeholder="Title">
            <h4>Description:</h4>
            <textarea style="width:98%; height:100px;" placeholder="Describe your task..."></textarea>
            <p>Lots of things can go here...</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-primary">Save Task</a>
          </div>
    </div>
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
		$( "#start_id" ).datepicker();
		$( "#end_id" ).datepicker();
    
    $(document).on("click", ".remove_appt", function() {
      var data_id = $( this ).attr('data-id');
      $( this ).closest('tr').hide('slow');
      $.post("<?php echo base_url();?>index.php/organizer/create_main_event/unset_me", {data_id: data_id}, function(data){
            //alert('called');
            
            
        }, 'text');
    });

    $(document).on("click", ".flag-paid", function() {
      //alert('d');
      var data_id = $( this ).attr('data-id');
      //$( this ).closest('tr').hide('slow');
      var is_paid = $( this ).hasClass('btn-success');
      
      if ( is_paid ) {
        $( this ).addClass('btn-danger');
        $( this ).removeClass('btn-success');
        is_paid = "not paid";
      } else {
        $( this ).addClass('btn-success');
        $( this ).removeClass('btn-danger');
        is_paid = "paid";
      }
      $.post("<?php echo base_url();?>index.php/organizer/create_main_event/update_paid", {data_id: data_id, is_paid: is_paid}, function(data){
            alert(data);
            
            
        }, 'text');
    });

    

    $(document).on("click", ".search_appt", function() {
      date1 = format_date_custom ($('#start_id').val());
      date2 = format_date_custom ($('#end_id').val());
      if($('#csv').is(":checked")){
        download_option = "download";
      } else {
        download_option= "no_download"
      }
      final_query = "<?php echo base_url();?>index.php/organizer/create_main_event/members_area/" + download_option + "/" + date1 + "/" + date2;
      window.location.replace(final_query);
      
    });

   $(document).on("keyUp", ".search_input", function() {
    alert('d');
    $("#main_results tr td:contains('"+ $(this).val() +"')").each(function(){
      $(this).parent('tr').hide('slow');
    });
   });

	});
   
  function format_date_custom (string_passed) {
    thing_holder = string_passed.split("/");
    return thing_holder[2]+"/"+thing_holder[0]+"/"+thing_holder[1];
  } 
   
   
	</script>