		 <div class="dashRow">
            <div class="row-fluid">

                <div class="span12">
                    <div id="chart_holder" style="height:300px;">
                    </div>  
                    <br>

                    <div style="padding-top:2px;padding-bottom:2px;">
                      <div class="pull-right">
                        <a href="javascript:void(0)" class="btn btn-small btn-info hide_paid_btn">filter by unpaid</a>
                        <a href="javascript:void(0);" class="btn btn-small btn-info" onclick="printDiv()"><i class="icon icon-print icon-white"></i></a>
                        <br>
                        <input id="searcher" placeholder="type to filter results..." class="pull-right">
                      </div>
                        <div class="well pull-left" style="padding-top:2px;padding-bottom:2px;">
                          <h4>Start Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date:</h4>
                          <input type="text" id="start_id" name="start_date" class="input-small" value="<?php echo $start_date;?>">&nbsp;&nbsp;&nbsp;<input type="text" id="end_id" name="end_date" class="input-small" value="<?php echo $end_date?>">
                          <a href="javascript:void(0)" class="btn btn-large btn-info search_appt">Search Records</a> csv <input type="checkbox" name="csv" id="csv" value="csv">
                        </div>  
                          <div style="clear:both;"></div>
                        
                 
                    </div>  
                    <div style="clear:both;"></div>

                    

                    <div class="well" style="margin-top:-10px;height:480px;overflow-y:auto;">
                      <table class="table table-stripped" id="main_results" border="1">
                        <?php 
                        //charting stuff
                        $unique_date_array= array();
                        $all_appointments_per_day= array();
                        $junior_appointments_per_day= array();
                        $adult_appointments_per_day= array();
                        $male_appointments_per_day= array();
                        $female_appointments_per_day= array();
                        $compare_date = "";
                        $count_all_appts = "no";
                        $count_all_appts_total = 0;
                        //charting stuff

                        foreach($result_for_report as $result){

                          ?>
                        <tr class="tr_hide <?php if($result->paid == "paid"){echo 'paid_hide';}?>">
                          <td><?php echo "<span class='label'>" . $result->human_date ." </span></br><b> ". $result->start_readable ." <i class='icon icon-arrow-right'></i> ". $result->end_readable . "</b>";   ?></td>
                          <td>
                            <?php echo $result->cust_name_bm;?><br>
                            <span class="label"><?php echo $result->appointment_email;?></span>
                          </td>
                          <td>
                            <?php echo $result->gender_a;?><br>
                            <?php echo $result->age_a;?><br>
                          </td>  
                          <td><?php echo $result->appointment_type_name;?></td>
                          <td><?php echo $result->appointment_price_desc;?></td>
                         <?php 
                         if($result->paid == "not paid"){
                          $class_passed = "btn-danger";
                          }else{
                          $class_passed = "btn-success";
                          }

                         ?>
                          <td><?php echo $result->appointment_type_flag;?></td>
                          <td><a href="javascript:void(0)" class="btn btn-small <?php echo $class_passed;?> flag-paid" data-id="<?php echo $result->ID_auth_bm; ?>">$</a></td>
                          <td><a href="javascript:void(0)" class="btn btn-small btn-danger remove_appt" data-id="<?php echo $result->ID_auth_bm; ?>">x</a></td>
                        </tr>
                       
                       <?php
                       //////////////////////////////////////


                       if($result->human_date != $compare_date){
                        array_push($unique_date_array, $result->human_date);
                        $compare_date = $result->human_date;
                        //
                        if ($count_all_appts!='no'){
                          array_push($all_appointments_per_day, $count_all_appts);
                        }
                        //reset the count cuz new date
                        $count_all_appts=0;

                      

                       }
                       $count_all_appts+=1;
                       $count_all_appts_total+=1;
                       
                       //////////////////////////////////////
                       //end for each
                       ////////////////////////////////////
                        } 
                       /////////////////////////////////////////// 
                       //end for each
                       ////////////////////////////////////////
                        $unique_date_array = array_reverse($unique_date_array);
                        $all_appointments_per_day = array_reverse($all_appointments_per_day);
                        array_push($all_appointments_per_day, $count_all_appts);
                       //print_r($unique_date_array);
                       //print_r($all_appointments_per_day);  
                        ?>  
                       </table> 

                    </div>
                </div>
            </div>
        </div>


   

    </div> <!-- END view-holder -->


</div> <!-- END Layout Center -->

<!--Modal Window Templates-->
    <div class="modal fade" id="myModal">
          <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Add a New Task</h3>
          </div>
          <div class="modal-body">
            <h3>Title:</h3>
            <input type="text" placeholder="Title">
            <h4>Description:</h4>
            <textarea style="width:98%; height:100px;" placeholder="Describe your task..."></textarea>
            <p>Lots of things can go here...</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-primary">Save Task</a>
          </div>
    </div>
    <div class="modal fade" id="replyModal">
          <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Reply:</h3>
          </div>
          <div class="modal-body">
            <textarea style="width:98%; height:100px;"></textarea>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-primary">Post Reply</a>
          </div>
    </div>
	<!--date picker widget-->
  <script src="http://code.highcharts.com/highcharts.js"></script>
   <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script>
	$(function() {
		$( "#start_id" ).datepicker();
		$( "#end_id" ).datepicker();
    
    $(document).on("click", ".remove_appt", function() {
      var data_id = $( this ).attr('data-id');
      $( this ).closest('tr').hide('slow');
      $.post("<?php echo base_url();?>index.php/organizer/create_main_event/unset_me", {data_id: data_id}, function(data){
            //alert('called');
            
            
        }, 'text');
    });

    $("#searcher").keyup(function(){
      $('.tr_hide').hide();
      var term = $("#searcher").val();
      $("td").filter(function() {
        return $(this).text().indexOf(term) !== -1;
      }).parent().show('slow');
    });

    $(document).on("click", ".hide_paid_btn", function() {
      //alert('d');
      $('.paid_hide').hide('slow');
    });

    $(document).on("click", ".flag-paid", function() {
      //alert('d');
      var data_id = $( this ).attr('data-id');
      //$( this ).closest('tr').hide('slow');
      var is_paid = $( this ).hasClass('btn-success');
      
      if ( is_paid ) {
        $( this ).addClass('btn-danger');
        $( this ).removeClass('btn-success');
        is_paid = "not paid";
      } else {
        $( this ).addClass('btn-success');
        $( this ).removeClass('btn-danger');
        is_paid = "paid";
      }
      $.post("<?php echo base_url();?>index.php/organizer/create_main_event/update_paid", {data_id: data_id, is_paid: is_paid}, function(data){
            //alert(data);
            
            
        }, 'text');
    });

    

    $(document).on("click", ".search_appt", function() {
      date1 = format_date_custom ($('#start_id').val());
      date2 = format_date_custom ($('#end_id').val());
      if($('#csv').is(":checked")){
        download_option = "download";
      } else {
        download_option= "no_download"
      }
      final_query = "<?php echo base_url();?>index.php/organizer/create_main_event/members_area/" + download_option + "/" + date1 + "/" + date2;
      window.location.replace(final_query);
      
    });

   //$(document).on("keyUp", ".search_input", function() {
    //alert('d');
    //$("#main_results tr td:contains('"+ $(this).val() +"')").each(function(){
      //$(this).parent('tr').hide('slow');
    //});
   //});
     $(function () {
        $('#chart_holder').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Precision Golf School Reporting Data',
                x: -20 //center
            },
            subtitle: {
                text: 'Trends in Bookings',
                x: -20
            },
            xAxis: {
                categories: <?php echo json_encode($unique_date_array);?>
            },
            yAxis: {
                title: {
                    text: 'Appointments'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Daily Appt',
                data: <?php echo json_encode($all_appointments_per_day);?>
            }
            , {
                name: 'All Appts : <?php echo $count_all_appts_total;?>',
                data: []
            }
            //, {
                //name: 'Berlin',
                //data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            //}, {
                //name: 'London',
                //data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            //}
            ]
        });
    });
 /////////////////////////////////////////////////////////////////////////////////

	});
   
  function format_date_custom (string_passed) {
    thing_holder = string_passed.split("/");
    return thing_holder[2]+"/"+thing_holder[0]+"/"+thing_holder[1];
  } 

  function printDiv()
  {
  var divToPrint=document.getElementById('main_results');
  newWin= window.open("");
  newWin.document.write(divToPrint.outerHTML);
  newWin.print();
  newWin.close();
  }
   
   
	</script>

 
