<div class="dashRow">
    <div class="row-fluid">
        <div class="span3">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;2013 Teacher of the Year Award:</h4>
                <div class="row-fluid" style="background-color:white;">
                            <img src="<?php echo base_url();?>img/doug_logo.png">
                </div>
            </div>  
            <br>
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;Our Location:</h4>
                <div style="background-color:white;">
                    <p style="padding-left:10px;">
                            <div class="well" style="margin-right:10px;margin-left:10px;margin-top:-10px;">
                                <a href="https://www.google.com/maps/place/Precision+Golf+School/@44.1404646,-123.2008761,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0xb1ee22d84880e93e" target="_blank">
                                    <img src="<?php echo base_url();?>img/google_maps_icon_64.png" class="pull-right">
                                </a>
                            <b>Fiddler's Green</b><br>
                            91292 Hwy. 99N<br>
                            Eugene, OR 97402<br>
                            <b>541-284-7992</b>
                            </div>
                            
                        </p>   
                </div> 
            </div>                  
        </div>
        <div class="span9">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
              <h2>&nbsp;News and Upcoming Events for Precision Golf School:</h2>
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
                    <div class="span12">
                        <br>
                        <div style="background-color:white;padding:15px;">
                        <?php

                        //****************************************************************************//
                        //create the grey header attribute
                        //****************************************************************************//
                        foreach($news_shown as $news){
                        ?>
                        <?php echo $news->news_html; ?>  

                        <?php
                        }
                        ?>
                        </div>
                            
                    </div>
                    
                </div>
                <br>
            </div>        
        </div>
    </div>
</div>    

   
<script>
   $.backstretch("<?php echo base_url();?>img/big_backer_2.png");
   $('.carousel').carousel();

 
</script>
