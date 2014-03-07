<div>		 
     <div class="dashRow">
            <div class="row-fluid">

              

                <div class="span12">
                    
                    <div class="">
                      <h2>Edit News Page</h2>
                       <div class="editor well news_holder" style="background-color:white;">
                          <?php
                          foreach($news_shown as $news){
                          ?>
                          <?php echo $news->news_html; ?>  

                          <?php
                          }
                          ?>
                      </div>
                      <a href="javascript:void(0)" id="news_btn" class="btn btn-success">Save Above Content</a>
                      <hr>
                      <h2>Edit About School Page</h2>
                      <div class="editor well about_holder" style="background-color:white;">
                          <?php
                          foreach($news_shown as $news){
                          ?>
                          <?php echo $news->about_school; ?>  

                          <?php
                          }
                          ?>
                      </div>
                      <a href="javascript:void(0)" id="about_btn" class="btn btn-success">Save Above Content</a>

                      <script type="text/javascript" src="<?php echo base_url();?>/js/jquery.notebook.js"></script>
                      <script type="text/javascript">
                          $(document).ready(function() {
                              $('.editor').notebook({
                                  autoFocus: false,
                                  placeholder: 'Type something awesome...'
                              });
                          });
                      </script>
                    </div>
                </div>
            </div>
        </div>
      </div>




    </div> <!-- END view-holder -->


</div> <!-- END Layout Center -->


    <script>
	$(function() {
    
    $(document).on("click", "#news_btn", function() {
      var html_held = $('.news_holder').html();
      var what_held = "news";
      var id_held = "no";
      $.post("<?php echo base_url();?>index.php/organizer/news/update_news", {html_held: html_held, what_held: what_held, id_held: id_held}, function(data){
            alert('Your Changes Have Been Saved');
            console.log(data);
            
            
        }, 'text');
    });

    $(document).on("click", "#about_btn", function() {
      var html_held = $('.about_holder').html();
      var what_held = "about";
      var id_held = "no";
      $.post("<?php echo base_url();?>index.php/organizer/news/update_news", {html_held: html_held, what_held: what_held, id_held: id_held}, function(data){
            alert('Your Changes Have Been Saved');
            console.log(data);
            
            
        }, 'text');
    });
  });

   
   
	</script>