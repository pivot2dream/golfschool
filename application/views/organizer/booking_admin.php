<?php if($is_user_mode=="user_mode" && $hide_splash==FALSE){ ?>
<div class="dashRow">
    <div class="row-fluid">
        <div class="span3">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;2013 Teacher of the Year Award:</h4>
                <div class="row-fluid" style="background-color:white;">
                            <img src="<?php echo base_url();?>img/doug_logo.png">
                </div>
                <br>
            </div>        
        </div>
        
        <div class="span9">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;Precision Golf School Has Been Dedicated to top notch stuff for 10 + years</h4>
                <div class="row-fluid" style="background-color:white;">
                    <div class="span12">
                        <div id="carousel-example-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                  <img src="http://placehold.it/900x203" alt="">
                                </div>
                                <div class="item">
                                  <img src="http://placehold.it/900x203" alt="">
                                </div>
                                <div class="item">
                                  <img src="http://placehold.it/900x203" alt="">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="icon-prev">&lsaquo;</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="icon-next">&rsaquo;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row-fluid" style="background-color:white;">    
                    <div class="span4">
                        <h2>&nbsp;Our Mission:</h2>
                        <hr style="margin-top:2px;margin-bottom:3px;">
                        <p style="padding-left:10px;">
                            &nbsp;&nbsp;&nbsp;Our Mission is to provide you with up-to-date and sceince driven instruction, that removes the hocus pocus vodoo woodo from your typical golf lessons. Patrons of Precision Golf School can expect a unique experience that has been crafted through years of data and analysis off and on the course.
                            <br><br>
                            Rest assured that our mission is to do nonother then to ensure that you improve as a golfer after each and every lesson.
                        </p>
                            
                    </div>
                    <div class="span4">
                        <h2>&nbsp;Our Experience:</h2>
                        <hr style="margin-top:2px;margin-bottom:3px;">
                        <p style="padding-left:10px;">
                            &nbsp;&nbsp;&nbsp;Our Mission is to provide you with up-to-date and sceince driven instruction, that removes the hocus pocus vodoo woodo from your typical golf lessons. Patrons of Precision Golf School can expect a unique experience that has been crafted through years of data and analysis off and on the course.
                            <br><br>
                            Rest assured that our mission is to do nonother then to ensure that you improve as a golfer after each and every lesson.
                        </p>
                          
                    </div>
                    <div class="span4">
                        <h2>&nbsp;Our Location:</h2>
                        <hr style="margin-top:2px;margin-bottom:3px;">
                        <p style="padding-left:10px;">
                            <br>
                            <div class="well" style="margin-right:10px;margin-left:10px;">
                                <a href="https://www.google.com/maps/place/Precision+Golf+School/@44.1404646,-123.2008761,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0xb1ee22d84880e93e" target="_blank">
                                    <img src="<?php echo base_url();?>img/google_maps_icon_64.png" class="pull-right">
                                </a>
                            <b>Fiddler's Green</b><br>
                            91292 Hwy. 99N<br>
                            Eugene, OR 97402<br>
                            <b>541-284-7992</b>
                            </div>
                            Come visit us at our convenient Northwest Eugene location on Highway 99 North!<br><br>
                            
                        </p>    
                            <!--<iframe src="https://mapsengine.google.com/map/embed?mid=zmSxjuAQedHU.kr5MC1SDeSJY" width="280" height="280"></iframe>-->
                    </div>
                </div>
                <br>
            </div>        
        </div>
    </div>
</div>             
<?php } ?>
<div class="dashRow">
      <div class="row-fluid">
        <div class="span3">

             <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;Select Instructor Calendar:</h4>
                <table class="table" style="background-color:white;">
                <?php

                //****************************************************************************//
                //create the grey header attribute
                //****************************************************************************//
                foreach($golf_pros as $pro){
                ?>
                <tr id="<?php echo $pro->ID_auth_t; ?>" class="pro_clicked_div" style="<?php if($pro->ID_auth_t == $this->session->userdata('id_op')){echo'background-color:#ddfcdd;';}?>">
                    <td>
                        <img src="<?php echo base_url();?>img/<?php if($pro->ID_auth_t == $this->session->userdata('id_op')){echo'check_on.png';}else{echo 'check_off.png';}?>" style="width:30px;margin-top:3px;" class="profile-special">
                    </td>    
                    <td>
                        <img src="<?php echo base_url();?>img/<?php echo $pro->loc_1_t; ?>" style="width:30px;margin-top:3px;" class="profile-special">
                    </td>    
                    <td>
                    <h3><?php echo $pro->first_name_t; ?> <?php echo $pro->last_name_t; ?></h3>
                    </td>
                        
                </tr>    

                <?php
                }
                ?>
                </table>
                <form method="post" id="pro_clicked_form" action="<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $last_part_date_url;?>">
                    <input type="hidden" name="pro_clicked" id="pro_clicked">
                </form>    
            </div>
            <div style="padding:0px 0px 0px 75px;background-color:'none';">
                <a href="<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $date_go_back;?>" class="btn btn-small btn-primary">- 1 week</a>&nbsp;&nbsp;
                <a href="<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $date_go_forward;?>" class="btn btn-small btn-primary">+ 1 week</a>
                <table>
                    <tr>
                        <td>
                            <input id="date_picker_jump" placeholder="jump to a date" style="width:90%;margin-top:5px;">
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-small btn-primary" id="jump_date_button" style="margin:-5px 0px 0px 0px;padding:3px 5px 3px 5px;">Go</a>
                        </td>
                    </tr>
                </table>    
              
            </div>  
            <?php if($is_user_mode!="user_mode"){ ?>
            <div class="well" style="padding:0px 0px 0px 0px;">

              <form action="<?php echo base_url();?>index.php/organizer/booking_admin/today" method="post">
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
                  <select class="input input-small" name="inc">
                    <option value="15" <?php if($minute_incriment_saved=='15'){echo "selected=selected";}?> >15 min inc</option>
                    <option value="30" <?php if($minute_incriment_saved=='30'){echo "selected=selected";}?> >30 min inc</option>
                    <option value="45" <?php if($minute_incriment_saved=='45'){echo "selected=selected";}?> >45 min inc</option>
                    <option value="60" <?php if($minute_incriment_saved=='60'){echo "selected=selected";}?> >60 min inc</option>  
                  </select><br>
                  <input type="submit" name="submit" value="Update Settings" class="btn btn-small btn-primary">
                </div>  
              </form>
              <div style="clear:both"></div>
           
                
            </div>   
            <?php } ?>   
            
        </div>    

        <div class="span9">
          
          <!--start-->

            <div class="well" style="margin-left:0px;">

            <table style="width:100%;" style="background-color:#fff;" class="table table-striped holds-calendar">
            <tr style="background-color:#fff;">
              <th>&nbsp;</th><th><span class="rotate-day"><?php echo $weekdays[0][0]?></span><br><span class="shrink-date"><?php echo $weekdays[0][1]?></span></th>
              <th><span class="rotate-day"><?php echo $weekdays[1][0]?></span><br><span class="shrink-date"><?php echo $weekdays[1][1]?></span></th>
              <th><span class="rotate-day"><?php echo $weekdays[2][0]?></span><br><span class="shrink-date"><?php echo $weekdays[2][1]?></span></th>
              <th><span class="rotate-day"><?php echo $weekdays[3][0]?></span><br><span class="shrink-date"><?php echo $weekdays[3][1]?></span></th>
              <th><span class="rotate-day"><?php echo $weekdays[4][0]?></span><br><span class="shrink-date"><?php echo $weekdays[4][1]?></span></th>
              <th><span class="rotate-day"><?php echo $weekdays[5][0]?></span><br><span class="shrink-date"><?php echo $weekdays[5][1]?></span></th>
              <th><span class="rotate-day"><?php echo $weekdays[6][0]?></span><br><span class="shrink-date"><?php echo $weekdays[6][1]?></span></th>
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
            //$backer_color = 'background-color:rgb('.rand(240,250).','.rand(100,230).','.rand(10,100).')';
                $CI = get_instance();
                if ($CI->session->userdata('is_logged_in_o') == FALSE) {
                    $backer_color = 'background-color:rgb(153,204,153)';
                    return $backer_color;
                } else {

                $backer_color = 'background-color:rgb('.rand(0,50).','.rand(50,100).','.rand(0,50).')';
                return $backer_color;
                }
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
                $monday_appt_type_id = $prev_indexed[$z][5];

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
                $tuesday_appt_type_id = $prev_indexed[$z][5];

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
                $wednesday_appt_type_id = $prev_indexed[$z][5];

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
                $thursday_appt_type_id = $prev_indexed[$z][5];

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
                $friday_appt_type_id = $prev_indexed[$z][5];

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
                $saturday_appt_type_id = $prev_indexed[$z][5];

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
                $sunday_appt_type_id = $prev_indexed[$z][5];

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
            <a style="width:90%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $monday_appt_type;?> <?php if (($monday_appt_type=="static" || $monday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $monday_appt_id;?>" data-appt-type-id="<?php echo $monday_appt_type_id;?>">
                <?php if ($monday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $monday_user_name?></span>
                <?php } if ($monday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($monday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
            <a style="width:90%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $tuesday_appt_type;?> <?php if (($tuesday_appt_type=="static" || $tuesday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $tuesday_appt_id;?>" data-appt-type-id="<?php echo $tuesday_appt_type_id;?>">
              <?php 
              if ($tuesday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $tuesday_user_name?></span>
                <?php } if ($tuesday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($tuesday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
            <a href="javascript:void 0" class="btn btn-small btn-success btn-no-pad-marg open-butt-clicker" id="<?php echo $wednesday_master;?>"><i class="icon-check"></i></a>
            </td>
            <?php }else{ ?>
            <td style="<?php echo $wednesday_backer_color;?>" class="<?php echo $wednesday_appt_type;?>">
            <?php if ($wednesday_show_but=='yes'){?>
            <a style="width:90%;" href="javascript:void 0" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $wednesday_appt_type;?> <?php if (($wednesday_appt_type=="static" || $wednesday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $wednesday_appt_id;?>" data-appt-type-id="<?php echo $wednesday_appt_type_id;?>">
                <?php if ($wednesday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $wednesday_user_name?></span>
                <?php } if ($wednesday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($wednesday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
            <a style="width:90%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $thursday_appt_type;?> <?php if (($thursday_appt_type=="static" || $thursday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $thursday_appt_id;?>" data-appt-type-id="<?php echo $thursday_appt_type_id;?>">
                <?php if ($thursday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $thursday_user_name?></span>
                <?php } if ($thursday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($thursday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
            <a style="width:90%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $friday_appt_type;?> <?php if (($friday_appt_type=="static" || $friday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $friday_appt_id;?>" data-appt-type-id="<?php echo $friday_appt_type_id;?>">
                <?php if ($friday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $friday_user_name?></span>
                <?php } if ($friday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($friday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
            <a style="width:90%;" href="javascript:void:0;" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $saturday_appt_type;?> <?php if (($saturday_appt_type=="static" || $saturday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $saturday_appt_id;?>" data-appt-type-id="<?php echo $saturday_appt_type_id;?>">
                 <?php if ($saturday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $saturday_user_name?></span>
                <?php } if ($saturday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($saturday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
            <a style="width:90%;" href="javascript:void(0);" class="btn btn-small btn-warning btn-no-pad-marg <?php echo $sunday_appt_type;?> <?php if (($sunday_appt_type=="static" || $sunday_appt_type=="blocked") && $is_user_mode=='user_mode'){echo 'hide';}?>" data-id="<?php echo $sunday_appt_id;?>" data-appt-type-id="<?php echo $sunday_appt_type_id;?>">
                 <?php if ($sunday_appt_type=="static"){?>
                <i class="icon-user"></i> <span class="h-username"><?php echo $sunday_user_name?></span>
                <?php } if ($sunday_appt_type=="blocked"){?>
                <i class="icon-remove"></i> <span class="h-username">blocked</span>
                <?php } if ($sunday_appt_type=="group"){?>
                <i class="icon-book"></i> <span class="h-username">group</span> 
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
                <br>
                <b>Phone:</b> <span id="appointment_phone"></span>    
                   
            </td>
          </tr>       
        </table>    
                
    </div>
  </div>
  <div class="modal-footer"> <a href="#" class="btn btn-danger" data-id="0" id="remove-appt-btn">Remove Appointment</a> </div>
</div>
<!--Modal Window Templates-->

<!--Appointment Details Modal-->
<div class="modal fade" id="myModalGroupDetails">
  <div class="modal-header"> <a class="close" data-dismiss="modal">×</a>
    <?php if($is_user_mode!="user_mode"){?>
        <a href="javascript:void(0)" class="pull-left btn-advanced-group" style="margin-right:10px;" data-id=""><i class="icon icon-list"></i></a>
    <?php } ?>
    <h3>Group Appointment Details</h3>
  </div>
  <div class="modal-body">
    <div class="group-appointment-booked-holder" style="display:none;">
        <table class="group-appointment-booked-table-holder table table-stripped">
        </table>    
    </div>    
    <div class="group-appointment-detail-holder">
        <table>
          <tr>
            <td style="vertical-align: top;" valign="top">
               <b>Sign Up for Group Lesson:</b><br>
               <span class="label label-success" id="open_slots"></span>&nbsp;<span class="label" id="cap"></span>
               <hr style="margin:3px 3px 3px 3px;">
               
                <b>Appointment Type:</b> <span id="group_appointment_type_name"></span>
                <br>
                <b>Description:</b> <span id="group_appointment_short_desc"></span>
                <br>
                <b>Pricing:</b> <span id="group_appointment_price_desc"></span><br><br>
                
                <div id="bulk_group_date" class="well" style="font-size:0.8em;padding:3px 3px 3px 3px;background-color:#afafaf;"> </div>
              
               
            </td>
            <td>
                &nbsp;&nbsp;
            </td>
            <td style="width:50%;" style="vertical-align: top;" valign="top">
                <b>To Sign up, complete the form below:
                <div class="well g_form_alive" style="margin:0px 0px 0px 0px;background-color:#99cc99;">
                Instructor:<br>
                <input type="text" class="input" id="group_trainer_name_bm" readonly>
                <br>
                Full Name:<br>
                <input type="text" class="input" name="g_name" id="g_name"><br>
                Email Address:<br>
                <input type="text" class="input" name="g_email" id="g_email"><br>
                Phone Number:<br>
                <input type="text" class="input" name="g_phone" id="g_phone"><br>
               <a href="javascript:void(0)" class="btn btn-success pull-right submit-grouper" data-id="null">Sign me Up!</a>
               </div>
                <div class="well g_form_kill hide" style="margin:0px 0px 0px 0px;background-color:#99cc99;">
                    <h2>Thank You!</h2>
                    <p> You have been added to this group lesson and we look forward to seeing you! </p>
                </div>
                 <div class="well g_form_full hide" style="margin:0px 0px 0px 0px;background-color:#99cc99;">
                    <h2>Sorry!</h2>
                    <p>This Group Appointment is full at the moment, please look forward to other group sessions in the future! </p>
                </div>      
            
                
                   
            </td>
          </tr>       
        </table>    
                
    </div>
  </div>
  <div class="modal-footer"> <a href="#" class="btn btn-danger" data-id="0" id="group-remove-appt-btn">Remove Appointment</a> </div>
</div>
<!--Modal Window Templates-->

<!--Modal Window Templates-->
<div class="modal fade" id="myModal">
  <div class="modal-header"> <a class="close" data-dismiss="modal">×</a>
    <?php if($is_user_mode!="user_mode"){?>
    <a href="javascript:void(0)" class="pull-left btn-advanced" style="margin-right:10px;"><i class="icon icon-list"></i></a>
    <?php } ?>
    <h4 id="modal_booking_title">Add a New Task</h4>
  </div>
  <div class="modal-body">
    <div class="generic_loader well hide">
            <img src="<?php echo base_url();?>img/tiny_little_loader.gif"> <b>loading...</b>
    </div>    
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
    <table class="table" >    
    <?php 
    foreach($golf_plans as $plan){
            ?>
            <tr>
                <td class="td-details-action">
                <div class="pull-left" style="width:70%;">
                <b><?php echo $plan->name; ?> <span style="color:green;" class="label"><?php echo $plan->duration_multiplier*15; ?> min </span></b> 
                <div class="td-details-action-shown" style="display:none;">
                <b>Pricing: </b><?php echo $plan->price_description; ?><br/>
                <b>Plan Information: </b><?php echo $plan->short_desc; ?>
                </div>
                </div>
                <div class="pull-right" style="width:30%;">
                
                <div class="input-append" style="margin:0px 0px 0px 0px;">
                  <select id="iteration<?php echo $plan->ID_auth_dp; ?>" class="input-iteration" style="width:100px;margin-top:5px;">
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
                <a href="javascript:void(0);" class="btn btn-success btn-small btn-appt-static" data-total-min="<?php echo $plan->duration_multiplier*15; ?>" data-name="<?php echo $plan->name; ?>" data-time-end="<?php echo $plan->duration_multiplier*15; ?>" data-literal-price="<?php echo $plan->long_description; ?>" data-price-description="<?php echo $plan->price_description; ?>" id="<?php echo $plan->ID_auth_dp; ?>" style="margin:-5px 0px 0px 0px;padding:3px 5px 3px 5px;">Book</a>
                </div>
                </div>
                <div style="clear:both"></div> 
                </tr>
               </td> 
    <?php }?>
    </table>
    </div>
    <div id="step2" style="display:none;">
      <div class="well" id="locate_account_holder" style="padding: 3px 0px 3px 0px; margin 3px 3px 3px 3px;background-color:#99cc99;">
        <b>&nbsp;&nbsp;&nbsp;To Book this Appointment, Enter Your Email Below:</b>
        <hr style="margin-top:0px;">  
        <input type="text" value="gernunder@gernunder.com" style="margin-left:10px;margin-top:5px;" id="email_for_appt" class="input input-large" placeholder="email address for appointment">&nbsp;  
        <a href="javascript:void(0)" id="email_for_appt_submit" class="btn btn-success btn-small pull-right" style="margin:5px 0px 0px 0px;padding:3px 5px 3px 5px;">continue...</a>
      </div>  
      <div class="well" id="unfound_email_holder" style="padding: 3px 0px 3px 0px; margin 3px 3px 3px 3px;background-color:#99ff99; display:none;">
        <b>&nbsp;&nbsp;&nbsp;It doesn't look like we have an account under <span id="email_not_found"></span></b>
        <hr style="margin-top:0px;">
        that's o.k. though! all you have to do is gives us the information below, and we can still book your appointment right now (note: no other information is required, and you won't have to add this infomration again)!  
        <br/>
        <i class="icon-envelope"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="hold_email_shown" class="input input-large" placeholder="New Customer Email"><br/>
        <i class="icon-user"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="full_name" class="input input-large" placeholder="Full Name"><br/>
        <i class="icon-arrow-right"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="phone_a" class="input input-large" placeholder="Phone Number"><br/>
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
            <i class="icon-arrow-right"></i><input type="text" value="" style="margin-left:10px;margin-top:5px;" id="phone_c" class="input input-large" placeholder="Phone Number"><br/>
            <i class="icon-arrow-right"></i><select id="gender_2" style="margin-left:10px;" class="input input-small"><option value="male">male</option><option value="female">female</option></select><br/>
            <i class="icon-arrow-right"></i><select id="age_2" style="margin-left:10px;" class="input input-medium"><option value="adult">Adult Golfer</option><option value="junior">Junior Golfer</option></select>
            <a href="javascript:void(0)" id="go_back_2" onclick="$('#add_golfer_to_account_holder').hide();$('#add_golfer_to_account').show();$('#golfers_found_holder').show();" class="btn btn-danger btn-small pull-right">Go Back</a>
            <a href="javascript:void(0)" id="create_and_book_btn_2" class="btn btn-success btn-small pull-right">Continue...</a>
        </div>    
        
      </div>    
    </div>   
  </div>
</div>

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
    var $final_instructor_id ="<?php echo $this->session->userdata('id_op');?>";
    var $final_instructor_name ="<?php echo $this->session->userdata('first_op'); ?> <?php echo $this->session->userdata('last_op'); ?>";
    var $group_or_single ="single";
    var $real_or_blocked_out ="real";
    var $appointment_price = "";
    var $final_total_min = "";
    var $ender_thrown_not_minus_minute ="";
    var $iteration_holder = "";
    var $email_id_held = "";
    var $appointment_type_flag = "static";
    var $master_group_json = [];
    var $global_refresh_done = false;
    var $appointment_literal_price = 0;
    /////////////////////////////////
    //advanced holders
    /////////////////////////////////
    $start_advanced_HH_mm_ss ="";
    $end_advanced_HH_mm_ss ="";
    $start_advanced_yyyy_MM_dd = "";

    $pass_start = "";
    $pass_end = "";
    $pass_iteration = "";
    $globalSlotTracker="";
    ////////////////////////////////
    //
    ///////////////////////////////

    $(document).ready(function() { 
        $( "#date_picker_jump" ).datepicker();

        $('.blocked').each(function() {
            if('<?php echo $is_user_mode;?>' != 'user_mode'){
                $(this).css('background-color','#272b27');
            }
        });
        $('.group').each(function() {
            $(this).css('background-color','#256363');
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
        var jump_var = $('#date_picker_jump').val();
        window.location.replace("<?php echo base_url();?>index.php/organizer/booking_admin/today/" + jump_var);
        });

        //
        $( "a.submit-grouper" ).click(function() {
            
            var plan_id = $( this ).attr('data-id');

            //basic validation
            var has_validated = true;
            if ( $('#g_name').val() == ''){
                has_validated = false;
            }
            if ( $('#g_phone').val() == ''){
                has_validated = false;
            }
            if ( validateEmail( $('#g_email').val() ) == false){
                has_validated = false;
            }

            //alert(has_validated);
            if( has_validated ) {

                $.post("<?php echo base_url();?>index.php/organizer/booking_admin/get_a_golf_plan", {plan_id: plan_id}, function(data){
                
                    //alert(data);
                    data = $.parseJSON(data);
                    data = data[0];
                    console.log(data);

                    //make sure we have the most up to date version of the group list possible
                    $master_group_json = $.parseJSON(data['group_clients']);

                    $master_group_json.push(
                        {g_name: $('#g_name').val(), g_email: $('#g_email').val(), g_phone: $('#g_phone').val(), g_paid: "not paid"}
                    );

                    $('.g_form_alive').hide();
                    $('.g_form_kill').show();
                    console.log($master_group_json);

                    $.post("<?php echo base_url();?>index.php/organizer/booking_admin/edit_members_group_plan", {plan_id: plan_id, master_group_json: JSON.stringify($master_group_json), tracker_action:'add'}, function(data){
                        console.log('final ajax call', data);
                        var newNum = parseInt($globalSlotTracker)-1;
                        $('#open_slots').text(newNum+' available slots');
                    }, 'text');    
                }, 'text');
            } else {alert('Please fill out all the information to continue.');}    
           
        });
        //group people remove
        $(document).on("click", "a.remove-group-guy", function() { 

            $( this ).closest('tr').hide();
            var masterString = $( this ).attr('data-id');
            var split = masterString.split('***');
            var guyName = split[0];
            var guyPhone = split[1];
            var $appt_id = split[2];
            $appt_id = parseInt($appt_id);
            console.log($appt_id);
            
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/get_a_golf_plan", {plan_id: $appt_id}, function(data){
                //alert(data);
                data = $.parseJSON(data);
                data = data[0];
                console.log(data);

                var group_clients = data['group_clients'];
                //console.log(group_clients);
                var jsonHeld = $.parseJSON(group_clients);
                var htmlHeld = "";
                var virginArray=[];
                alert('d');
                $.each(jsonHeld, function(i, item) {
                    console.log("log match",item.g_phone +' vs '+ guyPhone)
                    if ((item.g_phone == guyPhone) && (item.g_name == guyName)){} else {
                        virginArray.push(item);
                    }
                    
                });
                console.log(virginArray);
                $.post("<?php echo base_url();?>index.php/organizer/booking_admin/edit_members_group_plan", {plan_id: $appt_id, master_group_json: JSON.stringify(virginArray), tracker_action:'subtract'}, function(data){
                    console.log('final ajax call', data);
                }, 'text');  
             }, 'text');  


        });
        //group change inividual paid
        $(document).on("click", "a.change-paid-group-guy", function() { 
            //$( this ).closest('tr').hide();
            var switchType = $( this ).text();
            var switchHeld;
            if( switchType == "paid" ){
                switchHeld = "not paid";
            } else {
                switchHeld = "paid";
            }
            $( this ).text(switchHeld);
            var masterString = $( this ).attr('data-id');
            var split = masterString.split('***');
            var guyName = split[0];
            var guyPhone = split[1];
            var $appt_id = split[2];
            $appt_id = parseInt($appt_id);
            console.log($appt_id);
            
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/get_a_golf_plan", {plan_id: $appt_id}, function(data){
                //alert(data);
                data = $.parseJSON(data);
                data = data[0];
                console.log(data);

                var group_clients = data['group_clients'];
                //console.log(group_clients);
                var jsonHeld = $.parseJSON(group_clients);
                var htmlHeld = "";
                var virginArray=[];
                $.each(jsonHeld, function(i, item) {
                    console.log("log match",item.g_phone +' vs '+ guyPhone)
                    if ((item.g_phone == guyPhone) && (item.g_name == guyName)){
                        item.g_paid = switchHeld;
                    } 
                    virginArray.push(item);
                
                    
                });
                console.log(virginArray);
                $.post("<?php echo base_url();?>index.php/organizer/booking_admin/edit_members_group_plan", {plan_id: $appt_id, master_group_json: JSON.stringify(virginArray), tracker_action:'subtract'}, function(data){
                    console.log('final ajax call', data);
                }, 'text');  
             }, 'text');  


        });




        //group people shower
        $( "a.btn-advanced-group" ).click(function() {
            $('.group-appointment-detail-holder').hide();
            $('.group-appointment-booked-holder').show();
            var $appt_id = $( this ).attr('data-id');
            console.log($appt_id);
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/get_a_golf_plan", {plan_id: $appt_id}, function(data){
            
                //alert(data);
                data = $.parseJSON(data);
                data = data[0];
                console.log(data);

                var group_clients = data['group_clients'];
                //console.log(group_clients);
                var jsonHeld = $.parseJSON(group_clients);
                var htmlHeld = "";
                $.each(jsonHeld, function(i, item) {
                   htmlHeld += '<tr><td>'+ item.g_name +'</td><td>'+ item.g_email +'</td><td>' + item.g_phone +'</td><td><a class="change-paid-group-guy btn btn-warning btn-small" data-id="' + item.g_name + '***' + item.g_phone + '***' + $appt_id + '">'+item.g_paid+'</a></td><td><a class="remove-group-guy btn btn-warning btn-small" data-id="' + item.g_name + '***' + item.g_phone + '***' + $appt_id + '">x</a></td></tr>';
                });
                $('.group-appointment-booked-table-holder').html(htmlHeld);
            }, 'text');


        });
        
        //group appointment modal open
        $( "a.group" ).click(function() {
            //alert('c');
            var $day_id = $( this ).attr('data-id');
            
            //alert($day_id);
            var $appt_id = $( this ).attr('data-appt-type-id');
            $( "a.btn-advanced-group" ).attr('data-id',$appt_id);
            $( "a.submit-grouper" ).attr('data-id',$appt_id);
            $('#group-remove-appt-btn').attr('data-id', $day_id);
            //fetch_appointment
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/fetch_appointment_group", {appt_id: $day_id}, function(data){
            
                //alert(data);
                data = $.parseJSON(data);
                data = data[0];
                console.log(data);

                $('#group_appointment_type_name').text(data['appointment_type_name']);
                $('#group_appointment_price_desc').text(data['appointment_price_desc']);
                //$('#group_appointment_short_desc').text(data['short_desc']);
                $('#group_trainer_name_bm').val(data['trainer_name_bm']);

            
            }, 'text');

             $.post("<?php echo base_url();?>index.php/organizer/booking_admin/get_a_golf_plan", {plan_id: $appt_id}, function(data){
            
                //alert(data);
                data = $.parseJSON(data);
                data = data[0];
                console.log(data);

                var current = data['current_booked'];
                var total = data['cap'];
                if ( current == total ) {
                    $('.g_form_alive').hide();
                    $('.g_form_full').show();
                }
                var available = total - current;
                $('#open_slots').html(available + ' available slots');
                $('#cap').html(total + ' total slots');
                $globalSlotTracker= available;
                $('#group_appointment_short_desc').text(data['short_desc']);
                $master_group_json = $.parseJSON(data['group_clients']);
                //$('#group_trainer_name_bm').text(data['trainer_name_bm']);

            
            }, 'text');

            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/get_group_dates", {plan_id: $appt_id}, function(data){
                //alert('yo1');
                //alert(data);
                data = $.parseJSON(data);
                //data = data[0];
                console.log(data);
                var html_var = "<span class='label pull-right'>Plan Dates:</span>";
                $.each(data, function(i, item) {
                html_var += "<b>" + item.human_date + "</b><br> " + item.start_readable + " <i class='icon icon-arrow-right'></i>" + item.end_readable + "<br>";
                });
                $("#bulk_group_date").html(html_var);


            
            }, 'text');
           
            $('#myModalGroupDetails').modal('show');
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
            $('.generic_loader').show();
            $('#step1').hide('fast');
            $appointment_type_flag = "static"; 
            $iteration_holder = $('#iteration' + $(this).attr('id') ).val();
            //alert($iteration_holder);
            appointment_type_id = $( this ).attr('id');
            //alert(appointment_type_id);
            appointment_type_name = $( this ).attr('data-name');
            $appointment_literal_price = $( this ).attr('data-literal-price');
            if(isNaN($appointment_literal_price) == true){
                $appointment_literal_price = 0;
            }
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
                  $('.generic_loader').hide();
                  
                  $('#step2').show('fast');
                } else {
                //the system found a conflict
                $('.generic_loader').hide();
                $('#step1').show('fast');
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
            }else{
                $('.generic_loader').show();
                $('#locate_account_holder').hide();
            }
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/ask_if_golfer", {e_sub: customer_email_submitted}, function(data){
            //alert('called');
            //alert(data);
            $('.generic_loader').hide();
            if(data == "false"){
                $('#hold_email_shown').val(customer_email_submitted); 
                $('#email_not_found').text(customer_email_submitted);
                $('#unfound_email_holder').show();
                

            } else {
            //the email has been found, return json of people
            //alert(data);
            var result_set = jQuery.parseJSON(data);
            $('#golfers_found_holder').empty();
            //hold the id for the global email
            $email_id_held = result_set[0];
            $.each(result_set[1], function(index, element) {
                var table_html = '<tr><td>' + element['full_name_a'] + '</td><td><a href="javascript:void(0);" class="btn btn-success final-book-human" data-final-human-name="' + element['full_name_a'] + '" data-final-human-id="' + element['ID_auth_a'] + '" id="book_with' + element['ID_auth_a'] + '">Book this Appointment</a></td></tr>';
                $('#golfers_found_holder').append(table_html);
                
            });
            $('#golfers_found').show('fast');
            }
        }, 'text');
        });
        //create a new customer and then book an appointment
        $( "#create_and_book_btn" ).click(function() {
            $('.generic_loader').show();
            $('#unfound_email_holder').hide();
            create_new_email = $( '#hold_email_shown' ).val();
            create_full_name = $( '#full_name' ).val();
            create_age = $( '#age' ).val();
            create_gender = $( '#gender' ).val();
            create_phone = $( '#phone_a' ).val();
            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/create_golfer", {create_new_email: create_new_email, create_full_name: create_full_name, create_age: create_age, create_gender: create_gender, create_phone: create_phone}, function(data){
            //alert('calledz');
            //alert(data);
            //$('#unfound_email_holder').hide();
            $('.generic_loader').hide();
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
                $('#appointment_phone').text(data['phone_a']);

            
            }, 'text');
            
        });

        $(document).on("click", "#remove-appt-btn, #group-remove-appt-btn", function() {
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
            create_phone = $( '#phone_c' ).val();
            create_age = $( '#age_2' ).val();
            create_gender = $( '#gender_2' ).val();

            $.post("<?php echo base_url();?>index.php/organizer/booking_admin/create_golfer", {create_full_name: create_full_name, create_age: create_age, create_gender: create_gender, skip_email_create: $email_id_held, create_phone: create_phone}, function(data){
              //alert(data);
              var temp_name = $('#full_name_2').val();
              var table_html = '<tr><td>' + temp_name + '</td><td><a href="javascript:void(0);" class="btn btn-success final-book-human" data-final-human-name="' + temp_name + '" data-final-human-id="' + data + '">Book this Appointment</a></td></tr>';
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
                appointment_email: customer_email_submitted,
                appointment_literal_price: $appointment_literal_price
            }, function(data)
            {
                $('#golfers_found').hide('fast');
                $('#golfers_found').html('<div class="alert alert-success"><h2>Your Appointment has been Booked!</h2>Your appointment is on ' + human_readable_date + ': ' + human_readable_time + ' <icon class="icon-arrow-right"></i> ' + human_readable_end_minute_time + '<br><br>We Look forward to Seeing You!</div>');
                $('#golfers_found').show('slow');
                $global_refresh_done = true;
                //setInterval(function(){
                    //window.location.replace("<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $last_part_date_url;?>");
                //},5000);
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
        if($global_refresh_done){
            window.location.replace("<?php echo base_url();?>index.php/organizer/booking_admin/today/<?php echo $last_part_date_url;?>");
        }
        
    });

    $('#myModalGroupDetails').on('hidden', function () {
        $('.g_form_alive').show();
        $('.g_form_kill').hide();
        $('.g_form_hide').hide();
        $('.group-appointment-booked-holder').hide();
        $('.group-appointment-detail-holder').show();
        $('#g_name').val('');
        $('#g_email').val('');
        $('#g_phone').val('');
        
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
   $( "td.td-details-action" ).hover(function() {

        $( this ).css('background-color','#99cc99');
        $( this ).find('.td-details-action-shown').show('fast');
         $( this ).css('-webkit-box-shadow','0 4px 4px -2px #000000');
      
    }, function() {
        $( this ).css('background-color','');
         $( this ).find('.td-details-action-shown').hide('fast');
         $( this ).css('-webkit-box-shadow','0px 0px 0px 0px #000000');
    });

   $( ".pro_clicked_div" ).hover(function() {

        $( this ).css('background-color','#ddfcdd');
     
         $( this ).css('-webkit-box-shadow','0 4px 4px -2px #000000');
      
    }, function() {
        if($( this ).attr('id') != '<?php echo $this->session->userdata('id_op');?>' )
        $( this ).css('background-color','');
    
         $( this ).css('-webkit-box-shadow','0px 0px 0px 0px #000000');
    });

   

   $( ".pro_clicked_div" ).click(function() {
        var hold_pro_id = $( this ).attr('id');
        $('#pro_clicked').val(hold_pro_id);
        console.log($('#pro_clicked').val());
        $( "#pro_clicked_form" ).submit();
      
    });

   $.backstretch("<?php echo base_url();?>img/big_backer_2.png");
   $('.carousel').carousel();

    //$(document).ready(function() {
    //var isIE = navigator.userAgent.indexOf(' MSIE ') > -1;
      //if(isIE) {
          //$('.modal').removeClass('fade');
      //}
    //});


 
</script>
