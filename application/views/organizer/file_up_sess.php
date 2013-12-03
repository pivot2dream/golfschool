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
                  <li id="twenty" id style="margin-left:10px;"><a href="<?php echo base_url();?>index.php/organizer/learning_obj/members_area/<?php echo $encoded_url_ref;?>" class="clean-tabs">Learning Objectives</a></li>
                  <li class="active" id="twenty"><a href="#2" data-toggle="tab" class="clean-tabs">File Upload</a></li>
                  <li id="twenty"><a href="<?php echo base_url();?>index.php/organizer/messages_sess/members_area/<?php echo $encoded_url_ref;?>" class="clean-tabs">Messages</a></li>
                </ul>

                <!--file upload tab-->
                <div class="tab-pane active" id="2" style="border:none; background:#fff;height:435px">
                  <div class="row-fluid">
                    <div class="span6">
                      <h3>Files for Learning Objectives for XYZ:</h3>
                      <br>
                      <?php foreach($files_results_loop as $item){?>
                      <div class="learning-obj-box" id="m<?php echo $item->ID_auth_f;?>">
                      	<img src="<?php echo base_url();?>img/File-<?php if($item->file_ext_f=='.png'){echo 'png';}if($item->file_ext_f=='.jpg'){echo 'jpg';}if($item->file_ext_f=='.jpeg'){echo 'jpg';}if($item->file_ext_f=='.doc'){echo 'doc';}if($item->file_ext_f=='.docx'){echo 'doc';}if($item->file_ext_f=='.xls'){echo 'xls';}if($item->file_ext_f=='.wmv'){echo 'wmv';}if($item->file_ext_f=='.pdf'){echo 'pdf';}if($item->file_ext_f=='.csv'){echo 'xls';}?>.png">
                        <h5><?php echo $item->file_name_f;?><span class="pull-right" style="font-size:14px"> <a href="<?php echo base_url() .'session_upload/' . $item->session_id_f . '/'. $item->file_name_f;?>"><i class="icon-download-alt"></i>download&nbsp;&nbsp;</a> <a href="javascript:void(0);" onclick="unset_file_obj('<?php echo $item->ID_auth_f;?>')" class="red-href"><i class="icon-remove-sign"></i>delete</a> </span></h5>
                        <p><?php echo $item->file_desc_f;?></p>
                        <h6><i>author: <?php echo $item->author_name_f;?></i></h6>
                      </div>
                      <?php } ?>
                    </div>

                    <!--right side-->
                    <div class="span5">
                      <h3>Upload Files for Learning Objective XYZ:</h3>
                      <br>
                      <p>this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. this is some help text. </p>
                      <div  class="file-lo">
                        <h4>Allowed File Types</h4>
                        <ul>
                          <li><img src="<?php echo base_url();?>img/File-doc.png"/>.doc</li>

                          <li><img src="<?php echo base_url();?>img/File-pdf.png"/>.pdf</li>
                          <li><img src="<?php echo base_url();?>img/File-xls.png"/>.xls</li>
                          <li><img src="<?php echo base_url();?>img/File-jpg.png"/>.jpg</li>
                          <li><img src="<?php echo base_url();?>img/File-png.png"/>.png</li>
                          <li><img src="<?php echo base_url();?>img/File-gif.png"/>.gif</li>
                          <li><img src="<?php echo base_url();?>img/Video-wmv.png"/>.wmv</li>
                        </ul>
                      </div>
                      <br>
                      <form method="post" enctype='multipart/form-data' action="<?php echo base_url();?>index.php/organizer/file_up_sess/members_area/<?php echo $encoded_url_ref;?>">
                        <div class="pull-right">
                        <p>details about uploaded document:</p>
                        <textarea name="description"></textarea>
                        </div>
                        <input name="userfile" type="file">
                        <br>
                        <button class="btn" name="submit_file_but" value="true" type="submit"> Upload File</button>
                      </form>
                      <?php
                      if($upload_error!='nope'){
                      ?>
                      <div class="alert danger-alert"><?php echo $upload_error; ?></div>
                      <?php
                      }
                      //print_r($upload_success_data);
                      ?>

                      <br>
                    </div>
                  </div>
                </div>
               <!--end file upload tab-->
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
function unset_file_obj(do_me){
//alert(do_me);

$('#m'+do_me).css('background-color','#ffa5a5')
$('#m'+do_me).slideUp('fast',function() {$('#m'+do_me).remove()});
$.post("<?php echo base_url();?>index.php/organizer/file_up_sess/unset_file_obj", {file_obj: do_me}, function(data){
//alert(data);
}, 'json');
}
</script>

