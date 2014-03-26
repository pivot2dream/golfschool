<div class="dashRow">
    <div class="row-fluid">
    	<div class="span4">
			<fieldset>
			<legend>Plan Information</legend>
			<?php
			   echo form_open('organizer/golf_plans/add_plan');
			?>
			<input type="hidden" name="live" value="yes">
			<input type="hidden" name="instructor_id" value="<?php echo $this->session->userdata('id_o');?>">
			Display Name of Plan:<br>
			<input name="plan_name" id="plan_name" placeholder="Plan Name" /><br>
			Verbal Price Description:<br>
			<textarea name="price_info" id="price_info" placeholder="Short Price Description"></textarea><br>
			Minutes in Plan:<br>
			<select name="plan_duration" id="plan_duration" class="input input-medium">
			  <option value="1">15 minute plan</option>
			  <option value="2">30 minute plan</option>
			  <option value="3">45 minute plan</option>
			  <option value="4">1 hour plan</option>
			  <option value="5">1:15 plan</option>
			  <option value="6">1:30 plan</option>
			  <option value="7">1:45 plan</option>
			  <option value="8">2 hour plan</option>
			  <option value="9">2:15 plan</option>
			  <option value="10">2:30 plan</option>
			  <option value="11">2:45 plan</option>
			  <option value="12">3 hour plan</option>
			</select>
			<input name="id_name" id="id_name" type="hidden" value="false"/>
			
			</fieldset>
        </div>
        <div class="span4">
			<fieldset>
			<legend>Plan Descriptions</legend>
			Short Plan Description:<br>
			<textarea name="expanded_info" id="expanded_info" placeholder="Short Plan Description"></textarea><br>
			below must be a number, (for reporting not shown to client):
			<div class="input-prepend input-append">
			  <span class="add-on">$</span>
			  <input class="input input-small" name="expanded_info_2" id="expanded_info_2" placeholder="00">
			  <span class="add-on">.00</span>
			</div>
			
			<?php echo validation_errors('<p class="alert-error errors" id="errors" style="padding:5px;">');?>
			<input type="submit" id="submit_form" name="submit" value="Create New Plan" class="btn btn-success" <?php if($add_state==false){echo "style='display:none;'";}?> />
			<input type="submit" id="submit_form2" name="submit" value="Edit Plan" class="btn btn-primary" <?php if($add_state){echo "style='display:none;'";}?>/>
		    </form>
	        </fieldset>
        </div>
        <div class="span4">
        	<fieldset>
			<legend>Current Plans</legend>
			<div style="height:250px;overflow-y:auto;">
			<table class="table table-striped">
			<?php

			//****************************************************************************//
			//create the grey header attribute
			//****************************************************************************//
			foreach($golf_pros as $pro){
			?>
			<tr id="<?php echo $pro->ID_auth_dp; ?>">
				<td>
				<i class="icon-th"></i> <?php echo $pro->name; ?>	
				</td>
				<td>
				<?php echo $pro->duration_multiplier*15; ?> min
				</td>	
				<td>
                <a href="javascript:void(0);" class="btn btn-primary" onclick="prompt_the_pro('<?php echo $pro->ID_auth_dp; ?>','<?php echo $pro->name; ?>','<?php echo $pro->price_description; ?>','<?php echo $pro->short_desc; ?>','<?php echo $pro->long_description; ?>','<?php echo $pro->duration_multiplier; ?>')"><i class="icon-pencil"></i></a>
				</td>
				<td>
                <a href="javascript:void(0);" class="btn btn-danger" onclick="r_the_pro_step_1('<?php echo $pro->ID_auth_dp; ?>',1)"> <i class="icon-remove"></i></a>
				</td>		
			</tr>
			<tr style="display:none;background-color:grey;" id="<?php echo $pro->ID_auth_dp; ?>under">
				<td>
				<b>&nbsp;Remove <?php echo $pro->name; ?> ?</b>
				</td>
				<td>
				<?php echo $pro->duration_multiplier*15; ?> min
				</td>
				<td id="<?php echo $pro->ID_auth_dp; ?>">
                <a href="javascript:void(0);" class="btn btn-success" onclick="r_the_pro_step_2('<?php echo $pro->ID_auth_dp; ?>')"><i class="icon-thumbs-up"></i></a>
				</td>
				<td>
                <a href="javascript:void(0);" class="btn btn-danger" onclick="r_the_pro_step_1('<?php echo $pro->ID_auth_dp; ?>',2)"><i class="icon-remove"></i></a>
				</td>		
			</tr>		

			<?php
			}
			?>
		    </table>
		    </div>
			</fieldset>
	    </div>

		
		
		</fieldset>
		<fieldset>
			<legend>Create Group Appointment</legend>
		<div class="span12 well grouper-holder" style="background-color:#a7d6a8;margin-left:0px;">
			
			<div class="span3"> 
	            <fieldset>
				<legend>Configure Details:</legend>
					Group Appointment Title:<br>
					<input class="input input-large" id="g_apppointment_title" value="Group" readonly="readonly">
					<br>
					Group Appointment Description: 
				    <textarea id="g_appointment_desc">
				    </textarea>
				    Maximum Attendees:
				    <select id="number_people">
				    	<option value="3">3</option>
				    	<option value="4">4</option>
				    	<option value="5">5</option>
				    	<option value="6">6</option>
				    	<option value="7">7</option>
				    	<option value="8">8</option>
				    	<option value="9">9</option>
				    	<option value="10">10</option>
				    	<option value="11">11</option>
				    	<option value="12">12</option>
				    	<option value="13">13</option>
				    	<option value="14">14</option>
				    	<option value="15">15</option>
				    	<option value="16">16</option>
				    	<option value="17">17</option>
				    	<option value="18">18</option>
				    	<option value="19">19</option>
				    	<option value="20">20</option>
				    	<option value="21">21</option>
				    	<option value="22">22</option>
				    	<option value="23">23</option>
				    	<option value="24">24</option>
				    	<option value="25">25</option>
				    	<option value="26">26</option>
				    	<option value="27">27</option>
				    	<option value="28">28</option>
				    	<option value="29">29</option>
				    	<option value="30">30</option>
				    	<option value="31">31</option>
				    	<option value="32">32</option>
				    	<option value="33">33</option>
				    	<option value="34">34</option>
				    	<option value="35">35</option>

				    </select>	
	            </fieldset>
            </div>    
            <div class="span2"> 
	            <fieldset>
				<legend>Configure Day:</legend>
					Choose Date:<br>
					<input class="input input-small" id="start_id">
					<br>
					Start Time: 
				    <div class="input-append bootstrap-timepicker">
		                <input id="timepicker1" type="text" name="start-time" class="input-small">
		                <span class="add-on"><i class="icon-time"></i></span>
		            </div>
		            End Time: 
		            <div class="input-append bootstrap-timepicker">
		                <input id="timepicker2" type="text" name="end-time" class="input-small">
		                <span class="add-on"><i class="icon-time"></i></span>
		            </div>
		            <a href="javascript:void(0)" class="btn btn-success btn-small" id="submit-day">add day <i class="icon icon-arrow-right"></i></a>
	            </fieldset>
            </div>    
             <div class="span3"> 
	            <fieldset>
				<legend>Current Days in Plan:</legend>
					<div id="hold-days-added">
					</div>	
					
	            </fieldset>
            </div>
            <div class="span3"> 
	            <fieldset>
	            	<legend>Pricing Structure:</legend>
	            	 <textarea id="g_price_desc">
				    </textarea>
				    <hr>
				    <a href="javascript:void(0)" onclick="add_group_plan()" id="submit_group" class="btn btn-success">Finalize Group Appointment</a>

	            </fieldset>    
            </div>
              
			
		</div>
		</fieldset>	
		
	</div>
</div>

<!--Modal Window Templates-->
<div class="modal fade hide" id="myModal">
  <div class="modal-header"> <a class="close" data-dismiss="modal">×</a>
    <h3>Confirmation Message:</h3>
  </div>
  <div class="modal-body">
    <h3>Cool! Your changes were saved to the database...</h3>
  </div>
 </div>
<!--<div class="modal fade" id="myModal">
  <div class="modal-header"> <a class="close" data-dismiss="modal">×</a>
    <h3>Add a New Task</h3>
  </div>
  <div class="modal-body">
    <h3>Title:</h3>
    <input type="text" placeholder="Title">
    <h4>Description:</h4>
    <textarea style="width:98%; height:100px;" placeholder="Describe your task..."></textarea>
    <p>Lots of things can go here...</p>
  </div>
  <div class="modal-footer"> <a href="#" class="btn btn-primary">Save Task</a> </div>
</div>-->

<script>
$(document).ready(function() {
  <?php if($show_success=='true'){?>$('#myModal').modal('show');<?php } ?>
  $('#plan_duration').select2();

  $( "#start_id" ).datepicker();
  $('#timepicker1').timepicker('setTime', '9:30 AM');
   $('#timepicker2').timepicker('setTime', '10:00 AM');

   $(document.body).on('click', '#submit-day' ,function()
  	{   var main_date = $('#start_id').val();
  	    var split_date = main_date.split("/");
  	    var new_date = split_date[2] + "-" + split_date[0] + "-" + split_date[1];
  	    //////////////////////////////////////////////////////////////////
  		var start_time = $('#timepicker1').val();
  		start_time_formatted = Date.parseExact(start_time,"hh:mm tt");
  		start_time_formatted = start_time_formatted.toString("HH:mm:ss");
  		////////////////////////////////////////////////////////////////////
  		var end_time = $('#timepicker2').val();
  		end_time_formatted = Date.parseExact(end_time,"hh:mm tt");
  		end_time_formatted = end_time_formatted.addSeconds(-1).toString("HH:mm:ss");

  		var first_d = new_date + " " + start_time_formatted;
  		var last_d = new_date + " " + end_time_formatted;
  		var html_button_inject = '<a href="javascript:void(0)" class="btn btn-mini btn-danger remove-day pull-right" style="margin-top:-10px;"> x </a><br>';

  		$.post("<?php echo base_url();?>index.php/organizer/booking_admin/session_conflict_check", 
         {edit_trigger: <?php echo $this->session->userdata('id_o');?>,
          start_time: first_d, 
          end_time: last_d, 
          iteration_holder: 1},
          function(data){
            if(data == "false"){
              html_hidden = '<div class="start_time_readable hide">' + start_time + '</div><div class="end_time_readable hide">' + end_time + '</div>';
              //it's all good
              var class_good_bad = "good";
              //var html_good_bad = '<span class="alert alert-success"><i class="icon icon-check"></i></span>';
              html_good_bad = "";
              var html_holder = '<div class="single-day-holder well ' + class_good_bad + '"><div class="pull-right">' + html_button_inject + html_good_bad + '</div><span class="machine_start">'+first_d + '</span> <br><i class="icon icon-arrow-down"></i><br> <span class="machine_end">' + last_d + '</span>' + html_hidden + '</div>';
  		      $('#hold-days-added').append(html_holder);
              
            } else {
            //the system found a conflict
              alert('sorry, there is a conflict at this time');
            
            }
        });

  		


  		//$end_advanced_HH_mm_ss = local.addSeconds(-1).toString("HH:mm:ss");
  		//start_time_formatted = start_time_formatted->modify('+1 second');
  	   //alert(new_date);
  	   
  	   

  	});


   
});
    function prompt_the_pro(id,name,price_description,short_desc,long_description,duration_multiplier){
    	$('#plan_name').val(name);
    	$('#price_info').val(price_description);
    	$('#expanded_info').val(short_desc);
    	$('#expanded_info_2').val(long_description);
    	$('#plan_duration').select2("val", duration_multiplier);
    	$('#id_name').val(id);
		$('.errors').hide();
		$('#submit_form').hide();
		$('#submit_form2').show();
		$('form').attr("action","<?php echo base_url();?>index.php/organizer/golf_plans/edit_plan");
		
    }

    function r_the_pro_step_1 (id, direction) {
    	if(direction==1){
    		$('#'+id+'under').show('slow');
    		$('#'+id).hide();
        } else {
        	$('#'+id).show('slow');
    		$('#'+id+'under').hide();
        }
    	
    }

    function r_the_pro_step_2 (id) {
    	$.post("<?php echo base_url();?>index.php/organizer/golf_plans/r_plan", {id_pass: id}, function(data){
			//alert(id);
			//alert(data);
		}, 'text');
		$('#'+id+'under').hide();
    }

    var $final_instructor_id ="<?php echo $this->session->userdata('id_o');?>";
    var $final_instructor_name ="<?php echo $this->session->userdata('first_o'); ?> <?php echo $this->session->userdata('last_o'); ?>";

    function add_group_plan() {
    	var $number_people = $('#number_people').val();
    	var $desc = $('#g_appointment_desc').val();
    	var $title = $('#g_appointment_title').val();
    	var $price = $('#g_price_desc').val();
    	
    	$.post("<?php echo base_url();?>index.php/organizer/golf_plans/create_group_plan", {
    		live: 'no',
    		price_info: $price,
    		plan_name: 'group',
    		expanded_info: $desc,
    		plan_duration: 0,
    		instructor_id: $final_instructor_id,
    		current_booked: 0,
    		cap: $number_people
    		}, function(appointment_id){
    			//alert(appointment_id);
    			$( ".single-day-holder" ).each(function( index ) {
    				
    				var machine_start = $( this ).children(".machine_start").text();
    				var machine_end = $( this ).children(".machine_end").text();
    				var start_time_readable = $( this ).children(".start_time_readable").text();
    				var end_time_readable = $( this ).children(".end_time_readable").text();
    				finalBookApointment(appointment_id, machine_start, machine_end, start_time_readable, end_time_readable, $price);
				  
				});
    		}, 'text');


    }

    function finalBookApointment(appointment_id, machine_start, machine_end, start_time_readable, end_time_readable, price) {
    	//alert('final called');
        $.post("<?php echo base_url();?>index.php/organizer/booking_admin/create_new_appointment", 
            {
                start_bm: machine_start, 
                end_bm: machine_end, 
                trainer_id_bm: $final_instructor_id,
                cust_id_bm: 'na',

                trainer_name_bm: $final_instructor_name, 
                cust_name_bm: 'group', 
                start_readable: start_time_readable,
                end_readable: end_time_readable,
                iteration_holder: 1,

                appointment_type_id: appointment_id, 
                appointment_type_name: 'group', 
                appointment_min: 'na',
                appointment_price_desc: price,
                appointment_type_flag: 'group',
                appointment_email: 'na'
            }, function(data)
            {   //alert(data);
            	console.log(data);
                $('.grouper-holder').append('<h1>Success! Check it out on your Calendar</h1>');

            }, 'text');
            
        }
        
            


</script>    

