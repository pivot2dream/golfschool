         <div class="dashRow">
            <div class="row-fluid">

                <div class="span6">

                    <h2 class="dashHead"><i class="icon-book"></i> Manage Upcoming Events with CE-GO!</h2>
                    <div class="dashWidget noPadding">

<?php


foreach($events_passed as $event_passed){

//below turns unix timestamp into human readable timestamp & encrypts url passed
//bad form for 'view'? maybe, but only used to format timestamp, and prevents primary array loop in model
	$start_date = $this->login_prove_and_common->human_time_custom($event_passed->start_event);
	$end_date = $this->login_prove_and_common->human_time_custom($event_passed->end_event);

	$secure_event_id = $this->login_prove_and_common->encode_common($event_passed->event_id . '***1');

?>
                        <div class="projectBox">

                            <h4><?php echo $event_passed->event_name;?></h4>
                            <p style="margin-bottom:0px;"><?php echo $event_passed->event_notes;?></p>
                            <div>
                            	<div class="pull-left">
                            	<span style="color:#2ea6f2;">starts:</span> <?php echo $start_date;?>&nbsp;&nbsp;<i class="icon-arrow-right"></i>&nbsp;&nbsp;<span style="color:#2ea6f2;">ends:</span> <?php echo $end_date;?>
                            	</div>
                            	<div class="pull-right">
                            	<i class="icon-map-marker"><?php echo $event_passed->address_event;?>, <?php echo $event_passed->event_zip;?></i>
                            	</div>
                            	<div style="clear:both;"></div>
                            </div>
                            <div class="alert alert-info">
                            	<a href="#" class="">Edit Basic Information</a> |
                            	<a href="#" class="">Event Discussion</a> |
                            	<a href="#" class="">Marketing Materials</a> |<br>
                            	<a href="<?php echo base_url() .'index.php/organizer/calendar_view/members_area/' . $secure_event_id;?>" class="">Event Schedule / Sessions</a> |
                            	<a href="#" class="">Add/Edit Event Speakers</a>
                            </div>

                            <div class="pull-left">
                            <img alt="profile image" src="<?php echo base_url();?>img/x_icon.png" style="width:15px;height:15px;"/>
                            Event Marketing Materials Uploaded and Approved<br>
                            <img alt="profile image" src="<?php echo base_url();?>img/x_icon.png" style="width:15px;height:15px;"/>
                            Seasion Learning Objectives Approved<br>
                            <img alt="profile image" src="<?php echo base_url();?>img/x_icon.png" style="width:15px;height:15px;"/>
                            Payment to CE-GO has been recieved<br>

                            </div>

                            <div class="pull-right">
							<a href="#" class="btn" class="pull-right" style="margin-right:0px;">View / Add Attendees</a>
                            </div>
                            <div style="clear:both;"></div>


                </div>
 <?php } ?>
                </div>
           </div>

                <div class="span6">
                    <h2 class="dashHead"><i class="icon-inbox"></i> What needs to happen before i can register attendees?</h2>
                    <div class="dashWidget noPadding">
                         <div class="message-box">

						                            <p>Everything you need to do, to create and manage your new event is available to you right now through the system. The only restricted action will be the registration of event attendees until the following tasks are complete: </p>

                        </div>
                        <div class="message-box">
                            <img alt="profile image" src="<?php echo base_url();?>img/x_icon.png" />
                            <h5>Event Marketing Materials Must be Uploaded and Approved</h5>
                            <p>Part of our requirements to authorize the event include reviewing the intendeded marketing material you plan on using for your event.</p>
                            <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt"></i> Learn More</a>
                        </div>
                        <div class="message-box">
                            <img alt="profile image" src="<?php echo base_url();?>img/x_icon.png" />
                            <h5>Session (Lecture) Content must be approved by CE-GO</h5>
                            <p>We need to make sure that the learning objectives outlined in each session at your event, meet our requirements</p>
                            <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt"></i> Learn More</a>
                        </div>
                        <div class="message-box">
                            <img alt="profile image" src="<?php echo base_url();?>img/x_icon.png" />
                            <h5>Payment to CE-GO must be recieved. </h5>
                            <p>Ready to make your payment to CE-GO, click the 'learn more' button below to review payment options.</p>
                            <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt"></i> Learn More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    <div class="pagination">
        <ul>
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
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