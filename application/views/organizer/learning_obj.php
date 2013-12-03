<div class="dashRow">
      <div class="row-fluid">
        <div class="span12">
          <h2 class="dashHead"><i class="icon-book"></i> Learning Objectives:</h2>
          <div class="tabbable">
            <div class="dashWidget noPadding" style="height:auto !important;">
              <!--subhead info about session-->
              <div class="subdashHead" style="border:none;">
                <div class="row-fluid">
                  <div class="span6"> <br>
                    <?php echo $grey_title_params;?>
                    <?php if($show_success!='false'){?><span class="alert alert-success pull-left">Learning Objective Updated!</span><?php } ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-content ui-layout-content"><!--tab content-->

                <ul class="nav nav-tabs">
                  <li class="active" id="twenty" style="margin-left:10px;"><a href="#1" data-toggle="tab" class="clean-tabs">Learning Objectives</a></li>
                  <li id="twenty"><a href="<?php echo base_url();?>index.php/organizer/file_up_sess/members_area/<?php echo $encoded_url_ref;?>" class="clean-tabs">File Upload</a></li>
                  <li id="twenty"><a href="<?php echo base_url();?>index.php/organizer/messages_sess/members_area/<?php echo $encoded_url_ref;?>" class="clean-tabs">Messages</a></li>
                </ul>
                <!--learning obj tab -->
                <div class="tab-pane active" id="1" style="border:none; background:#fff;height:435px;">
                  <div class="row-fluid">
                    <div class="span6">
                      <h3>List of Learning Objectives for XYZ:</h3>
                      <br>
                      <?php
                      $marker = 0;
                      foreach($loop_obj as $learning_obj){
                      $marker +=1;
                      ?>
                      <!--start-->
                        <div class="learning-obj-box" id="m<?php echo $learning_obj->ID_auth_e;?>"> <img src="<?php echo base_url();?>img/Paper-<?php if($learning_obj->status_e=='approved'){?>add<?php } ?><?php if($learning_obj->status_e=='pending'){?>warning<?php } ?><?php if($learning_obj->status_e=='denied'){?>x<?php } ?>.png">
					                          <h5>Learning Objective #LSES<?php echo $learning_obj->ID_auth_e;?>: <?php if($learning_obj->status_e=='approved'){?><i class="label label-success">Approved</i><?php } ?><?php if($learning_obj->status_e=='pending'){?><i class="label label-warning">Pending Approval</i><?php } ?><?php if($learning_obj->status_e=='denied'){?><i class="label label-important">Denied</i><?php } ?>
					                            <span class="pull-right" style="font-size:14px">
					                              <a href="" id="lo_edit_toggle"><i class="icon-edit"></i>edit&nbsp;&nbsp;</a>
					                              <a href="javascript:void(0);" class="red-href" onclick="unset_learning_obj('<?php echo $learning_obj->ID_auth_e;?>')"><i class="icon-remove-sign"></i>delete</a>
					                            </span>
					                          </h5>
					                          <p><?php echo $learning_obj->description_e;?></p>
					                          <!--edit toggle-->
					                          <div id="lo_edit_toggle_section" style="display:none;">
					                             <form method="post" action="<?php echo base_url();?>index.php/organizer/learning_obj/members_area/<?php echo $encoded_url_ref;?>">
					                              <textarea rows="5" class="input-xxlarge" placeholder="Edit this Learning Objective" name="edited_text"><?php echo $learning_obj->description_e;?></textarea>
					                              <button class="btn" type="submit" name="edit_on" value="<?php echo $learning_obj->ID_auth_e;?>"> Edit Learning Objective</button>
					                            </form>
					                          </div>
					                          <!--end edit Toggle-->
                      </div>
                      <!--end-->
                      <?php } ?>
                      <div class="learning-obj-box"> <img src="<?php echo base_url();?>img/Paper-add.png">
                        <h5>Learning Objective #1: <i class="label label-success">Approved</i>
                          <span class="pull-right" style="font-size:14px">
                            <a href="" id="lo_edit_toggle"><i class="icon-edit"></i>edit&nbsp;&nbsp;</a>
                            <a href="" class="red-href"><i class="icon-remove-sign"></i>delete</a>
                          </span>
                        </h5>
                        <p>this is the truncated description of the learning objective. truncated description of the learning objec.truncated description of the learning objec...</p>
                        <!--edit toggle-->
                        <div id="lo_edit_toggle_section" style="display:none;">
                           <form method="post" action="<?php echo base_url();?>index.php/organizer/learning_obj/members_area/<?php echo $encoded_url_ref;?>">
                            <textarea rows="5" class="input-xxlarge" placeholder="Edit this Learning Objective" name="edited_text"></textarea>
                            <button class="btn" type="submit" name="edit_on" value=""> Submit Learning Objective</button>
                          </form>
                        </div>
                        <!--end edit Toggle-->
                      </div>

                      <div class="learning-obj-box"> <img src="<?php echo base_url();?>img/Paper-warning.png">
                        <h5>Learning Objective #2: <i class="label label-warning">Pending</i><span class="pull-right" style="font-size:14px"> <a href="" id="lo_edit_toggle"><i class="icon-edit"></i>edit&nbsp;&nbsp;</a> <a href="" class="red-href"><i class="icon-remove-sign"></i>delete</a> </span></h5>
                        <p>this is the truncated description of the learning objective. truncated description of the learning objec.truncated description of the learning objec...</p>
                         <!--edit toggle-->
                        <div id="lo_edit_toggle_section" style="display:none;">
                           <form>
                            <textarea rows="5" class="input-xxlarge" placeholder="Edit this Learning Objective"></textarea>
                            <button class="btn"> Submit Learning Objective</button>
                          </form>
                        </div>
                        <!--end edit Toggle-->
                      </div>

                      <div class="learning-obj-box"> <img src="<?php echo base_url();?>img/Paper-x.png">
                        <h5>Learning Objective #3: <i class="label label-important">Denied</i><span class="pull-right" style="font-size:14px"> <a href="" id="lo_edit_toggle"><i class="icon-edit"></i>edit&nbsp;&nbsp;</a> <a href="" class="red-href"><i class="icon-remove-sign"></i>delete</a> </span></h5>
                        <p>this is the truncated description of the learning objective. truncated description of the learning objec.truncated description of the learning objec...</p>
                         <!--edit toggle-->
                        <div id="lo_edit_toggle_section" style="display:none;">
                           <form>
                            <textarea rows="5" class="input-xxlarge" placeholder="Edit this Learning Objective"></textarea>
                            <button class="btn"> Submit Learning Objective</button>
                          </form>
                        </div>
                        <!--end edit Toggle-->
                      </div>


                    </div>

                    <!--right side-->
                    <div class="span5">
                      <h3>Create a new Learning Objective below:</h3>
                      <br>
                      <p>this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. </p>
                      <form method="post" action="<?php echo base_url();?>index.php/organizer/learning_obj/members_area/<?php echo $encoded_url_ref;?>">
                        <textarea rows="5" class="input-xxlarge" name="description"></textarea>
                        <button class="btn" type="submit" value="yes" name="submit_new_obj"> Submit Learning Objective</button>
                      </form>
                      <br>
                    </div>
                  </div>
                  <!--end row-->

                </div>
                <!--end tab pane-->
<!--end learning-obj tab-->
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

function unset_learning_obj(do_me){
//alert(do_me);

$('#m'+do_me).css('background-color','#ffa5a5')
$('#m'+do_me).slideUp('fast',function() {$('#m'+do_me).remove()});
$.post("<?php echo base_url();?>index.php/organizer/learning_obj/unset_learning_obj", {learning_obj: do_me}, function(data){
//alert(data);
}, 'json');
}

</script>

