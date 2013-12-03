<div class="dashRow">
      <div class="row-fluid">
        <div class="span12">
          <h2 class="dashHead"><i class="icon-edit"></i> Edit Account Info:</h2>
          <div class="subdashHead">
          <div class="row-fluid">
              <div class="span2">


              <h4>Current Profile Picture</h4>
              <?php
              $profile_pic_ref = 'img/org_profile_pics/'. $this->session->userdata('id_o') .'.jpg';
              //echo $profile_pic_ref;
              ?>
              <form method='POST' enctype='multipart/form-data' action='<?php echo base_url();?>index.php/organizer/edit_account/members_area'>

			  			  								<?php if (file_exists($profile_pic_ref)) {?><img src="<?php echo base_url();?>img/org_profile_pics/<?php echo $this->session->userdata('id_o'); ?>.jpg?r=<?php echo rand(); ?>" style="width:170px;padding: 4px 4px 4px 4px;" class="well"/> <?php } else { ?><img src="<?php echo base_url();?>img/avatar-profile.png" style="width:130px;padding: 4px 4px 4px 4px;" class="well"/><?php } ?>


														<br><input type="file" name="<?php echo $this->session->userdata('id_o');?>"/>
														<input type="submit" name="submit_pictures" class="btn btn-success" value="upload new picture"/ style="margin-top:-125px;">
														<?php echo $picture_error;?>
														<!--<a href="accountc.php" style="font-size:0.8em;">picture not updating? refresh.</a>-->
			</form>


              </div>
<?php foreach($my_account as $account_val){?>
              <div class="span3">
              	<h4>Personal Info</h4>

                <p>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">name:</span><br>
                <?php echo $account_val->first_name_o;?> <?php echo $account_val->last_name_o;?>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">email:</span><br>
                <?php echo $account_val->email_name_o;?><br>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">phone:</span><br>
                <?php echo $account_val->phone_o;?><br>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">Address, City, State:</span><br>
                <?php echo $account_val->address_shipping_o;?><br>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">Zip:</span><br>
                <?php echo $account_val->zip_o;?>
                </div>
                </p>
              </div>
<?php } ?>
<?php foreach($my_company as $company_val){?>
              <div class="span3">
              	<h4>Company/Organization Info</h4>

                <p>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">company name:</span><br>
                <?php echo $company_val->company_name_l;?>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">main company phone:</span><br>
                <?php echo $company_val->phone_l;?>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">main company address:</span><br>
                <?php echo $company_val->addy_l;?>
                </div>
                <div style="padding-bottom:4px;">
                <span style="color:grey;">main company zip:</span><br>
        		<?php echo $company_val->zip_l;?>
        		</div>
                </p>
              </div>
<?php } ?>
            </div>
          </div>
          <div class="dashWidget" style="height:auto !important;">

            <form accept-charset="UTF-8" action='<?php echo base_url();?>index.php/organizer/edit_account/members_area' method="post" class="form-horizontal">
              <div class="row-fluid" style="border-bottom: 1px solid #EEE;">
                <div class="span5">
                  <legend>Personal Info</legend>
<?php foreach($my_account as $account_val){?>
                  <div class="control-group">
                    <label class="control-label" for="">First Name:</label>
                    <div class="controls">
                      <input type="text" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $account_val->first_name_o;?>">
                    </div>
                    <!--error text block-->
                    <!--<span class="help-block">error</span>--> </div>
                  <div class="control-group">
                    <label class="control-label" for="">Last Name:</label>
                    <div class="controls">
                      <input type="text" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $account_val->last_name_o;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Email:</label>
                    <div class="controls">
                      <input type="text" id="email_name" name="email_name" placeholder="Email" value="<?php echo $account_val->email_name_o;?>">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="">Phone:</label>
                    <div class="controls">
                      <input type="text" id="phone_name" name="phone_name" placeholder="Phone" value="<?php echo $account_val->phone_o;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Address:</label>
                    <div class="controls">
                      <input type="text" id="address_name" name="address_name" placeholder="Street, City, State" value="<?php echo $account_val->address_shipping_o;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Zip Code:</label>
                    <div class="controls">
                      <input type="text" id="zip_name" name="zip_name" placeholder="Zip Code" value="<?php echo $account_val->zip_o;?>">
                    </div>
                  </div>
                </div>
<?php } ?>
<?php foreach($my_company as $company_val){?>
                <!--end span5-->
                <div class="span5">
                  <legend>Company/Organization Info</legend>
                  <div class="control-group">
                    <label class="control-label" for="">Comapny/Organization Name:</label>
                    <div class="controls">
                      <input type="text" id="company_name" name="company_name" placeholder="Comapny/Organization Name" value="<?php echo $company_val->company_name_l;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Phone:</label>
                    <div class="controls">
                      <input type="text" id="company_phone" name="company_phone" placeholder="Phone" value="<?php echo $company_val->phone_l;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Address:</label>
                    <div class="controls">
                      <input type="text" id="company_address" name="company_address" placeholder="Street, City, State" value="<?php echo $company_val->addy_l;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Zip Code:</label>
                    <div class="controls">
                      <input type="text" id="company_zip" name="company_zip" placeholder="Zip Code" value="<?php echo $company_val->zip_l;?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for=""></label>

                  </div>
                </div>
                <!--end span5-->
              </div>
              <!--end row-->
<?php } ?>
              <div class="controls">
                  <button class="btn btn-primary" style="width:210px;margin-left:auto;margin-right:auto;display:block;" type="submit" name="submit_fields" value="do">Update Account Info</button>
              </div>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END view-holder -->
  <footer>
    <div class="footer-wrap"> </div>
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
