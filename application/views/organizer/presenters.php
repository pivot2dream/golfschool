<div class="dashRow">
      <div class="row-fluid">
        <div class="span6">
          <h2 class="dashHead"><i class="icon-plus"></i> Add a New Presenter:</h2>
          <div class="subdashHead">
          <div class="row-fluid">


              <div class="span3">
              	<form class="span4" method="post" action="<?php echo base_url();?>index.php/organizer/presenters/members_area">

                <div class="control-group">
                    <label class="control-label" for="">Name:</label>
                    <div class="controls">
                      <input type="text" id="" placeholder="Full name" name="name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Title:</label>
                    <div class="controls">
                      <input type="text" id="" placeholder="Title" name="title">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Bio:</label>
                    <div class="controls">
                      <textarea id="" placeholder="Short bio about presenter" style="height:140px;" name="bio"></textarea>
                    </div>
                    <button class="btn subMBbtn">create presenter</button>
                  </div>
              </form>

              </div>

           <div class="pull-right" style="width:250px;">
			<h3>Add and Manage Presenters...</h3>
			          <p>When you create events in the system, you will need to correlate presenters to each specific session. From this area you can quickly add presenters. Start off by using the fields to the left, and enter in basic information that attendees will be able to see for each presenter. After a presenter has been created, you will be able to edit their content (to the right), and add a profile picture of the presenter in question. <br><br> When you start buidling sessions for your event, you will see this list of presenters and be able to add them to the sessions which they are responsible for. </p>
</div>
            </div>






        </div></div>
        <!--right col-->
        <div class="span6">
                    <h2 class="dashHead"><i class="icon-edit"></i> Edit Presenter:&nbsp;&nbsp;<?php if($update_event_happened!='no'){?><span class="alert alert-success">Presenter Info updated</span><?php } ?></h2>
                    <div class="dashWidget noPadding">


                        <?php
                        foreach($presenters_list as $presenter){
                        $profile_pic_ref = 'img/org_presenter_pics/'. $presenter->presenter_id_pp .'.jpg';
                        ?>
                        	<div class="message-box" id="m<?php echo $presenter->presenter_id_pp;?>">
                        	<?php if (file_exists($profile_pic_ref)) {?><img src="<?php echo base_url();?>img/org_presenter_pics/<?php echo $presenter->presenter_id_pp; ?>.jpg?r=<?php echo rand(); ?>" /> <?php } else { ?><img src="<?php echo base_url();?>img/avatar-profile.png" /><?php } ?>

                            <h5 id="toggle_subMB"><?php echo $presenter->presenter_name_pp;?> </h5>
                            <p><?php echo $presenter->presenter_title_pp;?></p>
                            <span class="pull-right" style="font-size:14px">
                            <a href="#m<?php echo $presenter->presenter_id_pp;?>" id="toggle_subMB"><i class="icon-edit"></i>edit&nbsp;&nbsp;</a>
                            <a href="javascript:void(0);" onclick="unset_presenter('<?php echo $presenter->presenter_id_pp; ?>')" class="red-href"><i class="icon-remove-sign"></i>delete</a>
                            </span>
                        </div>

                        <div class="subMessageBox" id="subMB"><!--hidden form-->

                   <form method="post" action="<?php echo base_url();?>index.php/organizer/presenters/members_area" enctype='multipart/form-data'>
                        	<div class="subdashHead">
                                <div class="row-fluid">
                                    <div class="span4">
                                    <h4>Change Photo</h4>
                                      <?php if (file_exists($profile_pic_ref)) {?><img src="<?php echo base_url();?>img/org_presenter_pics/<?php echo $presenter->presenter_id_pp; ?>.jpg?r=<?php echo rand(); ?>" style="width:150px;" /> <?php } else { ?><img src="<?php echo base_url();?>img/avatar-profile.png" style="width:150px;" /><?php } ?>

                                      <input type="file" name="<?php echo $presenter->presenter_id_pp;?>"/>
                                    </div>

                                    <div class="span3">
                                      <div class="span4 form-inline">

                                      <div class="control-group">

                                          <label class="control-label" for="">Name:</label>
                                          <div class="controls">
                                            <input type="text" id="" placeholder="Full name" value="<?php echo $presenter->presenter_name_pp;?>" name="name_e">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="">Title:</label>
                                          <div class="controls">
                                            <input type="text" id="" placeholder="Title" value="<?php echo $presenter->presenter_title_pp;?>" name="title_e">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="">Bio:</label>
                                          <div class="controls">
                                            <textarea id="" placeholder="Short bio about presenter" name="bio_e"><?php echo $presenter->presenter_bio_pp;?></textarea>
                                            <input type="hidden" name="on_me_e" value="<?php echo $presenter->presenter_id_pp;?>">
                                          </div>
                                        <button class="btn subMBbtn">submit changes</button>

                                        </div>

                                    </div>
                                    </div>
                              </div>
                          </div>
                        </div> <!--end hidden form-->
                  </form>
                       <?php
                       }
                       ?>
                    </div>
                </div>
        <!--end right col-->
      </div>
    </div>
  </div>
  <!-- END view-holder -->
  <footer>
    <div class="footer-wrap"></div>
  </footer>
</div>
<!-- END Layout Center -->

<!--Modal Window Templates-->
<div class="modal fade" id="myModal">
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
</div>
<script>
$(document).ready(function() {
$("a#toggle_subMB").click(function () {
	//alert($(this).parent().parent().next("div").attr("class"));//subMessageBox
	$(this).parents(".message-box").next("div").slideToggle()

});});

function unset_presenter(do_me){
//alert(do_me);
$('#m'+do_me).slideUp('fast');
$('#m'+do_me).parents(".message-box").next("div").remove();
$.post("<?php echo base_url();?>index.php/organizer/presenters/unset_presenter", {presenter: do_me}, function(data){
}, 'json');
}
</script>

