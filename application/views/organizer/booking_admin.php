<div class="dashRow">
      <div class="row-fluid">
        <div class="span12">
          
          <!--start-->
           
            <div id="container_chart" class="span4 defeat-the-span" style="margin-left:0px;margin-right:0px;">
            <h3>My Appointments and Bookings</h3>
            <hr>
            <i>showing one-on-one appointment bookings from <br><b><?php echo $weekdays[0][0];?>, <?php echo $weekdays[0][1];?></b> through <b><?php echo $weekdays[6][0];?>, <?php echo $weekdays[6][1];?></b></i>
            <div class="pull-left">
            <a href="<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $date_go_back;?>" class="btn btn-small btn-info">- 1 week</a>&nbsp;&nbsp;
            <a href="<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $date_go_forward;?>" class="btn btn-small btn-info">+ 1 week</a>
            </div>
            </div>
            <div class="span4 defeat-the-span" style="margin-left:0px;margin-right:0px;">
                <h3>Jump to a Date</h3>
                <hr>
                <input type="text" placeholder="MM" id="MM" style="width:25px;">/<input type="text" style="width:25px;" id="DD" placeholder="DD">/<input type="text" style="width:40px;" id="YYYY" placeholder="YYYY">
                <br>
                <a href="javascript:void(0)" class="btn btn-small btn-info" id="jump_date_button">Jump to Date Above</a>
            </div>  
            <div class="span4 defeat-the-span" style="margin-left:0px;margin-right:0px;">
              <form action="<?php echo base_url();?>index.php/organizer/booking_admin/today" method="post">
                <h3>Settings</h3>
                <hr>
                <div class="pull-left">
                  <div class="input-append bootstrap-timepicker">
                    <input id="timepicker1" type="text" name="start-time" class="input-small">
                    <span class="add-on"><i class="icon-time"></i></span>
                  </div>
                  <div class="input-append bootstrap-timepicker">
                    <input id="timepicker2" type="text" name="end-time" class="input-small">
                    <span class="add-on"><i class="icon-time"></i></span>
                  </div>
                </div>
                <div class="pull-right">
                  <select class="input input-medium" name="inc">
                    <option value="15" <?php if($minute_incriment_saved=='15'){echo "selected=selected";}?> >15 min incriments</option>
                    <option value="30" <?php if($minute_incriment_saved=='30'){echo "selected=selected";}?> >30 min incriments</option>
                    <option value="45" <?php if($minute_incriment_saved=='45'){echo "selected=selected";}?> >45 min incriments</option>
                    <option value="60" <?php if($minute_incriment_saved=='60'){echo "selected=selected";}?> >60 min incriments</option>  
                  </select><br>
                  <input type="submit" name="submit" value="Update Settings" class="btn btn-small btn-info">
                </div>  
              </form>
            </div>  

            <div class="well" style="margin-left:0px;background-image:url('../images/accordian_backer.png');">

            <table style="width:100%;" style="background-color:#fff;" class="table table-striped">
            <tr style="background-color:#fff;">
              <th>&nbsp;</th><th><span class="rotate-day"><?php echo $weekdays[0][0]?></span><br><?php echo $weekdays[0][1]?></th>
              <th><span class="rotate-day"><?php echo $weekdays[1][0]?></span><br><?php echo $weekdays[1][1]?></th>
              <th><span class="rotate-day"><?php echo $weekdays[2][0]?></span><br><?php echo $weekdays[2][1]?></th>
              <th><span class="rotate-day"><?php echo $weekdays[3][0]?></span><br><?php echo $weekdays[3][1]?></th>
              <th><span class="rotate-day"><?php echo $weekdays[4][0]?></span><br><?php echo $weekdays[4][1]?></th>
              <th><span class="rotate-day"><?php echo $weekdays[5][0]?></span><br><?php echo $weekdays[5][1]?></th>
              <th><span class="rotate-day"><?php echo $weekdays[6][0]?></span><br><?php echo $weekdays[6][1]?></th>
            </tr>
            <?php
            
            //instantiate variables
            $monday_match_name='null';
            $tuesday_match_name='null';
            $wednesday_match_name='null';
            $thursday_match_name='null';
            $friday_match_name='null';
            $saturday_match_name='null';
            $sunday_match_name='null';
  

            $backer_color='background-color:rgb(245,204,100)';
            //end instantiate variables

            //this handles background colors
            function new_background_color () {
            //$backer_color = 'background-color:rgb(245,'.rand(100,230).','.rand(10,100).')';
            $backer_color = 'background-color:rgb('.rand(240,250).','.rand(100,230).','.rand(10,100).')';
            return $backer_color;
            }
            //this ends handling background colors

            
            ///////////////////////////////////////////////////////////////////////////////
            //start for loop to build out table
            ///////////////////////////////////////////////////////////////////////////////
            for($i=0;$i<$number_of_td_iterations;$i++){
            $date_shown_master->modify('+'. $minute_incriment_saved .' minutes');

            //////////////////////////////////////////////////////////////////////////////
            //isolate monday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_mon->modify('+'. $minute_incriment_saved .' minutes');
            $monday_master = $date_shown_mon->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $monday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $monday_show_but ='yes';
            $monday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){


              if($prev_indexed[$z][2]>=$monday_master && $prev_indexed[$z][1]<=$monday_master){
                $monday_trigger = 'yes';
                $monday_user_name = $prev_indexed[$z][3];
                $monday_appt_id = $prev_indexed[$z][0];
                $monday_appt_type = $prev_indexed[$z][4];

                if($monday_match_name == $prev_indexed[$z][0]){
                  $monday_show_but ='no';
                }
                //this generates colors
                if($monday_show_but=='yes'){
                $backer_color = new_background_color();

                }
                //this ends generates colors

                $monday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate monday
            //////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////
            //isolate tuesday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_tues->modify('+'. $minute_incriment_saved .' minutes');
            $tuesday_master = $date_shown_tues->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $tuesday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $tuesday_show_but ='yes';
            $tuesday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){


              if($prev_indexed[$z][2]>=$tuesday_master && $prev_indexed[$z][1]<=$tuesday_master){
                $tuesday_trigger = 'yes';
                $tuesday_user_name = $prev_indexed[$z][3];
                $tuesday_appt_id = $prev_indexed[$z][0];
                $tuesday_appt_type = $prev_indexed[$z][4];

                if($tuesday_match_name == $prev_indexed[$z][0]){
                  $tuesday_show_but ='no';
                }
                //this generates colors
                if($tuesday_show_but=='yes'){
                $tuesday_backer_color = new_background_color();

                }
                //this ends generates colors

                $tuesday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate tuesday
            //////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////
            //isolate wednesday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_weds->modify('+'. $minute_incriment_saved .' minutes');
            $wednesday_master = $date_shown_weds->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $wednesday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $wednesday_show_but ='yes';
            $wednesday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){

              if($prev_indexed[$z][2]>=$wednesday_master && $prev_indexed[$z][1]<=$wednesday_master){

                $wednesday_trigger = 'yes';
                $wednesday_user_name = $prev_indexed[$z][3];
                $wednesday_appt_id = $prev_indexed[$z][0];
                $wednesday_appt_type = $prev_indexed[$z][4];

                if($wednesday_match_name == $prev_indexed[$z][0]){
                  $wednesday_show_but ='no';
                }
                //this generates colors
                if($wednesday_show_but=='yes'){
                $wednesday_backer_color = new_background_color();

                }
                //this ends generates colors

                $wednesday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate wednesday
            //////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////
            //isolate thursday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_thurs->modify('+'. $minute_incriment_saved .' minutes');
            $thursday_master = $date_shown_thurs->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $thursday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $thursday_show_but ='yes';
            $thursday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){


              if($prev_indexed[$z][2]>=$thursday_master && $prev_indexed[$z][1]<=$thursday_master){
                $thursday_trigger = 'yes';
                $thursday_user_name = $prev_indexed[$z][3];
                $thursday_appt_id = $prev_indexed[$z][0];
                $thursday_appt_type = $prev_indexed[$z][4];

                if($thursday_match_name == $prev_indexed[$z][0]){
                  $thursday_show_but ='no';
                }
                //this generates colors
                if($thursday_show_but=='yes'){
                $thursday_backer_color = new_background_color();

                }
                //this ends generates colors

                $thursday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate thursday
            //////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////
            //isolate friday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_fri->modify('+'. $minute_incriment_saved .' minutes');
            $friday_master = $date_shown_fri->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $friday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $friday_show_but ='yes';
            $friday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){


              if($prev_indexed[$z][2]>=$friday_master && $prev_indexed[$z][1]<=$friday_master){
                $friday_trigger = 'yes';
                $friday_user_name = $prev_indexed[$z][3];
                $friday_appt_id = $prev_indexed[$z][0];
                $friday_appt_type = $prev_indexed[$z][4];

                if($friday_match_name == $prev_indexed[$z][0]){
                  $friday_show_but ='no';
                }
                //this generates colors
                if($friday_show_but=='yes'){
                $friday_backer_color = new_background_color();

                }
                //this ends generates colors

                $friday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate friday
            //////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////
            //isolate saturday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_sat->modify('+'. $minute_incriment_saved .' minutes');
            $saturday_master = $date_shown_sat->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $saturday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $saturday_show_but ='yes';
            $saturday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){


              if($prev_indexed[$z][2]>=$saturday_master && $prev_indexed[$z][1]<=$saturday_master){
                $saturday_trigger = 'yes';
                $saturday_user_name = $prev_indexed[$z][3];
                $saturday_appt_id = $prev_indexed[$z][0];
                $saturday_appt_type = $prev_indexed[$z][4];

                if($saturday_match_name == $prev_indexed[$z][0]){
                  $saturday_show_but ='no';
                }
                //this generates colors
                if($saturday_show_but=='yes'){
                $saturday_backer_color = new_background_color();

                }
                //this ends generates colors

                $saturday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate saturday
            //////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////
            //isolate sunday
            /////////////////////////////////////////////////////////////////////////////
            $date_shown_sun->modify('+'. $minute_incriment_saved .' minutes');
            $sunday_master = $date_shown_sun->format('Y-m-d H:i:s');

            //this indicates whether or not the state is a booked state
            $sunday_trigger = 'no';
            //this toggles whether or not to show the button, as only one button should be shown per booking
            $sunday_show_but ='yes';
            $sunday_appt_id = '';

            for($z=0;$z<sizeof($prev_indexed);$z++){


              if($prev_indexed[$z][2]>=$sunday_master && $prev_indexed[$z][1]<=$sunday_master){
                $sunday_trigger = 'yes';
                $sunday_user_name = $prev_indexed[$z][3];
                $sunday_appt_id = $prev_indexed[$z][0];
                $sunday_appt_type = $prev_indexed[$z][4];

                if($sunday_match_name == $prev_indexed[$z][0]){
                  $sunday_show_but ='no';
                }
                //this generates colors
                if($sunday_show_but=='yes'){
                $sunday_backer_color = new_background_color();

                }
                //this ends generates colors

                $sunday_match_name = $prev_indexed[$z][0];

              }

            }
            ////////////////////////////////////////////////////////////////////////////////////
            //end isolate sunday
            //////////////////////////////////////////////////////////////////////////////////




            ?>
            <tr><td style="width:10px;"><span class="rotate-time"><?php echo $date_shown_master->format('g:i A');?></span></td>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate monday echoed
            ////////////////////////////////////////////////////////////////////////////////
            
            if($monday_trigger=='no'){?>
            <td>
            <a href="javascript:void:0;" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $monday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $backer_color;?>" class="<?php echo $monday_appt_type;?>">
            <?php if ($monday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $monday_appt_type;?>" data-id="<?php echo $monday_appt_id;?>">
                <?php if ($monday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $monday_user_name?></span>
                <?php } if ($monday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate monday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate tuesday echoed
            ////////////////////////////////////////////////////////////////////////////////
            if($tuesday_trigger=='no'){?>
            <td>
            <a href="javascript:void:0;" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $tuesday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $tuesday_backer_color;?>" class="<?php echo $tuesday_appt_type;?>">
            <?php if ($tuesday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $tuesday_appt_type;?>" data-id="<?php echo $tuesday_appt_id;?>">
              <?php if ($tuesday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $tuesday_user_name?></span>
                <?php } if ($tuesday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate tuesday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate wednesday echoed
            ////////////////////////////////////////////////////////////////////////////////
            if($wednesday_trigger=='no'){?>
            <td>
            <a href="javascript:void:0;" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $wednesday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $wednesday_backer_color;?>" class="<?php echo $wednesday_appt_type;?>">
            <?php if ($wednesday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $wednesday_appt_type;?>" data-id="<?php echo $wednesday_appt_id;?>">
                <?php if ($wednesday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $wednesday_user_name?></span>
                <?php } if ($wednesday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate wednesday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate thursday echoed
            ////////////////////////////////////////////////////////////////////////////////
            if($thursday_trigger=='no'){?>
            <td>
            <a href="javascript:void:0;" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $thursday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $thursday_backer_color;?>" class="<?php echo $thursday_appt_type;?>">
            <?php if ($thursday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $thursday_appt_type;?>" data-id="<?php echo $thursday_appt_id;?>">
                <?php if ($thursday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $thursday_user_name?></span>
                <?php } if ($thursday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate thursday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate friday echoed
            ////////////////////////////////////////////////////////////////////////////////
            if($friday_trigger=='no'){?>
            <td>
            <a href="javascript:void:0;" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $friday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $friday_backer_color;?>" class="<?php echo $friday_appt_type;?>">
            <?php if ($friday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $friday_appt_type;?>" data-id="<?php echo $friday_appt_id;?>">
                <?php if ($friday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $friday_user_name?></span>
                <?php } if ($friday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate friday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate saturday echoed
            ////////////////////////////////////////////////////////////////////////////////
            if($saturday_trigger=='no'){?>
            <td>
            <a href="javascript:void:0;" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $saturday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $saturday_backer_color;?>" class="<?php echo $saturday_appt_type;?>">
            <?php if ($saturday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $saturday_appt_type;?>" data-id="<?php echo $saturday_appt_id;?>">
                 <?php if ($saturday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $saturday_user_name?></span>
                <?php } if ($saturday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate saturday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>

            <?php
            /////////////////////////////////////////////////////////////////////////////////
            //isolate sunday echoed
            ////////////////////////////////////////////////////////////////////////////////
            if($sunday_trigger=='no'){?>
            <td>
            <a href="javascript:void(0);" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $sunday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $sunday_backer_color;?>" class="<?php echo $sunday_appt_type;?>">
            <?php if ($sunday_show_but=='yes'){?>
            <a style="width:70%;" href="javascript:void(0);" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $sunday_appt_type;?>" data-id="<?php echo $sunday_appt_id;?>">
                 <?php if ($sunday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $sunday_user_name?></span>
                <?php } if ($sunday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } ?>
            </a>
            <?php } ?>
            </td>
            <?php }
            /////////////////////////////////////////////////////////////////////////////////
            //end isolate sunday echoed
            ////////////////////////////////////////////////////////////////////////////////

            ?>


            </tr>

            <?php
            }
            //end for loop to build out table
            ?>

          </table>
          <!--end-->
    </div>
  </div>
</div>  
  
<!-- END Layout Center -->

<!--Appointment Details Modal-->
<div class="modal fade" id="myModalApptDetails">
  <div class="modal-header"> <a class="close" data-dismiss="modal">×</a>
    <h3>Appointment Details</h3>
  </div>
  <div class="modal-body">
    <div class="static-appointment-detail-holder">
        <table>
          <tr>
            <td>
               <span class='label' id="human_date"> </span>
               </br>
               <b>
               <span id="start_readable"> </span>
               <i class='icon icon-arrow-right'></i> 
               <span id="end_readable"> </span>
               </b>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               
            </td>
            <td style="width:60%;">
                <div class="alert alert-success" style="padding-right:3px;padding-left;3px;margin-right:0px;">
                    <b id="full_name_a"></b> with <b id="trainer_name_bm"></b>
                </div>
                <b>Appointment Type:</b> <span id="appointment_type_name"></span>
                <br>
                <b>Pricing:</b> <span id="appointment_price_desc"></span>
                <br>
                <b>Age:</b> <span id="age_a"></span>
                <br>
                <b>Gender:</b> <span id="gender_a"></span>
                <br>
                <b>Email:</b> <span id="appointment_email"></span>  
                   
            </td>
          </tr>       
        </table>    
                
    </div>
  </div>
  <div class="modal-footer"> <a href="#" class="btn btn-danger" data-id="0" id="remove-appt-btn">Remove Appointment</a> </div>
</div>
<!--Modal Window Templates-->

<!--Modal Window Templates-->
<div class="modal fade" id="myModal">
  <div class="modal-header"> <a class="close" data-dismiss="modal">×</a>
    <a href="javascript:void(0)" class="pull-left btn-advanced" style="margin-right:10px;"><i class="icon icon-list"></i></a>
    <h4 id="modal_booking_title">Add a New Task</h4>
  </div>
  <div class="modal-body">
    <div id="step_advanced" style="display:none">
        <h3>Schedule Unavailable time block:</h3> 
        <div class="well" style="padding: 3px 0px 3px 0px; margin 3px 3px 3px 3px;background-color:#99ff99;">
                <div class="pull-left" style="width:60%;">
        
                    <table>
                        <tr>
                            <td>
                                <h4 id="startAdvancedSpan">00:00 AM</h4> 
                            </td>
                            <td>
                                <i class="icon-arrow-right"></i>
                            <td>    
                            <td>
                                <div class="input-append bootstrap-timepicker" style="margin-top:10px;">
                                    <input id="timepicker3" type="text" name="start-time" class="input-small">
                                    <span class="add-on"><i class="icon-time"></i></span>
                                </div>   
                            </td>
                         <tr>
                    </table>          
                
                </div>
                <div class="pull-right" style="width:40%;">
                <a href="javascript:void(0);" class="btn btn-success btn-small btn-appt-book-advanced">Book</a>
                <div class="alert alert-danger" id="advanced-conflict" style="display:none;">conflict!</div>
                <select id="iteration-advanced" class="input-iteration-advanced" style="width:100px;">
                    <option value="1">1 iteration</option>
                    <option value="2">2 iterations</option>
                    <option value="3">3 iterations</option>
                    <option value="4">4 iterations</option>
                    <option value="5">5 iterations</option>
                    <option value="6">6 iterations</option>
                    <option value="7">7 iterations</option>
                    <option value="8">8 iterations</option>
                    <option value="9">9 iterations</option>
                    <option value="10">10 iterations</option>
                    <option value="11">11 iterations</option>
                    <option value="12">12 iterations</option>
                    <option value="13">13 iterations</option>
                    <option value="14">13 iterations</option>
                    <option value="15">14 iterations</option>
                    <option value="16">16 iterations</option>
                    <option value="17">17 iterations</option>
                    <option value="18">18 iterations</option>
                    <option value="19">19 iterations</option>
                    <option value="20">20 iterations</option>        
                </select>    
                </div>
                <div style="clear:both"></div> 
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    </div>    
    <div id="step1">
    <?php 
    foreach($golf_plans as $plan){
            ?>
            <div class="well" style="padding: 3px 0px 3px 0px; margin 3px 3px 3px 3px;background-color:#99ff99;">
                <div class="pull-left" style="width:60%;">
                <h3><?php echo $plan->name; ?> <span style="color:green;" class="label"><?php echo $plan->duration_multiplier*15; ?> min </span></h3> 
                <b>Pricing: </b><?php echo $plan->price_description; ?><br/>
                <b>Plan Information: </b><?php echo $plan->short_desc; ?>
                </div>
                <div class="pull-right" style="width:40%;">
                <a href="javascript:void(0);" class="btn btn-success btn-small btn-appt-static" data-total-min="<?php echo $plan->duration_multiplier*15; ?>" data-name="<?php echo $plan->name; ?>" data-time-end="<?php echo $plan->duration_multiplier*15; ?>" data-price-description="<?php echo $plan->price_description; ?>" id="<?php echo $plan->ID_auth_dp; ?>">Book</a>
                <select id="iteration<?php echo $plan->ID_auth_dp; ?>" class="input-iteration" style="width:100px;">
                    <option value="1">1 iteration</option>
                    <option value="2">2 iterations</option>
                    <option value="3">3 iterations</option>
                    <option value="4">4 iterations</option>
                    <option value="5">5 iterations</option>
                    <option value="6">6 iterations</option>
                    <option value="7">7 iterations</option>
                    <option value="8">8 iterations</option>
                    <option value="9">9 iterations</option>
                    <option value="10">10 iterations</option>
                    <option value="11">11 iterations</option>
                    <option value="12">12 iterations</option>
                    <option value="13">13 iterations</option>
                    <option value="14">13 iterations</option>
                    <option value="15">14 iterations</option>
                    <option value="16">16 iterations</option>
                    <option value="17">17 iterations</option>
                    <option value="18">18 iterations</option>
                    <option value="19">19 iterations</option>
                    <option value="20">20 iterations</option>        
                </select>    
                </div>
                <div style="clear:both"></div> 
            </div>
    <?php }?>
    </div>
    <div id="step2" style="display:none;">
      <div class="well" id="locate_account_holder" style="padding: 3px 0px 3px 0px; margin 3px 3px 3px 3px;background-color:#99ff99;">
        <b>&nbsp;&nbsp;&nbsp;To Book this Appointment, Enter Your Email Below:</b>
        <hr style="margin-top:0px;">  
        <input type="text" value="gernunder@gernunder.com" style="margin-left:10px;margin-top:5px;" id="email_for_appt" class="input input-large" placeholder="email address for appointment">&nbsp;  
        <a href="javascript:void(0)" id="email_for_appt_submit" class="btn btn-success btn-small pull-right">submit</a>
      </div>  
      <div class="well" id="unfound_email_holder" style="padding: 3px 0px 3px 0px; margin 3px 3px 3px 3px;background-color:#99ff99; display:none;">
        <b>&nbsp;&nbsp;&nbsp;It doesn't look like we have an account under <span id="email_not_found"></span></b>
        <hr style="margin-top:0px;">
        that's o.k. though! all you have to do is gives us the information below, and we can still book your appointment right now (note: no other information is required, and you won't have to add this infomration again)!  
        <br/>
        <i class="icon-envelope"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="hold_email_shown" class="input input-large" placeholder="New Customer Email"><br/>
        <i class="icon-user"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="full_name" class="input input-large" placeholder="Full Name"><br/>
        <i class="icon-arrow-right"></i><select id="gender" style="margin-left:10px;" class="input input-small"><option value="male">male</option><option value="female">female</option></select><br/>
        <i class="icon-arrow-right"></i><select id="age" style="margin-left:10px;" class="input input-medium"><option value="adult">Adult Golfer</option><option value="junior">Junior Golfer</option></select>
        <a href="javascript:void(0)" id="go_back" onclick="$('#unfound_email_holder').hide();$('#locate_account_holder').show();" class="btn btn-danger btn-small pull-right">Go Back</a>
        <a href="javascript:void(0)" id="create_and_book_btn" class="btn btn-success btn-small pull-right">Book Appointment</a>
      </div>
      <div class="well" id="golfers_found" style="display:none;">
        <b>&nbsp;&nbsp;&nbsp;Please Select a Golfer for this appointment:</b>
        <a href="javascript:void(0);" id="add_golfer_to_account" class="pull-right">Add New Golfer</a>
        <hr style="margin-top:0px;">
        <table id="golfers_found_holder" class="table table-bordered table-striped">  
        </table>    
        <div id="add_golfer_to_account_holder" style="display:none;">
            <i class="icon-envelope"></i><span style="margin-left:10px;margin-top:5px;" id="hold_email_shown_2"></span><br>
            <i class="icon-user"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="full_name_2" class="input input-large" placeholder="Full Name"><br/>
            <i class="icon-arrow-right"></i><select id="gender_2" style="margin-left:10px;" class="input input-small"><option value="male">male</option><option value="female">female</option></select><br/>
            <i class="icon-arrow-right"></i><select id="age_2" style="margin-left:10px;" class="input input-medium"><option value="adult">Adult Golfer</option><option value="junior">Junior Golfer</option></select>
            <a href="javascript:void(0)" id="go_back_2" onclick="$('#add_golfer_to_account_holder').hide();$('#add_golfer_to_account').show();$('#golfers_found_holder').show();" class="btn btn-danger btn-small pull-right">Go Back</a>
            <a href="javascript:void(0)" id="create_and_book_btn_2" class="btn btn-success btn-small pull-right">Book Appointment</a>
        </div>    
        
      </div>    
    </div>   
  </div>
</div>
"
<script type="text/javascript">
    var human_readable_date = "";
    var human_readable_time = "";
    var human_readable_end_minute_time = "";
    var appointment_type_id = "";
    var appointment_type_name = "";
    var appointment_end_add_minutes = "";
    var customer_email_submitted ="";
    var primary_date_passed_orig ="";
    var $primary_date_passed="";
    var $starter_thrown = "";
    var $ender_thrown = "";
    var $human_final_id = "";
    var $human_final_name = "";
    var $final_instructor_id ="<?php echo $this->session->userdata('id_o');?>";
    var $final_instructor_name ="<?php echo $this->session->userdata('first_o'); ?> <?php echo $this->session->userdata('last_o'); ?>";
    var $group_or_single ="single";
    var $real_or_blocked_out ="real";
    var $appointment_price = "";
    var $final_total_min = "";
    var $ender_thrown_not_minus_minute ="";
    var $iteration_holder = "";
    var $email_id_held = "";
    var $appointment_type_flag = "static";
    /////////////////////////////////
    //advanced holders
    /////////////////////////////////
    $start_advanced_HH_mm_ss ="";
    $end_advanced_HH_mm_ss ="";
    $start_advanced_yyyy_MM_dd = "";

    $pass_start = "";
    $pass_end = "";
    $pass_iteration = "";
    ////////////////////////////////
    //
    ///////////////////////////////

    $(document).ready(function() { 

        $('.blocked').each(function() {
            $(this).css('background-color','black');
        });

        $('#timepicker1').timepicker('setTime', '<?php echo $default_start_format;?>');
        $('#timepicker2').timepicker('setTime', '<?php echo $default_end_format;?>');
        //$('#timepicker3').timepicker();
        $('#timepicker3').timepicker().on('changeTime.timepicker', function(e) {
            local = Date.parseExact(e.time.value,"hh:mm tt");
            $end_advanced_HH_mm_ss = local.addSeconds(-1).toString("HH:mm:ss");
            //console.log($end_advanced_HH_mm_ss);
           
            $pass_start = $start_advanced_yyyy_MM_dd + " " + $start_advanced_HH_mm_ss;
            $pass_end = $start_advanced_yyyy_MM_dd + " " + $end_advanced_HH_mm_ss;
            $pass_iteration = $('.input-iteration-advanced').val();
            
             alert($pass_start);
            generic_conflict_check($pass_start, $pass_end, $pass_iteration);
        });
        
        $(document).on("change", ".input-iteration-advanced", function() {
            $pass_iteration = $('.input-iteration-advanced').val();
            generic_conflict_check($pass_start, $pass_end, $pass_iteration);
            console.log($pass_start +'ddd'+ $pass_end +'ddd'+ $pass_iteration);
        });
        
        $( "#jump_date_button" ).click(function() {
        var mm=$('#MM').val();
        var dd=$('#DD').val();
        var yyyy=$('#YYYY').val();
        window.location.replace("<?php echo base_url();?>index.php/organizer/booking_admin/today/" + yyyy + "/" + mm + "/" + dd);
        });

        $( ".open-butt-clicker" ).click(function() {
            primary_date_passed_orig = $( this ).attr('id');
            $primary_date_passed = Date.parseExact(primary_date_passed_orig,"yyyy-MM-dd HH:mm:ss");
            $('#primary_date_passed').val($primary_date_passed.toString("yyyy-MM-dd HH:mm:ss"));
            $('#date_first_indicator').val($primary_date_passed);
            $('#start_ref_indicator').text($primary_date_passed.toString("h:mm tt"));
            human_readable_date = $primary_date_passed.toString("MM-dd-yyyy");
            human_readable_time = $primary_date_passed.toString("h:mm tt");
            $('#modal_booking_title').text('Book an Appointment starting at ' + human_readable_time + ' on '+ human_readable_date + ':');
            $('#myModal').modal('show');
        });

        $( ".btn-appt-static" ).click(function() {
            $appointment_type_flag = "static"; 
            $iteration_holder = $('#iteration' + $(this).attr('id') ).val();
            //alert($iteration_holder);
            appointment_type_id = $( this ).attr('id');
            //alert(appointment_type_id);
            appointment_type_name = $( this ).attr('data-name');
            $appointment_price = $( this ).attr('data-price-description');
            $final_total_min = $( this ).attr('data-total-min'); 
            
            appointment_end_add_minutes = $( this ).attr('data-time-end');
            //alert(appointment_end_add_minutes);
            //start calculating the end time
            $parse_me_check = primary_date_passed_orig;
            //alert($parse_me_check);
            $parse_me_check_object = Date.parseExact($parse_me_check,"yyyy-MM-dd HH:mm:ss");
            ////////////////////////////////////////////////////////////////////////
            $starter_thrown = $parse_me_check_object.toString("yyyy-MM-dd HH:mm:ss");
            
            ////////////////////////////////////////////////////////////////////////
            $result_parse_check_1 = $parse_me_check_object.addMinutes(appointment_end_add_minutes);
            $ender_thrown_not_minus_minute = $result_parse_check_1.toString("yyyy-MM-dd HH:mm:ss");
            
            human_readable_end_minute_time = $result_parse_check_1.toString("h:mm tt");
            /////////////////////////////////////////////////////////////////////////
            $pre_ender_thrown = $result_parse_check_1.addSeconds(-1);
            $ender_thrown = $pre_ender_thrown.toString("yyyy-MM-dd HH:mm:ss");
            /////////////////////////////////////////////////////////////////////////
            //alert($starter_thrown + '' + $ender_thrown);
            //alert($starter_thrown + $ender_thrown_not_minus_minute + $final_instructor_id);
             $('#modal_booking_title').html('Booking <b>' + appointment_type_name + '</b><br>' + human_readable_date + ': ' + human_readable_time + ' <icon class="icon-arrow-right"></i> ' + human_readable_end_minute_time);
             $.post("<?php echo base_url();?>index.php/organizer/booking_admin/session_conflict_check", 
             {edit_trigger: $final_instructor_id, start_time: $starter_thrown, end_time: $ender_thrown, iteration_holder: $iteration_holder},
              function(data){
                //alert(data);
                if(data == "false"){
                  //it's all good
                  $('#step1').hide('fast');
                  $('#step2').show('fast');
                } else {
                //the system found a conflict
                alert('Sorry, There is an appointment conflict, please try another time slot or appointment type.');
                return false;    
                }
            });
            

        });
        
        $( "#email_for_appt_submit" ).click(function() {
            customer_email_submitted = $( '#email_for_appt' ).val();
            var email_passed = validateEmail(customer_email_submitted);
            //validate email client side
            if(!email_passed){
                alert('please enter a valid email address and try again');
                return false;
            }
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/ask_if_golfer", {e_sub: customer_email_submitted}, function(data){
            //alert('called');
            //alert(data);
            if(data == "false"){
                $('#hold_email_shown').val(customer_email_submitted); 
                $('#email_not_found').text(customer_email_submitted);
                $('#unfound_email_holder').show();
                $('#locate_account_holder').hide();
            } else {
            //the email has been found, return json of people
            //alert(data);
            var result_set = jQuery.parseJSON(data);
            $('#golfers_found_holder').empty();
            //hold the id for the global email
            $email_id_held = result_set[0];
            $.each(result_set[1], function(index, element) {
                var table_html = '<tr><td>' + element['full_name_a'] + '</td><td><a href="javascript:void(0);" class="btn btn-success final-book-human" data-final-human-name="' + element['full_name_a'] + '" data-final-human-id="' + element['ID_auth_a'] + '" id="book_with' + element['ID_auth_a'] + '">Book Appointment</a></td></tr>';
                $('#golfers_found_holder').append(table_html);
                
            });
            $('#locate_account_holder').hide();
            $('#golfers_found').show('fast');
            }
        }, 'text');
        });
        //create a new customer and then book an appointment
        $( "#create_and_book_btn" ).click(function() {
            create_new_email = $( '#hold_email_shown' ).val();
            create_full_name = $( '#full_name' ).val();
            create_age = $( '#age' ).val();
            create_gender = $( '#gender' ).val();
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/create_golfer", {create_new_email: create_new_email, create_full_name: create_full_name, create_age: create_age, create_gender: create_gender}, function(data){
            //alert('calledz');
            //alert(data);
            $('#unfound_email_holder').hide();
            $('#email_for_appt_submit').trigger('click');
            
        }, 'text');
        });
        
        $(document).on("click", ".final-book-human", function() {
            $human_final_id = $(this).attr('data-final-human-id');
            $human_final_name = $(this).attr('data-final-human-name');
            //alert($human_final_name);
            finalBookApointment();
        });

        $(document).on("click", "a.static, a.blocked", function() { 
            $appt_id_grab_dets = $(this).attr('data-id');
            $('#remove-appt-btn').attr('data-id', $appt_id_grab_dets);
            $('#myModalApptDetails').modal('show');

            var flag = $(this).hasClass('blocked');
            if ( flag ){
                $('.static-appointment-detail-holder').hide();
                return;
            } else {
                $('.static-appointment-detail-holder').show();
            }
            //fetch_appointment
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/fetch_appointment", {appt_id: $appt_id_grab_dets}, function(data){
            
                //alert(data);
                data = $.parseJSON(data);
                data = data[0];
                console.log(data);

                $('#start_readable').text(data['start_readable']);
                $('#end_readable').text(data['end_readable']);
                $('#human_date').text(data['human_date']);
                $('#paid').text(data['paid']);
                $('#full_name_a').text(data['full_name_a']);
                $('#gender_a').text(data['gender_a']);
                $('#age_a').text(data['age_a']);
                $('#appointment_email').text(data['appointment_email']);
                $('#appointment_type_name').text(data['appointment_type_name']);
                $('#appointment_price_desc').text(data['appointment_price_desc']);
                $('#trainer_name_bm').text(data['trainer_name_bm']);

            
            }, 'text');
            
        });

        $(document).on("click", "#remove-appt-btn", function() {
           var data_id = $(this).attr('data-id');
            $.post("http://localhost/golfschool/index.php/organizer/create_main_event/unset_me", {data_id: data_id}, function(data){
                window.location.replace("<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $last_part_date_url;?>");
            
            }, 'text');
           
        });

        $(document).on("click", "#add_golfer_to_account", function() {
            $('#add_golfer_to_account_holder').show();
             $('#add_golfer_to_account').hide();
            $('#golfers_found_holder').hide();
            $('#hold_email_shown_2').text(customer_email_submitted);
            //$appt_id_grab_dets = $(this).attr('data-id');
            //alert($appt_id_grab_dets);
            
        });



        $(document).on("click", "#create_and_book_btn_2", function() {
            
            create_full_name = $( '#full_name_2' ).val();
            create_age = $( '#age_2' ).val();
            create_gender = $( '#gender_2' ).val();

            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/create_golfer", {create_full_name: create_full_name, create_age: create_age, create_gender: create_gender, skip_email_create: $email_id_held}, function(data){
              //alert(data);
              var temp_name = $('#full_name_2').val();
              var table_html = '<tr><td>' + temp_name + '</td><td><a href="javascript:void(0);" class="btn btn-success final-book-human" data-final-human-name="' + temp_name + '" data-final-human-id="' + data + '">Book Appointment</a></td></tr>';
              $('#golfers_found_holder').prepend(table_html);
              $('#add_golfer_to_account_holder').hide();
              $('#add_golfer_to_account').show();
              $('#golfers_found_holder').show();
            
            }, 'text');
            

            //$('#hold_email_shown_2').text(customer_email_submitted);
            //$appt_id_grab_dets = $(this).attr('data-id');
            //alert($appt_id_grab_dets);
            
        });

        $(document).on("click", ".btn-advanced", function() {
            $('.btn-appt-book-advanced').hide();
            $('#advanced-conflict').hide();
            ////////////////////////////////////////
            $('#step_advanced').show();
            $('#step1').hide();
            $('#startAdvancedSpan').text(human_readable_time);
             //var day_local_robot = $primary_date_passed.toString("yyyy-MM-dd");
             $start_advanced_yyyy_MM_dd = $primary_date_passed.toString("yyyy-MM-dd");
             var start_local_human = $primary_date_passed.toString("h:mm tt");
             $start_advanced_HH_mm_ss = $primary_date_passed.toString("HH:mm:ss");
             var end_local_human = $primary_date_passed.addMinutes(15);
             var end_local_human_2 = end_local_human.toString("h:mm tt");
             $end_advanced_HH_mm_ss = end_local_human.addSeconds(-1).toString("HH:mm:ss");
             $('#timepicker3').timepicker('setTime', end_local_human_2);

             $pass_start = $start_advanced_yyyy_MM_dd + " " + $start_advanced_HH_mm_ss;
             $pass_end = $start_advanced_yyyy_MM_dd + " " + $end_advanced_HH_mm_ss;
             $pass_iteration = $('.input-iteration-advanced').val();
             //generic_conflict_check(pass_start, pass_end, pass_iteration);

             /////////////////////////////////////////////////////////
             $starter_thrown = $pass_start;
             $ender_thrown = $pass_end;
             
             $human_final_id = "na";
             $appointment_type_flag = "blocked";

             $human_final_name = "blocked time"; 
             human_readable_time = $('#startAdvancedSpan').text();
             human_readable_end_minute_time = $('#timepicker3').val();
             $iteration_holder = $pass_iteration;
             //alert($iteration_holder);

             appointment_type_id = "0", 
             appointment_type_name = "blocked-time"; 
             $final_total_min = "not applicable";
             $appointment_price = "not applicable";
           
             customer_email_submitted = "not applicable";
            
            
        });

        $(document).on("click", ".btn-appt-book-advanced", function() {
            $starter_thrown = $pass_start;
            $ender_thrown = $pass_end;
            human_readable_end_minute_time = $('#timepicker3').val();
            $iteration_holder = $pass_iteration;
            $('#step_advanced').hide();
            $('#step2').show();
            $('#locate_account_holder').hide();
            finalBookApointment();
            
        });

        
    });
    
    function hide_or_show_advanced_button(trigger){
        
      if(trigger == true){
        $('.btn-appt-book-advanced').show();
        $('#advanced-conflict').hide();
      } else {
        $('.btn-appt-book-advanced').hide();
        $('#advanced-conflict').show();
      }
    }
    
    function generic_conflict_check(pass_start, pass_end, pass_iteration){
        
    $.post("<?php echo base_url();?>index.php/organizer/booking_admin/session_conflict_check", 
         {edit_trigger: $final_instructor_id,
          start_time: pass_start, 
          end_time: pass_end, 
          iteration_holder: pass_iteration},
          function(data){
            if(data == "false"){
              //it's all good
              hide_or_show_advanced_button(true);
              
            } else {
            //the system found a conflict
              hide_or_show_advanced_button(false);  
            
            }
        });



    }

    function finalBookApointment() {
         //alert('called u');
         console.log($starter_thrown + "starter thrown");
         //this outputs y m d hh ii ss
         //alert($iteration_holder);
        $.post("<?php echo base_url();?>index.php/organizer/booking_admin/create_new_appointment", 
            {
                start_bm: $starter_thrown, 
                end_bm: $ender_thrown, 
                trainer_id_bm: $final_instructor_id,
                cust_id_bm: $human_final_id,

                trainer_name_bm: $final_instructor_name, 
                cust_name_bm: $human_final_name, 
                start_readable: human_readable_time,
                end_readable: human_readable_end_minute_time,
                iteration_holder: $iteration_holder,

                appointment_type_id: appointment_type_id, 
                appointment_type_name: appointment_type_name, 
                appointment_min: $final_total_min,
                appointment_price_desc: $appointment_price,
                appointment_type_flag: $appointment_type_flag,
                appointment_email: customer_email_submitted
            }, function(data)
            {
                $('#golfers_found').hide('fast');
                $('#golfers_found').html('<h2>Your Appointment has been Booked!</h2>please remember your appointment is on ' + human_readable_date + ': ' + human_readable_time + ' <icon class="icon-arrow-right"></i> ' + human_readable_end_minute_time + '<h3 class="alert">This page will soon redirect to reflect your booking...</h3>');
                $('#golfers_found').show('slow');
                setInterval(function(){
                    window.location.replace("<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $last_part_date_url;?>");
                },5000);
            }, 'text');
        }

    $('#myModal').on('hidden', function () {
        $('#step1').show();
        $('#step2').hide();
        $('#locate_account_holder').show();
        $('#unfound_email_holder').hide();
        $('#golfers_found').hide();
        $('#add_golfer_to_account_holder').hide();
        $('#add_golfer_to_account').show();
        $('#golfers_found_holder').show();
        $('#step_advanced').hide();
        
    });

    function validateEmail(email) { 
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    } 
    function set_origin_modal(asdf)
    {
        //$primary_date_passed = Date.parseExact(asdf,"yyyy-MM-dd HH:mm:ss");
        //$('#primary_date_passed').val($primary_date_passed.toString("yyyy-MM-dd HH:mm:ss"));

        //alert(asdf);
        debugger;

        //$('#date_first_indicator').val(asdf);
        //$('#start_ref_indicator').text($primary_date_passed.toString("h:mm tt"));
        //$('#date_stage_2').text($primary_date_passed.toString("MM-dd-yyyy"));

        //add_fifteen();
        //$('#myModal').toggle();
   }
</script>
