

<div class="dashRow">
    <div class="row-fluid">
        <div class="span12">
           asdf
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