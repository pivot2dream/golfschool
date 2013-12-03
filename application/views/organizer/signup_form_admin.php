<div class="dashRow">
    <div class="row-fluid">
    	<div class="span4">
			<fieldset>
			<legend>Personal Information</legend>
			<?php
			   //echo form_open('organizer/dash/add_admin');
			?>
			<form method="post" action="<?php echo base_url();?>index.php/organizer/dash/add_admin" enctype="multipart/form-data" />
			<input name="first_name" id="first_name" placeholder="First Name"/><br>
			<input name="last_name" id="last_name" placeholder="Last Name"/><br>
			<input name="email_address" id="email_address" placeholder="Email"/>
			<input name="id_name" id="id_name" type="hidden" value="false"/>
			<textarea name="expanded_info" id="expanded_info" placeholder="Bio for Instructor"></textarea>
			</fieldset>
        </div>
        <div class="span4">
			<fieldset>
			<legend>Login Info</legend>
			<input id="imgInp" name="userfile" type="file"><br>
			<div class="img-polaroid">
			<img src="<?php echo base_url();?>img/thumb-3-temp.jpg" id="imgPrevQuestion" style="width:30%;" class="pull-right">
			</div>
			<input name="pssword" id="password" placeholder="Password"/><br>
			<input name="password2" id="password2" placeholder="Password Confirm"/><br>
			<?php echo validation_errors('<p class="alert-error errors" id="errors" style="padding:5px;">');?>
			<input type="submit" id="submit_form" name="submit" value="Create New Account" class="btn btn-success" <?php if($add_state==false){echo "style='display:none;'";}?> />
			<input type="submit" id="submit_form2" name="submit" value="Edit Account" class="btn btn-primary" <?php if($add_state){echo "style='display:none;'";}?>/>
		    </form>
	        </fieldset>
        </div>
        <div class="span4">
        	<fieldset>
			<legend>Current Admins</legend>
			<table class="table table-striped">
			<?php

			//****************************************************************************//
			//create the grey header attribute
			//****************************************************************************//
			foreach($golf_pros as $pro){
			?>
			<tr id="<?php echo $pro->ID_auth_t; ?>">
				<td>
				<i class="icon-user"></i> <?php echo $pro->first_name_t; ?>	
				</td>
				<td>
				<?php echo $pro->last_name_t; ?>
				</td>
				<td>
                <a href="javascript:void(0);" class="btn btn-primary" onclick="prompt_the_pro('<?php echo $pro->first_name_t; ?>','<?php echo $pro->last_name_t; ?>','<?php echo $pro->email_name_t; ?>','<?php echo $pro->ID_auth_t; ?>','<?php echo $pro->notes_t; ?>','<?php echo $pro->loc_1_t; ?>')"><i class="icon-pencil"></i></a>
				</td>
				<td>
                <a href="javascript:void(0);" class="btn btn-danger" onclick="r_the_pro_step_1('<?php echo $pro->ID_auth_t; ?>',1)" <?php if($this->session->userdata('id_o')==$pro->ID_auth_t){echo "style='display:none;'";}?> ><i class="icon-remove"></i></a>
				</td>		
			</tr>
			<tr style="display:none;background-color:grey;" id="<?php echo $pro->ID_auth_t; ?>under">
				<td>
				<b>&nbsp;Remove <?php echo $pro->first_name_t; ?> ?</b>
				</td>
				<td>
				&nbsp;
				</td>
				<td id="<?php echo $pro->ID_auth_t; ?>">
                <a href="javascript:void(0);" class="btn btn-success" onclick="r_the_pro_step_2('<?php echo $pro->ID_auth_t; ?>')"><i class="icon-thumbs-up"></i></a>
				</td>
				<td>
                <a href="javascript:void(0);" class="btn btn-danger" onclick="r_the_pro_step_1('<?php echo $pro->ID_auth_t; ?>',2)"><i class="icon-remove"></i></a>
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
});
    function prompt_the_pro(first,last,email_spec,id,expanded_info,img_url){
    	$('#first_name').val(first);
    	$('#last_name').val(last);
    	$('#email_address').val(email_spec);
    	$('#expanded_info').val(expanded_info);
    	$('#id_name').val(id);
		$('#password').val('');
		$('#password2').val('');
		$('.errors').hide();
		$('#submit_form').hide();
		$('#submit_form2').show();
		$('#imgPrevQuestion').attr('src','<?php echo base_url();?>img/' + img_url);
		$('form').attr("action","<?php echo base_url();?>index.php/organizer/dash/edit_admin");
    	

    	//$.post("<?php echo base_url();?>index.php/organizer/dash/add_sub_item", {orig_food_id: $orig_food_id, food_sub:$food_sub, where_find:$where_find, original_ratio:$original_ratio, copy_ratio:$copy_ratio, good_sub:$good_sub}, function(data){
		//alert('called');
		//alert(data);
		//}, 'text');
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
    	$.post("<?php echo base_url();?>index.php/organizer/dash/r_pro", {id_pass: id}, function(data){
			alert('called');
			alert(data);
		}, 'text');
		$('#'+id+'under').hide();
    }

    function readImageURL(input, img_preview)
  	{
    	if (input.files && input.files[0])
    	{
        	var reader = new FileReader();

        	reader.onload = function (e)
        	{
            	$( img_preview ).attr('src', e.target.result);
        	}

        	reader.readAsDataURL(input.files[0]);
    	}
  	}

  	$(document.body).on('change', '#imgInp' ,function()
  	{ 
    	readImageURL(this, '#imgPrevQuestion');
    	
  	});


</script>    

