<div class="dashRow">
    <div class="row-fluid">
    	<div class="span4">
			<fieldset>
			<legend>Plan Information</legend>
			<?php
			   echo form_open('organizer/golf_plans/add_plan');
			?>
			<input name="plan_name" id="plan_name" placeholder="Plan Name" /><br>
			<textarea name="price_info" id="price_info" placeholder="Short Price Description"></textarea><br>

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
			<textarea name="expanded_info" id="expanded_info" placeholder="Short Plan Description"></textarea><br>
			<textarea name="expanded_info_2" id="expanded_info_2" placeholder="Long Plan Description"></textarea><br>
			<?php echo validation_errors('<p class="alert-error errors" id="errors" style="padding:5px;">');?>
			<input type="submit" id="submit_form" name="submit" value="Create New Plan" class="btn btn-success" <?php if($add_state==false){echo "style='display:none;'";}?> />
			<input type="submit" id="submit_form2" name="submit" value="Edit Plan" class="btn btn-primary" <?php if($add_state){echo "style='display:none;'";}?>/>
		    </form>
	        </fieldset>
        </div>
        <div class="span4">
        	<fieldset>
			<legend>Current Plans</legend>
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
			</fieldset>
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


</script>    

