<div class="dashRow">
    <div class="row-fluid">
        <div class="span3">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;2012 Teacher of the Year Award:</h4>
                <div class="row-fluid" style="background-color:white;">
                            <img src="<?php echo base_url();?>img/doug_logo.png">
                </div>
            </div>                  
        </div>
        <div class="span9">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;Precision Golf School Has Been Dedicated to top notch stuff for 10 + years</h4>
                <div class="row-fluid" style="background-color:white;">
                    <div class="span12">
                        <br>
                     <div class="span4">
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
                     <div class="span7">
                        <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                            <h4 style="padding: 3px 3px 3px 3px;">&nbsp;Our Location:</h4>
                            <div style="background-color:white;">
                                <p style="padding-left:10px;">
                                <div class="well" style="margin-right:10px;margin-left:10px;margin-top:-10px;">
                                    <div class="pull-right">
                                        <textarea id="m" placeholder="Your Message..." style="height:55px;"></textarea><br>
                                        <a href="javascript:void 0" class="btn btn-success pull-right" id="sendme">Send Message</a>
                                    </div>
                                
                                <input class="input input-large" placeholder="Your Name" id="n">
                                <input class="input input-large" placeholder="Your Email" id="e">
                                </div>
                                
                                </p>   
                            </div> 
                         </div>   
                     </div>
                     <div style="clear:both;"></div>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2863.2328691605917!2d-123.20171799999999!3d44.140442999999976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54c10285d6c66ced%3A0xb1ee22d84880e93e!2sPrecision+Golf+School!5e0!3m2!1sen!2sus!4v1395888708151" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                     <br>
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
    
    $( "#sendme" ).click(function() {
     
            create_name = $( '#n' ).val();
            create_addy = $( '#e' ).val();
            create_message = $( '#m' ).val();
            $.post("<?php echo base_url();?>index.php/organizer/contactus/sendit", {return_email: create_addy, message: create_message, namer: create_name, submit: 'submit'}, function(data){
            //alert(data);
            alert('Your Message has been Sent, Thank You!');
            $( '#n' ).val('');
            $( '#e' ).val('');
            $( '#m' ).val('');

        }, 'text');
    });

 
</script>
