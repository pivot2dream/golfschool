<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>Precision Golf School - The Premier Golf School located at Fiddler's Green - Eugene, OR</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-timepicker.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php echo base_url();?>css/core.css" type="text/css" media="all"/>
	<link type="text/css" href="<?php echo base_url();?>css/overcast/jquery-ui-1.8.20.custom.css" rel="stylesheet" />

    <!-- Retina Webfont for Boostrap from Font Awesome - http://fortawesome.github.com/Font-Awesome -->
    <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>css/font-awesome.css' />

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>


    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url();?>js/jquery.layout.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-timepicker.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="<?php echo base_url();?>js/select2.js"></script>

    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/flot/excanvas.min.js"></script><![endif]-->


    <!-- Scripts inside js/application.js-->
    <![if !IE]>
    <!--<script type="text/javascript" src="<?php echo base_url();?>js/application.js"></script>-->
    <!--NOTE AARON: IF PROBLEMS PUT THIS BACK-->
    <!--<script type="text/javascript" src="<?php echo base_url();?>js/responsive.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>js/date.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/backstretch.js"></script>
 

    <![endif]>


    <!--[if lte IE 10]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/application-IE.js"></script><![endif]-->
    <!--[if lte IE 10]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/responsive-IE.js"></script><![endif]-->
    <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>css/select2.css' />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/js/jquery.notebook.css">
     
    


  </head>
  <body>

    <div class="ui-layout-north topbar">
    	<h1>Precision Golf School</h1>
        <div class="notifyHeader">
        <span class="dropdown notifications" id="menu2">
            <a class="dropdown-toggle" id="notifyNumber" data-toggle="dropdown" href="#menu2">
              Menu:
            </a>
            <ul class="dropdown-menu">
              <li>PLEASE CHOOSE AN OPTION BELOW:</li>
              <li><a href="<?php echo base_url();?>index.php/organizer/booking_admin/today">
                <img alt="profile image" src="<?php echo base_url();?>img/cal_icon.jpg" style="width:60px;"/>
                            <h5>My Calendar</h5>
                            <p>Browse, create and remove appointments. Modify calendar settings and more.</p></a></li>
              <li><a href="<?php echo base_url();?>index.php/organizer/client_detail/show_clients">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-3-temp.jpg" style="width:60px;"/>
                            <h5>Manage Clients</h5>
                            <p>Search by Name or Email through your client base. Find Profile, contact information, and export mailing lists.</p></a></li>
              <li><a href="<?php echo base_url();?>index.php/organizer/golf_plans/add_plan">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-5-temp.jpg" style="width:60px;"/>
                            <h5>Manage Plans</h5>
                            <p>Create, Edit, or Remove static or group appointment plans. Add length, description, and pricing</p></a></li>
              
              <?php if($this->session->userdata('id_o') == '173') { ?>
              
              <li>
                <a href="<?php echo base_url();?>index.php/organizer/dash/add_admin">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-4-temp.jpg" style="width:60px;"/>
                            <h5>Manage Staff</h5>
                            <p>Create, Edit, or Remove Precision Golf School staff. Upload profile pictures that will be available on the site.</p></a>
              </li>
              <li><a href="<?php echo base_url();?>index.php/organizer/news/edit_page">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-news.jpg" style="width:60px;"/>
                            <h5>Edit News</h5>
                            <p>Create, Edit, or Remove the HTML contents of the News Page in this area.</p></a></li>              
              <?php } ?>
              <li><a href="<?php echo base_url();?>index.php/organizer/create_main_event/members_area">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-1-temp.jpg" style="width:60px;"/>
                            <h5>Reporting</h5>
                            <p>Search by Date or client name, remove appointments or flag paid state. Table layout and export options.</p></a></li>
              <li><a href="<?php echo base_url();?>index.php">Precision Golf School Home Page</a></li>
            </ul>
        </span>
        </div>
<?php if($this->session->userdata('is_logged_in_o') == FALSE) {?>
<div class="facebook_div pull-right">
  <table>
    <tr>
      <td>
        <a href="https://www.facebook.com/pages/Precision-Golf-School/150365515060968" target="_blank">
          <img src="<?php echo base_url();?>img/facebook_green_64.png" style="width:40px;">
        </a>  
      </td>
      <td>
        <a href="https://www.google.com/maps/place/Precision+Golf+School/@44.1404646,-123.2008761,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0xb1ee22d84880e93e" target="_blank">
          <img src="<?php echo base_url();?>img/google_maps_icon_64.png" style="width:40px;">
        </a> 
      </td>
      <td>
        &nbsp;
      </td>  
    </tr>
  </table>      
</div>

<?php } else {?>
    	<div class="login">
            <span class="dropdown" id="menu1">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                  <?php
				                $profile_pic_ref = 'img/org_profile_pics/'. $this->session->userdata('id_o') .'.jpg';

              		?>
                  <img src="<?php echo base_url();?>img/<?php echo $this->session->userdata('img_o'); ?>?r=<?php echo rand(); ?>"/> <span><?php echo $this->session->userdata('first_o'); ?>&nbsp;<?php echo $this->session->userdata('last_o'); ?> <span style="color:#777777;">with</span> <?php echo $this->session->userdata('company_o'); ?></span>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url();?>index.php/login">Logout</a></li>
                </ul>
            </span>
        </div>
<?php } ?>
    </div> <!-- END Layout North -->
	<div class="ui-layout-center">
    <div id="view-holder" class="ui-layout-content">
        <ul class="breadcrumb">
<?php if($this->session->userdata('is_logged_in_o') == FALSE) {?>
            <li><a href="<?php echo base_url();?>index.php/organizer/booking_admin/today" style="color:black;">Book Your Apointment Online!</a></li>
            <li><a href="<?php echo base_url();?>index.php/organizer/about" style="color:black;">About Our Staff</a></li>
            <li><a href="<?php echo base_url();?>index.php/organizer/aboutschool" style="color:black;">About Our School</a></li>
            <li><a href="<?php echo base_url();?>index.php/organizer/latestnews" style="color:black;">Latest News & Upcoming Events</a></li>
            <li><a href="<?php echo base_url();?>index.php/organizer/contactus" style="color:black;">Contact Precision Golf School</a></li>

<?php } else {?>
            <li><a href="<?php echo base_url();?>index.php/organizer/booking_admin/today">Home</a></li>
            <?php foreach($breadcrumber as $key => $val){ ?>
            <li><a href="<?php echo base_url();?><?php echo $val;?>"><?php echo $key;?></a></li>
            <?php } ?>
<?php } ?>
        </ul>
        <!--<h1 class="message-header" style="background-color:#fff;"><?php echo $page_title;?></h1>-->
