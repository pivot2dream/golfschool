<div class="dashRow">
      <div class="row-fluid">
        <div class="span12">
          <h2 class="dashHead"><i class="icon-book"></i> Learning Objectives:</h2>
          <div class="tabbable">
            <div class="dashWidget noPadding" style="height:auto !important;">
              <!--subhead info about session-->
              <div class="subdashHead" style="border:none;">
                <div class="row-fluid">
                  <div class="span3"> <br>
                  <?php echo $grey_title_params;?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-content ui-layout-content"><!--tab content-->

                <ul class="nav nav-tabs">
                  <li id="twenty" style="margin-left:10px;"><a href="<?php echo base_url();?>index.php/organizer/learning_obj/members_area/<?php echo $encoded_url_ref;?>" class="clean-tabs">Learning Objectives</a></li>
                  <li id="twenty"><a href="<?php echo base_url();?>index.php/organizer/file_up_sess/members_area/<?php echo $encoded_url_ref;?>" class="clean-tabs">File Upload</a></li>
                  <li class="active "id="twenty"><a href="#3" data-toggle="tab" class="clean-tabs">Messages</a></li>
                </ul>

                <!-- messages tab -->
                <div class="tab-pane active" id="3" style="border:none; background:#fff;height:435px">
                  <div class="row-fluid">
                    <div class="span6">
                      <h3>Messages for Learning Objectives XYZ:</h3>
                      <br>
                      <div class="message-obj-box"> <img src="img/favicon.png">
                        <h5>From: CE-Go<br>
                          <i>12/12/2012</i></h5>
                        <p>this is the truncated description of the learning objective. truncated description of the learning objec.truncated description of the learning objec...</p>
                      </div>
                      <div class="message-obj-box"> <img src="img/geoff-profile.png" class="">
                        <h5>You:<br>
                          <i>12/13/2012</i></h5>
                        <p>this is the truncated description of the learning objective. truncated description of the learning objec.truncated description of the learning objec...</p>
                      </div>
                      <div class="message-obj-box"> <img src="img/favicon.png">
                        <h5>From: CE-Go<br>
                          <i>12/14/2012</i></h5>
                        <p>this is the truncated description of the learning objective. truncated description of the learning objec.truncated description of the learning objec...</p>
                      </div>
                    </div>

                    <!--right side-->
                    <div class="span5">
                      <h3>Compose Message:</h3>
                      <br>
                      <form>
                        <textarea rows="10" class="input-xxlarge"></textarea>
                        <button class="btn"> Send Message</button>
                      </form>
                      <br>
                    </div>
                  </div>
                  <!--end row-->

                </div>
              </div>
            </div>
            <!--end tab content-->
          </div>
          <!--end dash widget-->
        </div>
        <!--end tabbable-->
      </div>
    </div>
  </div>
</div>
<!-- END view-holder -->
<footer>
  <div class="footer-wrap"> This is the footer </div>
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
  $("a#lo_edit_toggle").click(function(e) {
	  e.preventDefault();
	  $(this).parents(".learning-obj-box").children("div").slideToggle();
  });
});
</script>

