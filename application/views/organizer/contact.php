<div class="dashRow">
      <div class="row-fluid">
        <div class="span12">
          <h2 class="dashHead"><i class="icon-comment"></i>Contact Us:</h2>
          <div class="subdashHead">
          <div class="row-fluid">
              <div class="span4">

              	<img src="<?php echo base_url();?>img/Cego-Logo-Large.png" style="padding-top:30px;"/>

              </div>


              <div class="span3">

                <br>
                <p>
                Ce-Go Learning Syatems<br>
                Email@cegolearningsystems.com<br>
                (541)555-1234<br>
                9002 E. 28th<br>
                Eugene, Oregon<br>
                97401
                </p>
              </div>
            </div>
          </div>
          <div class="dashWidget" style="height:auto !important;">

            <form accept-charset="UTF-8" action="index.html" method="post" class="form-horizontal">
              <div class="row-fluid" style="border-bottom: 1px solid #EEE;">
                <div class="span5">
                  <legend>Your Contact Info</legend>

                  <div class="control-group error">
                    <label class="control-label" for="">First Name:</label>
                    <div class="controls">
                      <input type="text" id="first_name" placeholder="First Name">
                    <p class="help-block">error</p> </div>
                    </div>
                    <!--error text block-->

                  <div class="control-group">
                    <label class="control-label" for="">Last Name:</label>
                    <div class="controls">
                      <input type="text" id="first_name" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="">Email:</label>
                    <div class="controls">
                      <input type="text" id="first_name" placeholder="Email">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="">Phone:</label>
                    <div class="controls">
                      <input type="text" id="first_name" placeholder="Phone">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="">Comapny/Organization:</label>
                    <div class="controls">
                      <input type="text" id="zip" placeholder="Comapny/Organization">
                    </div>
                  </div>
                </div>
                <!--end span5-->
                <div class="span5">
                  <legend>Questions/Comments</legend>



                      <textarea rows="7" id="first_name" placeholder="..." style="width:430px;"></textarea>


                </div>
                <!--end span5-->
              </div>
              <!--end row-->
              </form>
              <div class="controls">
                  <button class="btn btn-primary" style="width:210px;margin-left:auto;margin-right:auto;display:block;">Send Message</button>
              </div>

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
