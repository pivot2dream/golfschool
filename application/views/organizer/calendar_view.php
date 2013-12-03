<?php
$backer_color='background-color:rgb(245,204,100)';
//end substantiate variables

//this handles background colors
function new_background_color () {
//$backer_color = 'background-color:rgb(245,'.rand(100,230).','.rand(10,100).');';
$backer_color = 'background-color:rgb(0,'.rand(64,204).','.rand(90,255).');';
$backer_color .='background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);-webkit-background-size: 20px 20px;';
return $backer_color;
}
//this ends handling background colors

$track_match_name="";

$number_of_tracks_to_loop = $current_day_info[0][0][4];
?>
       <div class="dashRow">
            <div class="row-fluid">

                <div class="span12">
<?php

//****************************************************************************//
//create the grey header attribute
//****************************************************************************//
foreach($events_passed as $event_passed){
/////////////////////////////////////////////////
//below turns unix timestamp into human readable timestamp & encrypts url passed
//bad form for 'view'? maybe, but only used to format timestamp, and prevents primary array loop in model
/////////////////////////////////////////////////
	$start_date = $this->login_prove_and_common->human_time_custom($event_passed->start_event);
	$end_date = $this->login_prove_and_common->human_time_custom($event_passed->end_event);
	//this gets reused for submitting via the create session modal
	$event_id_for_modal_form = $event_passed->event_id;

	//this is used in the main session submit form
	$form_url_master = $this->login_prove_and_common->encode_common($event_passed->event_id . '***' . $this_day_number_passed);

	$secure_event_id = $this->login_prove_and_common->encode_common($event_passed->event_id);

?>                  <h4 class="pull-right" style="margin-top:-20px;"><span style="color:#2ea6f2;">event starts:</span> <?php echo $start_date;?>&nbsp;&nbsp;<i class="icon-arrow-right"></i>&nbsp;&nbsp;<span style="color:#2ea6f2;">event ends:</span> <?php echo $end_date;?></h4>


                    <h2 class="dashHead"><i class="icon-book"></i> <?php echo $event_passed->event_name;?></h2>

                    <div style="clear:both;"></div>

<?php
}
//****************************************************************************//
//endcreate the grey header attribute
//****************************************************************************//
?>
                    <div class="dashWidget noPadding" style="height: 32px;margin-bottom:0px;overflow-y:hidden;">


                        <div class="projectBox">

                        	<div class="alert" style="margin-top:-20px;">
                        	<?php
//****************************************************************************//
//generate day links
//****************************************************************************//

                        	foreach($day_links_passed as $link_passed)
                        		{



                            	?>
                            	<a href="<?php echo $this->login_prove_and_common->encode_common($event_passed->event_id . '***' . $link_passed[1]);?>" class="btn <?php if($this_day_number_passed!=$link_passed[1]){echo 'small-btn';}?>" <?php if($this_day_number_passed!=$link_passed[1]){echo "style='border-color:white;box-shadow: 0 0 5px #888;'";}?>><?php echo $link_passed[0];?></a>
                            	<?php
                        		}
//****************************************************************************//
//end generate day links
//****************************************************************************//
                        	?>
                        		<div class="pull-right alert" style="margin-top:-16px;">
									<form action="<?php echo $form_url_master;?>" method="post">
														<input type="submit" value="edit number of tracks" class="btn small-btn">
														<select name="track_add_submit" style="width:50px;margin-top:3px;">
															<option value="1" <?php if($number_of_tracks_to_loop=='1'){ echo 'selected="selected"';}?>>1</option>
															<option value="2" <?php if($number_of_tracks_to_loop=='2'){ echo 'selected="selected"';}?>>2</option>
															<option value="3" <?php if($number_of_tracks_to_loop=='3'){ echo 'selected="selected"';}?>>3</option>
															<option value="4" <?php if($number_of_tracks_to_loop=='4'){ echo 'selected="selected"';}?>>4</option>
															<option value="5" <?php if($number_of_tracks_to_loop=='5'){ echo 'selected="selected"';}?>>5</option>
														</select>
														<input type="hidden" value="<?php echo $current_day_info[0][0][1];?>" name="day_num">
														<input type="hidden" value="<?php echo $current_day_info[0][0][3];?>" name="booking_num">
									</form>
								</div>

                        	</div>
                        </div>


                    </div>
               	<div class="dashWidget noPadding" style="height: 35px;margin-bottom:0px;overflow-y:hidden;">
							<div class="projectBox" style="padding-top:0px;">
							<?php
							$td_width_var = 1100 / $number_of_tracks_to_loop;
							?>
							<table style="width:100%;" class="table table-stripped">
							<tr style="width:1170px;background-image:url('<?php echo base_url();?>img/tran_grey_back.png');">
							<!--empty space above left justified times shown-->
							<td style="width:100px;">&nbsp;</td>
							<!--empty space above left justified times shown-->


							<?php
							for($z=1;$z<=$number_of_tracks_to_loop;$z++){
							?>
							<td style="width:<?php echo $td_width_var;?>px;">
								<ul class="nav nav-tabs">
									<li style="width:83.3%;">
									<a href="#myModal" data-toggle="modal" onclick="edit_title_of_track('<?php echo "track".$z;?>','<?php echo $z;?>','<?php echo $current_day_info[0][0][2];?>')" id="<?php echo 'track'.$z;?>"><?php echo $track_names_shown_array->$z;?></a>
								    </li>
								</ul>
							</td>
							<?php
							}
							?>
							</tr>
							</table>
							</div>
						</div>


               <div class="dashWidget noPadding">
                    <div class="projectBox">
<!--start calendar view-->

<table style="width:100%;" class="table table-stripped">


<?php
///////////////////////////////////////////////
//this substantiates the variable that kicks off the start time for the loop
///////////////////////////////////////////////
$time_shown_master = new DateTime('05:30:00');

//****************************************************************************//
//echo through each time interval, for each respective track
//****************************************************************************//
$temp_track_me=0;
$array_duplicate_holder = array();

for($i=0;$i<33;$i++){

		$time_shown_master->modify('+30 minutes');
		$indicator_master = $time_shown_master->format('g:i A');
        $pass_time_master = $time_shown_master->format('H:i:s');
        $indi_square_time =  $current_day_without_time . ' ' . $pass_time_master;


?>
	<tr>
<!--this is the left column that shows the am pm time-->
	<td style="width:100px;height:40px;">
		<?php
			echo $indicator_master;
		?>

	</td>
<!--end is the left column that shows the am pm time-->




<!--echo line item-->
<?php


//below loop through the number of tracks to create tds for each track td.
for($x=1;$x<=$number_of_tracks_to_loop;$x++){

/////////////////////////////////////////////////
//substantiate internal variables
/////////////////////////////////////////////////
$track_master = $indi_square_time;

/////////////////////////////////////////////////
//this indicates whether or not the state is a booked state
$track_trigger = 'no';
/////////////////////////////////////////////////
//this toggles whether or not to show the button, as only one button should be shown per booking
$track_show_but ='yes';
/////////////////////////////////////////////////
$track_appt_id = '';

/////////////////////////////////////////////////
//end substantiate internal variables
/////////////////////////////////////////////////

//****************************************************************************//
//isolate track logic
//****************************************************************************//



foreach($find_bookings_result as $booking_result_item){
    if($booking_result_item->track_sess==$x)
    	{

		if($booking_result_item->end_sess>=$track_master && $booking_result_item->start_sess<=$track_master)
			{   $temp_track_me+=1;

			    //////////////////////////////////////////////////
				$track_trigger = 'yes';
				$track_user_name = $booking_result_item->name_sess;
				$track_appt_id = $booking_result_item->ID_auth_sess;
                //////////////////////////////////////////////////////
				if(in_array('track_back'.$track_appt_id, $array_duplicate_holder))
					{
					$track_show_but ='no';
					}
				//this generates colors
				if($track_show_but=='yes')
					{
					array_push($array_duplicate_holder, 'track_back'.$track_appt_id);
					//$backer_color = new_background_color();
					$backer_color ='background-color:rgb(245,204,100);';
					//$backer_color = 'background-color:rgb(0,'.rand(64,204).','.rand(90,255).');';
					}
				//this ends generates colors

			$track_match_name = $booking_result_item->ID_auth_sess;

			}
		}

}
//****************************************************************************//
//end isolate track logic
//****************************************************************************//


//****************************************************************************//
//isolate track echoed
//****************************************************************************//


if($track_trigger=='no'){?>
<td onmouseover="$(this).children().show()" onmouseout="$(this).children().hide()" style="background-image:url('<?php echo base_url();?>img/table_edger.png');background-repeat:no-repeat;width:<?php echo $td_width_var;?>px;">
<a style="display:none;" href="#myModal3" data-toggle="modal" class="btn green-btn square-btn" onclick="set_origin_modal('<?php echo $current_day_without_time;?> <?php echo $pass_time_master;?>','<?php echo $x;?>')">
	<i class="icon-check"></i> add session or break</a>

</td>
<?php }else{ ?>
<td style="<?php echo $backer_color;?>width:<?php echo $td_width_var;?>px;border-right:1px solid black;cursor:pointer;" class="track_back<?php echo $track_match_name;?>" href="#replyModal" data-toggle="modal" onclick="get_session_details_html('<?php echo $track_match_name;?>')">

<?php if ($track_show_but=='yes'){?>
#ce<?php echo $track_match_name;?>dx5
<!--<a style="width:80%;" href="javascript:void:0;" class="btn blue-btn half-btn" onclick="detail_modal('<?php echo $track_appt_id;?>')"><i class="icon-user"></i> <?php echo $track_user_name?></a>-->
<br><b><?php echo $track_user_name?></b>
<?php } ?>
</td>
<?php
}
//****************************************************************************//
//end isolate track echoed
//****************************************************************************//

//end below 'x' loop through the number of tracks to create tds for each track td.

}
?>
</tr>
<!--end echo line item-->








	<?php


	}
//****************************************************************************//
//end echo through each time interval, for each respective track
//****************************************************************************//
?>
</table>
<!--end calendar view-->

                            <div style="clear:both;"></div>


                		</div>

                	</div>
           		</div>

<!--end container-->
            </div>
        </div>




    </div> <!-- END view-holder -->


</div> <!-- END Layout Center -->

<!--edit name of track-->
    <div class="modal fade" id="myModal">
          <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Edit this Track Name</h3>
          </div>
          <div class="modal-body">
            <h3>Title:</h3>
            <input type="text" placeholder="" id="track_title_input">

            <p><b>What is a track?</b> A track is simply a series of sessions, that share a common theme. While most of you will not need have more than one track, some of you may wish to have multiple sessions occuring simulateously. To add a new track to your event, simply exit this window, and adjust the number of tracks in the drop down menu next to the 'edit number of tracks' button.</p>
          </div>
          <div class="modal-footer">
            <a href="#" onclick="send_title_of_track()" data-dismiss="modal" class="btn btn-primary">Save New Title</a>
          </div>
    </div>
<!--end edit name of track-->

    <div class="modal fade" id="replyModal">
          <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>View Session Details and Actions:</h3>
            note max: this will allow be set up to edit basic session info as well.
          </div>
          <div class="modal-body">
            <table style="width:100%;">
            <tr>
            <td>
            <div id="recieve_html_div" class="well" style="width:300px;">
            </div>
            </td>

            <td>
            <!--link to learning objectives for a specific session, javascript dictates session id as url param-->
            <a href="<?php echo base_url();?>index.php/organizer/learning_obj/members_area" class="btn" id="lo">Add/Edit Learning Objectives</a>

			<!--link to Session Documents for a specific session, javascript dictates session id as url param-->
            <a href="<?php echo base_url();?>index.php/organizer/file_up_sess/members_area" class="btn" id="fus">Session Documents</a>

            <!--link to Messages Dialogue for a specific session, javascript dictates session id as url param-->
            <a href="<?php echo base_url();?>index.php/organizer/messages_sess/members_area" class="btn" id="ms">Session Dialogue</a>

            <form action="<?php echo $form_url_master;?>" method="post">
            <button type="submit" value="" class="btn red-btn" id="remove_sess_me" name="remove_sess_me">Delete This Session</button>
            </form>
            </td>
            </table>
          </div>

    </div>
<!--modal-->
<div id="myModal3" class="modal fade" style="overflow:hidden;width:850px;margin: -395px 0 0 -425px;">
  <form action="<?php echo $form_url_master;?>" method="post">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4>Add a session break, or lunch to <i>"<?php echo $event_passed->event_name;?>"</i> on <span style="font-weight:bold;" id="date_stage_2"></span></h4>
  </div>
  <div class="modal-body">
    <h4 class="pull-right">Check Presenters for Session or <a href="javascript:void(0);" onclick="$('#check_off_presenters').hide();$('#quick_add_pres').show();">Quick Add New Presenter</a></h4>
    <div class="ui-helper-clearfix"></div>
    <div class="row">
      <div class="span well" style="height:199px;width:305px"> <b>title:</b> <br>
        <input type="text" name="session_name" style="width:290px;">
        <br>
        <b>type:</b>
        <br>
        <select name="type_options" style="width:300px;">
          <option value="S">Lecture Session</option>
          <option value="B">Break</option>
          <option value="L">Lunch</option>
        </select>
        <br>
        <br>
        <b>Location (i.e. room name / #):</b> <br>
        <input type="text" name="location" style="width:290px;">
        <br>
      </div>

      <!--hidden add presenter-->
      <div class="span" id="quick_add_pres" style="width:440px;display:none;">
      	<div class="well">
      	<button type="button" class="close pull-right" style="margin-top:-15px;" onclick="$('#check_off_presenters').show();$('#quick_add_pres').hide();" aria-hidden="true">&times;</button>
        	<h4>Presenter Name</h4>
        	<input type="text" name="" style="width:388px;" id="grab_quick_name">
            <br>
            <a class="btn" href="javascript:void(0);" onclick="quick_add_presenter()" id="qsb">Quick Add Presenter</a>
            <div id="load_submit_qsp" style="display:none;">
			            <img src="<?php echo base_url();?>img/tiny_little_loader.gif" />...checking for availability...<img src="img/tiny_little_loader.gif" />
          	</div>

            <hr>
            <center>- or -</center>
            <hr>

            <p>To add a title, bio & picture, or manage other presenter information <a href="<?php echo base_url();?>index.php/organizer/presenters/members_area">Click Here</a>. <i>Note: This will take you away from this page.</i>
            </p>
        </div>
      </div>
      <!--end hidden add presenter-->

      <div class="span" style="width:440px;" id="check_off_presenters">
        <div class="well" style="height:122px;overflow-y:scroll;padding:0;" id="pres-list">
			<ul id="prepend_ul">
          	<?php foreach($master_presenter_list as $item){?>
            <li>
              <label class="checkbox">
                <input type="checkbox" name="presenter_check[]" value="<?php echo $item->presenter_id_pp;?>">
                <?php
                $profile_pic_ref = 'img/org_presenter_pics/'. $item->presenter_id_pp .'.jpg';
				if(file_exists($profile_pic_ref)) {?><img src="<?php echo base_url();?>img/org_presenter_pics/<?php echo $item->presenter_id_pp; ?>.jpg?r=<?php echo rand(); ?>" style="width:20px;height:20px;" /> <?php } else { ?><img src="<?php echo base_url();?>img/avatar-profile.png" style="width:20px;height:20px;" /><?php } ?>

                <?php echo $item->presenter_name_pp;?>
                </label>
            </li>
          	<?php } ?>

          </ul>
        </div>

        <div class="well" style="padding:10px;"> <b>short description:</b><br>
          <textarea name="desc_sess" style="width:390px;"></textarea>
        </div>

      </div>
    </div>
  </div>

  <div class="modal-footer">
    <div class="row">
      <div class="span8" style="max-height:60px;overflow:hidden;">
        <div style="float:left;height:inherit;">
          <span id="start_ref_indicator" class="time-well">7:77 AM</span>
          <span style="margin-top:20px;display:inline-block;float:left"><b>&nbsp;to&nbsp;</b></span>
          <span id="date_ref_indicator" class="time-well">7:77 AM</span> </div>

          <div style="float:left; width:100px;height:60px;"><!--overflow:hidden;-->
            <a href="javascript:void(0);" id="add_fifteen_button" onclick="add_fifteen()" class="btn small-btn" style="width:60px;height:17px;margin:4px 5px 8px 5px !important;">+30 minutes</a>
            <!--<a href="javascript:void(0);" id="grey_plus" class="btn small-btn btn disabled-btn hide" style="width:60px;height:17px;margin:0 5px 8px 5px !important;">+30 minutes</a>-->
            <a href="javascript:void(0);" id="sub_fifteen_button" onclick="sub_fifteen()" class="btn small-btn" style="width:60px;height:17px;margin:0 5px 8px 5px !important;">-30 minutes</a>
            <!--<a href="javascript:void(0);" id="grey_minus" class="btn small-btn btn disabled-btn" style="width:60px;height:17px;margin:0 5px 8px 5px !important;">-30 minutes</a>-->
          </div>

          <div id="load_submit" style="display:none;">
            <img src="<?php echo base_url();?>img/tiny_little_loader.gif" />...checking for availability...<img src="img/tiny_little_loader.gif" />
          </div>

          <div id="no_submit" class="alert alert-warning" style="width:250px;float:right;display:none;">this session now conflicts with an existing session, please substract time. </div>

          <div id="ok_submit" style="padding-top:5px;">
            <button type="submit" class="btn xlarge-btn green-btn" value="doit" name="submitter"> <i class="icon-arrow-up"></i> Create This Session Now! </button>
            <input type="hidden" value="<?php echo $event_id_for_modal_form;?>" id="" name="booking_ref">
			<input type="hidden" id="date_first_indicator" value="2012-07-24 06:00:00" name="end_submit">
			<input type="hidden" id="primary_date_passed" value="2012-07-24 06:00:00" name="start_submit">
			<input type="hidden" id="track_to_insert_val" value="1" name="track_to_insert_val">
         </div>
      </div>
      <!--span8-->
    </div>
  </div>
  </form>
</div>
<!--end modal-->

<!-- example modal-->
    <!--add back hide to below class-->
	<div id="myModal7" class="modal fade" style="width:850px;margin: -395px 0 0 -425px;">
	<form action="<?php echo $form_url_master;?>" method="post">
	<div class="modal-header">
				  <a class="close" data-dismiss="modal">×</a>
				  Add a session or break to <i>"<?php echo $event_passed->event_name;?>"</i> on <span style="font-weight:bold;" id="date_stage_2"></span>
				</div>
				<div class="modal-body" style="height:300px;">



	<!--start stage two holder-->
	<div id="stage_2_holder">

	<table style="width:95%;">
	<tr><td style="width:50%;">

	<div id="name_stage_2" class="well" style="padding:0px 0px 25px 0px;">
	<div class="projectBox">
	<b>title:</b><br>
	<input type="text" name="session_name">
	</div>
	<div class="projectBox">
	<b>type:</b><br>
	<select name="type_options" style="width:220px;" name="select_location_passed">
	<option value="S">Lecture Session</option>
	<option value="B">Break</option>
	<option value="L">Lunch</option>
	</select>
	</div>
	<div class="projectBox">
	<b>Location (i.e. room name / #):</b><br>
	<input type="text" name="location">
	</div>
	</div>
	</td>
	<td>&nbsp;&nbsp;&nbsp;</td>
	<td style="width:50%;">
	<?php



	?>
    <b>Check Presenters for Session or</b> <a href="<?php echo base_url();?>index.php/organizer/presenters/members_area"><b>Add Presenters to Account</b></a>
	<div class="well" style="padding:0px 0px 0px 0px;overflow-y:scroll;height:125px;">
	<table style="width:100%;">
<?php foreach($master_presenter_list as $item){?>
	<tr class="projectBox">
	<td style="width:05%;"><input type="checkbox" name="presenter_check[]" value="<?php echo $item->presenter_id_pp;?>"></td>

	<td style="width:10%;">
	<?php
	$profile_pic_ref = 'img/org_presenter_pics/'. $item->presenter_id_pp .'.jpg';
	if (file_exists($profile_pic_ref)) {?><img src="<?php echo base_url();?>img/org_presenter_pics/<?php echo $item->presenter_id_pp; ?>.jpg?r=<?php echo rand(); ?>" style="width:20px;height:20px;" /> <?php } else { ?><img src="<?php echo base_url();?>img/avatar-profile.png" style="width:20px;height:20px;" /><?php } ?>
	</td>
	<td>
	<?php echo $item->presenter_name_pp;?>
	</td></tr>
<?php } ?>
	</table>
	</div>

	<div class="well">
	<b>short description:</b><br>
	<textarea name="desc_sess"style="width:300px;"></textarea>
	</div>
	</td>
	</table>


	</div>
	<!--end stage two holder-->
				</div>

				<div class="modal-footer">
				  <table><tr><td>
				  	            <div id="start_ref_indicator" class="well" style="font-size:2.0em;"></div></td>
				  	            <td><b> to </b></td>
				  	            <td><div id="date_ref_indicator" class="well" style="font-size:2.0em;"></div></td><td><a href="javascript:void(0);" id="add_fifteen_button" onclick="add_fifteen()" class="btn small-btn">+30 minutes</a><br><a href="javascript:void(0);" id="sub_fifteen_button" onclick="sub_fifteen()" class="btn small-btn">-30 minutes</a><br><br><br></td>
				  	            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				  	            <td>
				  	            <div id="load_submit" style="display:none;">
				  	            <img src="<?php echo base_url();?>img/tiny_little_loader.gif" />...checking for availability...<img src="<?php echo base_url();?>img/tiny_little_loader.gif" />
				  	            </div>
				  	            <div id="no_submit" class="alert alert-warning" style="width:250px;display:none;">this session now conflicts with an existing session, please substract time.</div>
				  	            <div id="ok_submit">
				  	            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	            <button type="submit" class="btn xlarge-btn green-btn" value="doit" name="submitter"><i class="icon-arrow-up"></i> Create This Session Now!</button>
				  	            </div>
				  	            </td>
	            </tr></table>
	             <input type="hidden" value="<?php echo $event_id_for_modal_form;?>" id="" name="booking_ref">

								<input type="hidden" id="date_first_indicator" value="2012-07-24 06:00:00" name="end_submit">
					            <input type="hidden" id="primary_date_passed" value="2012-07-24 06:00:00" name="start_submit">
					            <input type="hidden" id="track_to_insert_val" value="1" name="track_to_insert_val">


				</div>
			     </form>
			  </div>

<!-- end example modal-->
<script>

/////////////////////////////////////////////
//add border to bottom if session has ended
////////////////////////////////////////////
$(document).ready(function() {


<?php
foreach($array_duplicate_holder as $id_ref){
?>
$('td.<?php echo $id_ref;?>:last').css('border-bottom', '1px solid black');
<?php
}
?>
});


/////////////////////////////////////////////////////////
//master var for track checked against for availability
////////////////////////////////////////////////////////
var master_track_ref;

/////////////////////////////////////
//recieves start date, track
////////////////////////////////////
function set_origin_modal(asdf,x){
		$primary_date_passed = Date.parseExact(asdf,"yyyy-MM-dd HH:mm:ss");
		$('#primary_date_passed').val($primary_date_passed.toString("yyyy-MM-dd HH:mm:ss"));

		//alert(asdf);

		$('#date_first_indicator').val(asdf);
		$('#track_to_insert_val').val(x);
		master_track_ref=x;
		//alert(asdf);
		$('#start_ref_indicator').text($primary_date_passed.toString("h:mm tt"));
		$('#date_stage_2').text($primary_date_passed.toString("MM-dd-yyyy"));

		add_fifteen();
		//$('#myModal3').show();
		//$('#myModal').toggle();
		}


//can probably get rid of this function
function hideModal3(){

		$('#myModal3').toggle();
		}

function add_fifteen(){


		$parse_me = $('#date_first_indicator').val();


		$result_parse = Date.parseExact($parse_me,"yyyy-MM-dd HH:mm:ss");
		$result_parse_2 = $result_parse.addMinutes(30);
		$string_of_parsed_ref  = $result_parse_2.toString("yyyy-MM-dd HH:mm:ss");
		$string_of_parsed_shown  = $result_parse_2.toString("h:mm tt");

		$('#date_ref_indicator').text($string_of_parsed_shown);
		$('#date_first_indicator').val($string_of_parsed_ref);
        //alert($string_of_parsed_ref);
        check_out_of_bounds('30','grey_plus');
		}

function sub_fifteen(){

		$parse_me = $('#date_first_indicator').val();


		$result_parse = Date.parseExact($parse_me,"yyyy-MM-dd HH:mm:ss");
		$result_parse_2 = $result_parse.addMinutes(-30);
		$string_of_parsed_ref  = $result_parse_2.toString("yyyy-MM-dd HH:mm:ss");
		$string_of_parsed_shown  = $result_parse_2.toString("h:mm tt");

		$('#date_ref_indicator').text($string_of_parsed_shown);
		$('#date_first_indicator').val($string_of_parsed_ref);

		check_out_of_bounds('30','grey_minus');
		}

/////////////////////////////////////////////////////////////////////////////////////////
//this handles making add and minus buttons appear and disappear + checking for conflicts
//the processes in this function do not affect the actual data passed, just check for conflicts dynamically
/////////////////////////////////////////////////////////////////////////////////////////
	function check_out_of_bounds(plus_or_minus,hide_me_but) {

        //load graphic show
        $('#ok_submit').hide();
        $('#no_submit').hide();
        $('#load_submit').show();
		$parse_me_check = $('#primary_date_passed').val();
		$parse_me_check_object = Date.parseExact($parse_me_check,"yyyy-MM-dd HH:mm:ss");
		$result_parse_check_1 = $parse_me_check_object.addMinutes(plus_or_minus);
		$result_parse_check_2 = $result_parse_2;
		//alert($result_parse_check_1.toString("h:mm tt"));
		//alert($result_parse_check_2.toString("h:mm tt"));

		//this checks for 15 minute deal
		if($result_parse_check_1.toString("h:mm tt")==$result_parse_check_2.toString("h:mm tt"))
				{$('#sub_fifteen_button').hide();}else{$('#sub_fifteen_button').show();}
        //this checks for greater than 10:45

        if($result_parse_check_2.toString("h:mm tt")=='11:00 PM')
        {$('#add_fifteen_button').hide();}else{$('#add_fifteen_button').show();}

		/////////////////////////////////////
		//check for appointment conflicts
		//////////////////////////////////
		$result_parse_check_1 = $parse_me_check_object.addMinutes(-30);
		$starter_thrown = $result_parse_check_1.toString("yyyy-MM-dd HH:mm:ss");
		$result_parse_check_2 = $result_parse_check_2.addSeconds(-1);
		$ender_thrown = $result_parse_check_2.toString("yyyy-MM-dd HH:mm:ss");
		//alert($starter_thrown);
		//alert($ender_thrown);
		$.post("<?php echo base_url();?>index.php/organizer/calendar_view/check_session_conflict", {start_time: $starter_thrown, end_time: $ender_thrown,edit_trigger:'<?php echo $event_id_for_modal_form;?>',track_ref:master_track_ref}, function(data){
        			$('#load_submit').hide();

                    //alert(data + '1');
                    //var data = new String(data);

					var switcher = data+'1';
					if(switcher=='false1'){

					$('#ok_submit').show('fast');
					$('#load_submit').hide();
					//$('#'+hide_me_but).hide();

					}
					if(switcher=='true1')
					{
					$('#no_submit').show('fast');
					$('#load_submit').hide();
					//$('#'+hide_me_but).show();
					}


									}, 'json');

		}

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //two funcs below handle changing track title, with function one handling setting up info for open modal, and function two sending new track name
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        var $master_track_title_num = "";
        var $master_track_title_day = "";

		function edit_title_of_track(track_ref,track_num,day_num)
			{

			$master_track_title_num = track_num;
			$master_track_title_day = day_num;

			$('#track_title_input').val($('#'+track_ref).text());
			}

		function send_title_of_track()
			{
			//alert('d');
			var new_title = $('#track_title_input').val();
			$('#track'+$master_track_title_num).text($('#track_title_input').val());

			$.post("<?php echo base_url();?>index.php/organizer/calendar_view/update_track_title", {title_day: $master_track_title_day, title_num: $master_track_title_num, new_title: new_title}, function(data){}, 'json');

			}

		function get_session_details_html(pass)
			{
			//alert(pass);
			$('#recieve_html_div').html($('#load_submit').html());
			$('#remove_sess_me').val(pass);
			/////////////////////////////////////////
			//append links in modal
			////////////////////////////////////////
			$('#lo').attr('href','<?php echo base_url();?>index.php/organizer/learning_obj/members_area/<?php echo $form_url_master;?>/ce'+pass+'dx5');
			$('#fus').attr('href','<?php echo base_url();?>index.php/organizer/file_up_sess/members_area/<?php echo $form_url_master;?>/ce'+pass+'dx5');
			$('#ms').attr('href','<?php echo base_url();?>index.php/organizer/messages_sess/members_area/<?php echo $form_url_master;?>/ce'+pass+'dx5');
			$.post("<?php echo base_url();?>index.php/organizer/calendar_view/get_session_html", {passed: pass}, function(data){
			//alert(data);
			$('#recieve_html_div').html(data);
			}, 'html');
			}

		function quick_add_presenter()
			{
			$('#load_submit_qsp').show();
			$('#qsb').hide();
			$insert_namer = $('#grab_quick_name').val();
			$.post("<?php echo base_url();?>index.php/organizer/calendar_view/quick_create_presenter_pass", {name: $insert_namer, comp: '<?php echo $this->session->userdata('company_o_id');?>'}, function(data){

			 $('#prepend_ul').prepend('<li><label class="checkbox"><input type="checkbox" name="presenter_check[]" value="'+ data +'"><img src="<?php echo base_url();?>img/avatar-profile.png" style="width:20px;height:20px;" /> '+$insert_namer+'</label></li>');
            $('#load_submit_qsp').hide();
			$('#qsb').show();
			$('#grab_quick_name').val('');
			$('#check_off_presenters').show();
			$('#quick_add_pres').hide();

            }, 'html');
			}


</script>

