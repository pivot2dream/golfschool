<div class="dashRow">
    <div class="row-fluid">
        <div class="span3">
            <div class="well" style="padding:0px 0px 0px 0px;background-color:#bae6ba;">
                <h4 style="padding: 3px 3px 3px 3px;">&nbsp;2012 Teacher of the Year Award:</h4>
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
<h2>&nbsp;Our Staff at Precision Golf School:</h2>
                <div class="row-fluid" style="background-color:white;">
                    <div class="span12">
                        <br>
                        <table class="table" style="background-color:white;">
                        <?php

                        //****************************************************************************//
                        //create the grey header attribute
                        //****************************************************************************//
                        foreach($golf_pros as $pro){
                        ?>
                        <tr id="<?php echo $pro->ID_auth_t; ?>" class="pro_clicked_div">  
                            <td style="width:20%;">
                                <img src="<?php echo base_url();?>img/<?php echo $pro->loc_1_t; ?>" style="width:150px;margin-top:3px;" class="profile-special">
                            </td>    
                            <td>
                            <span class="label label-success pull-right"><?php echo $pro->email_name_t; ?></span>    
                            <h3><?php echo $pro->first_name_t; ?> <?php echo $pro->last_name_t; ?> - <?php echo $pro->address_shipping_t; ?></h3> 
                            <hr style="margin-top:2px;margin-bottom:2px;">
                            <?php echo $pro->notes_t; ?>
                            </td>
                                
                        </tr>    

                        <?php
                        }
                        ?>
                        </table>
                            
                    </div>
                    
                </div>
                <br>
            </div>        
        </div>
    </div>
</div>    

   
<script>
   $.backstretch("<?php echo base_url();?>img/big_backer_2.png");

 
</script>
