		<div class="dashTop" style="display:none;">
		        	<div class="dashTopContainer">
		        	<div class="row-fluid">
		            <ul class="thumbnails">
		                <li class="span2">
		                <div class="thumbnail">
		                  <a href="<?php echo base_url();?>index.php/organizer/create_main_event/members_area">
		                  <img alt="thumbnail" src="<?php echo base_url();?>img/thumb-1-temp.jpg">
		                  <h4>Create Event</h4>
		                  </a>
		                </div>
		                </li>
		                <li class="span2">
		                <div class="thumbnail">
                          <a href="<?php echo base_url();?>index.php/organizer/manage_events/members_area">
		                  <img alt="thumbnail" src="<?php echo base_url();?>img/thumb-2-temp.jpg">
		                  <h4>Manage Events</h4>
		                  </a>
		                </div>
		                </li>
		                <li class="span2">
		                <div class="thumbnail">
		                  <a href="<?php echo base_url();?>index.php/organizer/edit_account/members_area">
		                  <img alt="thumbnail" src="<?php echo base_url();?>img/thumb-3-temp.jpg">

		                  <h4>Edit Account Info</h4>
		                  </a>
		                </div>
		                </li>
		                <li class="span2">
		                <div class="thumbnail">
		                  <a href="#myModal" data-toggle="modal">
		                  <img alt="thumbnail" src="<?php echo base_url();?>img/thumb-4-temp.jpg">
		                  <h4>People</h4>
		                  </a>
		                </div>
		                </li>
		                <li class="span2">
		                <div class="thumbnail">
		                  <img alt="thumbnail" src="<?php echo base_url();?>img/thumb-5-temp.jpg">
		                  <h4>Check in/Check out</h4>
		                </div>
		                </li>
		                <li class="span2">
		                <div class="thumbnail">
		                  <a href="<?php echo base_url();?>index.php/organizer/contact/members_area">
		                  <img alt="thumbnail" src="<?php echo base_url();?>img/thumb-6.jpg">
		                  </a>
		                  <h4>Contact CE-Go</h4>
		                </div>
		                </li>
		            </ul>
		            </div>
		            </div>
		        </div>
<?php
//print_r($activity_array);
?>
		        <div class="dashRow">
		            <div class="row-fluid">
		                <div class="span6">
		                    <div class="dashHead">
		                    	<h3 style=""><i class="icon-list-alt"></i> 1<i class="icon-arrow-right"></i> Select the food items you do not want to eat:</h3>
		                    <form action="<?php echo base_url();?>index.php/organizer/dash/members_area" method="post"> 
		                    	<div class="well" style="margin-bottom:0px;">
		                    	<select id="e1" name="add_item" style="width:250px;">
		                    		<optgroup label="">
		                    		<option value="no">Please Select a Food Item...</option>
		                    		<?php 
		                    		$cat_name="no";
		                    		foreach($dropdown_array as $item){
		                    			
		                    			 if ($cat_name!=$item->name_cat){?>
		                    			 </optgroup>
		                    		<optgroup label="<?php echo $item->name_cat;?>">
		                    			
		                    			<?php } ?>
									        
									        <option value="<?php echo $item->ID_auth_f;?>"><?php echo $item->name_f;?></option>
											
										<?php if ($cat_name!=$item->name_cat){?><?php } ?>
										
										<?php
										$cat_name=$item->name_cat; 
										} 

										?>	
									    </select>	
		                    	<button type="submit" name="submit" class="btn"><i class="icon-plus"></i> Add Food</button>
		                    	</div>
		                    </form>
		                    </div>
		                    <div class="dashWidget noPadding">
		                        
		                        <?php foreach($my_no_foods_array as $item){?>
		                        <div class="projectBox">
		                            <img alt="project icon" src="<?php echo base_url();?>img/check_icon.png" />
		                            <h3><?php echo $item->name_f;?></h3><div><strong>category <i class="icon-arrow-right"></i> <?php echo $item->name_cat;?></strong> user generated replacment ideas: 23</div>
		                            
		                                 <div class="pull-right" style=""><a href="javascript:void(0);" style="color:red;"><i class="icon-remove"></i>remove item</a></div>
		                            
		                        </div>
		                        <?php } ?>
		                       
		                    </div>
		                </div>
		                <div class="span6">
		                    <div class="dashHead">
		                    	<h3><i class="icon-book"></i> 2<i class="icon-arrow-right"></i> Search for your customized recipies below:</h3>
		                    <form action="<?php echo base_url();?>index.php/organizer/dash/members_area" method="post"> 
		                    	<div class="well" style="margin-bottom:0px;"><input type="text" placeholder="Search My Modified Recipies" id="search_rec" name="search_rec" style="width:250px;">
		                    	<button type="submit" name="submit" class="btn"><i class="icon-search"></i> Search</button>
		                    	</div>
		                    </form>
		                    </div>
		                    
		                    <div class="dashWidget noPadding">
		                        <?php

		                        foreach($activity_array as $item){

		                        ?>
		                        <div class="message-box">

		                         	

		                            <h5><?php echo $item->Name;?> <span class="label label-info pull-right" style="color:white;"> recipe review: <icon class="icon-star"></i><icon class="icon-star"></i><icon class="icon-star"></i><icon class="icon-star-empty"></i><icon class="icon-star-empty"></i></span></h5>
		                            <p> category <i class="icon-arrow-right"></i> <?php echo $item->Category;?></p>
		                            <div class="well">
		                            <a href="javascript:void(0);" class="btn" onclick="$('#slide<?php echo $item->Auto;?>').slideDown();$(this).hide()"><i class="icon-book"></i> show me this recipe, modified to my needs!</a>
		                            <div style="overflow-x:auto;display:none;" class="search_and_replace" id="slide<?php echo $item->Auto;?>"><?php echo $item->Recipe;?></div>
		                            </div>
		                            
		                        </div>
		                        <?php } ?>

		                    </div>
		                </div>
		            </div>
		        asdf
		        </div>


		    </div> <!-- END view-holder -->
			<footer>
		    	<div class="footer-wrap">
		    	This is the footer
		        </div>
		    </footer>
		</div> <!-- END Layout Center -->

		<!--Modal Window Templates-->
		    <div class="modal fade" id="myModal">
		          <div class="modal-header">
		            <a class="close" data-dismiss="modal">×</a>
		            <h3>Ideas for replacing "<span class="replace_title_modal"></span>" in this recipe!</h3>
		            &nbsp;&nbsp;&nbsp;<i class="icon-wrench"></i> Have an idea that might be a good substite for <span class="replace_title_modal"></span>, <a href="javascript:void(0);" onclick="$('#modal_food_options').slideUp('slow', function() {$('#modal_form_holder').slideDown()})">share it!</a>
		          </div>
		          <div class="modal-body" style="overflow-y:auto;">
		          	<!--start options-->
                    <div id="modal_food_options">
		                        
		                     <?php foreach($temp_subs as $item){?>
		                        <div class="projectBox">
		                            
		                            
		                            <div class="pull-left">
		                            	<h3><img alt="project icon" src="<?php echo base_url();?>img/check_icon.png" style="width:20px;height:20px;"/><?php echo $item->food_sub;?></h3>

		                            	<b>Good substitute when baking?</b> <i class="icon-arrow-right"></i> <?php echo $item->good_sub;?><br>
		                            	<b>old item to new item replacment ratio:</b> <i class="icon-arrow-right"></i> <?php echo $item->original_ratio_sub;?>:<?php echo $item->copy_ratio_sub;?>:<br>
		                            	<b>Best place to find this item?</b> <i class="icon-arrow-right"></i> Your Common Grocery Market<br>

		                            </div>
		                            
		                                 <div class="label label-info pull-right" style="color:white;text-align:left;"> good substitue for <span class="replace_title_modal"></span>?<br><i class="icon-user"></i>'s Think: <icon class="icon-star"></i><icon class="icon-star"></i><icon class="icon-star"></i><icon class="icon-star-empty"></i><icon class="icon-star-empty"></i>
		                                 </div>
		                            
		                        </div>
		                        <?php } ?>
		                       
		                    
                    </div>
		          	<!--end options-->


		          	<!--start form-->
		          	<div id="modal_form_holder" style="display:none;">
		          	The Name of the Food Substitute for <span class="replace_title_modal"></span>:<i class="icon-arrow-down"></i><br>
                   <input type="text" id="food_sub" style="width:100%;" onkeyup="copy_sub_func()">
                   
                   <br>Is this a good substiute for <span class="replace_title_modal"></span> when baking?:<i class="icon-arrow-down"></i><br>
                   <select id="good_sub" style="width:100%;">
                   	<option value="yes">Yes</option>
                   	<option value="no">No</option>
                   	
                   </select>
                   Is there a specific substitution ratio you would recommend?
                   <div class="well">
                   <table style="width:80%;">
                   	<tr>
                   		<td>
                   			Item 1:<i class="icon-arrow-right"></i><span class="replace_title_modal"></span><br>
                   			<select id="original_ratio" style="width:100px;">
			                   	<option value="1">1</option>
			                   	<option value="2">2</option>
		                   		<option value="3">3</option>
		                   		<option value="4">4</option>
		                  	</select>
                   		</td>
                   		<td>
                   			Item 2:<i class="icon-arrow-right"></i><span class="replace_sub_copy"></span><br>
                   			<select id="copy_ratio" style="width:100px;">
			                   	<option value="1">1</option>
			                   	<option value="2">2</option>
			                   	<option value="3">3</option>
		                   		<option value="4">4</option>
		                  	</select>
                   		</td>
                   	</tr>	
                   </table>
                   </div>	
                   <br>
                   Best Place to purchase this subsitute for <span class="replace_title_modal"></span>:<i class="icon-arrow-down"></i><br>
                   <select id="where_find" style="width:100%;">
                   	<option value="1">Common Grocery Market</option>
                   	<option value="2">Speciality Grocery Markets</option>
                   	<option value="3">Health Food Stores</option>
                   	<option value="4">Online</option>
                   </select>

		            
		             <table style="width:80%;">
	                   	<tr>
	                   		<td>
	                   			<a href="javascript:void(0);" onclick="add_replacement_food()" class="btn green-btn">Share this sub for <span class="replace_title_modal"></span> with the WafflesPlease! community</a>
		           
						</td><td>
						<a href="javascript:void(0);" onclick="$('#modal_form_holder').slideUp('slow', function() {$('#modal_food_options').slideDown()})" class="btn red-btn">Go Back</a>
						</td></tr></table>
								       
                    </div>
                    </div>
		          </div>

		    



		   
 
    <script>
    var $track_food_id="";
    var $track_food_name="";

    var $orig_food_id="";

    function add_replacement_food(){
    	$food_sub = $('#food_sub').val();
    	$where_find = $('#where_find').val();
    	$original_ratio = $('#original_ratio').val();
    	$copy_ratio = $('#copy_ratio').val();
		$good_sub = $('#good_sub').val();
    	

    	$.post("<?php echo base_url();?>index.php/organizer/dash/add_sub_item", {orig_food_id: $orig_food_id, food_sub:$food_sub, where_find:$where_find, original_ratio:$original_ratio, copy_ratio:$copy_ratio, good_sub:$good_sub}, function(data){
		alert('called');
		alert(data);
		}, 'text');
    }

    function copy_sub_func(){
    	$copy_var = $('#food_sub').val();
    	$('.replace_sub_copy').text($copy_var);
    }

    function pop_modal_func(thing, id){
    	
    	$('.replace_title_modal').text(thing);
    	$('#myModal').modal('show');
    	//$('#myModal').show();
    	//$('#replyModal').modal('show');
    	//alert('called');
    	$orig_food_id=id;
    	//alert('called');
    }
        $(document).ready(function() { 
        	$("#e1").select2(); 

        	
            var $json_array=<?php echo json_encode($my_no_foods_array);?>;
        	//alert($json_array);
        	//var $json_array_2 = JSON.parse($json_array);
        	//alert($json_array_2);
        	//alert('cat');
        	$.each($json_array, function(key, val) {
        		//alert(val);
        		$.each(val, function(key1, element1) {
        			//alert(key1);
        			
        			if(key1=='ID_auth_f'){$track_food_id = element1;}	
        			if(key1=='name_f'){$track_food_name = element1;}
        			//alert(key1);
        		});
        		//alert($track_food_id);

        		
        		//$('.search_and_replace').html().replace($track_food_name, "<a href='javascript:void(0);' class='btn'>"+ $track_food_name +"</a>");

        		var oldhtml = $('.search_and_replace').html();
        		//
				var newhtml = oldhtml.replace($track_food_name, "<a href='javascript:void(0);' onclick=\"pop_modal_func('"+$track_food_name+"','"+$track_food_id+"')\" class='btn green-btn' style='padding:2px 2px 2px 2px;margin-left:0px;margin-right:0px;'>"+ $track_food_name +" (<i class='icon-arrow-left'></i> sub <i class='icon-folder-open'></i>)</a>");
				//$('.search_and_replace').html(newhtml);
                $track_food_name = $track_food_name.toLowerCase();
				
				var newhtml = newhtml.replace($track_food_name, "<a href='javascript:void(0);' onclick=\"pop_modal_func('"+$track_food_name+"','"+$track_food_id+"')\" class='btn green-btn' style='padding:2px 2px 2px 2px;margin-left:0px;margin-right:0px;'>"+ $track_food_name +" (<i class='icon-arrow-left'></i> sub <i class='icon-folder-open'></i>)</a>");
				$('.search_and_replace').html(newhtml);
        	});
        	//alert($no_food_obj);
        	//var $no_food_length = $no_food_obj[0].length;
        	//alert($no_food_length);
        	//for($i=0;$i<$no_food_obj.length();$i++;){
        		//alert($my_no_foods_array[$i]);
        	//}
        });
    </script>    