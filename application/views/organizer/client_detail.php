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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/gritter/css/jquery.gritter.css" />

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
    <script type="text/javascript" src="<?php echo base_url();?>js/responsive.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/date.js"></script>

    <![endif]>


    <!--[if lte IE 10]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/application-IE.js"></script><![endif]-->
    <!--[if lte IE 10]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/responsive-IE.js"></script><![endif]-->
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>css/select2.css' />


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
              <li><a href="<?php echo base_url();?>index.php/organizer/dash/add_admin">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-4-temp.jpg" style="width:60px;"/>
                            <h5>Manage Staff</h5>
                            <p>Create, Edit, or Remove Precision Golf School staff. Upload profile pictures that will be available on the site.</p></a></li>
              <li><a href="<?php echo base_url();?>index.php/organizer/golf_plans/add_plan">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-5-temp.jpg" style="width:60px;"/>
                            <h5>Manage Plans</h5>
                            <p>Create, Edit, or Remove static or group appointment plans. Add length, description, and pricing</p></a></li>
              <li><a href="<?php echo base_url();?>index.php/organizer/create_main_event/members_area">
                <img alt="profile image" src="<?php echo base_url();?>img/thumb-1-temp.jpg" style="width:60px;"/>
                            <h5>Reporting</h5>
                            <p>Search by Date or client name, remove appointments or flag paid state. Table layout and export options.</p></a></li>
              <li><a href="<?php echo base_url();?>index.php">Precision Golf School Home Page</a></li>
            </ul>
        </span>
        </div>
    	<!--<ul id="headerNav">
            <li class="headerNavList"><span class="dropdown" id="menu3">
                <a class="dropdown-toggle btn-navbar" data-toggle="dropdown" href="#menu3">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="index.html"><i class="icon-home"></i> Dashboard</a></li>
                  <li class="divider"></li>
                  <li><a href="message-view.html"><i class="icon-inbox"></i> Create Event</a></li>
                  <li class="divider"></li>
                  <li><a href="graph-view.html"><i class="icon-signal"></i> Manage Events</a></li>
                  <li class="divider"></li>
                  <li><a href="calendar.html"><i class="icon-calendar"></i> Edit Account Info</a></li>
                  <li class="divider"></li>
                  <li><a href="widgets.html"><i class="icon-cog"></i> Manage Roles</a></li>
                  <li class="divider"></li>
                  <li><a href="typography.html"><i class="icon-font"></i> Check in/Check out</a></li>
                  <li class="divider"></li>
                  <li><a href="ui-elements.html"><i class="icon-plus-sign"></i> Contact CE-GO</a></li>
                </ul>
            </span></li>
    	</ul>-->


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
    </div> <!-- END Layout North -->

    <div class="ui-layout-west">

        <ul class="nav nav-tabs sidebar-tabs">
          <li class="active"><a href="#1" data-toggle="tab">Pages</a></li>
          <li><a href="#2" data-toggle="tab">Messages</a></li>
          <li><a href="#3" data-toggle="tab">Files</a></li>
        </ul>
        <div class="tab-content ui-layout-content">
            <div class="tab-pane active" id="1">
                <ul>
                    <a href="index.html"><li class="list-box">
                      <p><i class="icon-home icon-white"></i> Dashboard </p>
                    </li></a>
                    <a href="message-view.html"><li class="list-box">
                      <p><i class="icon-inbox icon-white"></i> Messages </p><span class="badge">3</span>
                    </li></a>
                    <a href="graph-view.html"><li class="list-box">
                      <p><i class="icon-signal icon-white"></i> Graphs </p><span class="badge">15</span>
                    </li></a>
                    <a href="calendar.html"><li class="list-box">
                      <p><i class="icon-calendar icon-white"></i> Calendar </p><span class="badge">8</span>
                    </li></a>
                    <a href="widgets.html"><li class="list-box">
                      <p><i class="icon-cog icon-white"></i> Widgets &amp; More </p>
                    </li>
                    <a href="code-editor.html"><li class="list-box">
                      <p><i class="icon-edit icon-white"></i> Code Editor </p><span class="badge">7</span>
                    </li></a>
                    <a href="typography.html"><li class="list-box">
                      <p><i class="icon-font icon-white"></i> Typography </p>
                    </li></a>
                    <a href="ui-elements.html"><li class="list-box">
                      <p><i class="icon-plus-sign icon-white"></i> UI Elements </p>
                    </li></a>
                    <a href="buttons.html"><li class="list-box">
                      <p><i class="icon-ok-sign icon-white"></i> Buttons </p><span class="badge">33</span>
                    </li></a>
                    <a href="gallery.html"><li class="list-box">
                      <p><i class="icon-picture icon-white"></i> Gallery </p>
                    </li></a>
                    <a href="error-pages.html"><li class="list-box">
                      <p><i class="icon-warning-sign icon-white"></i> Error Pages </p><span class="badge">404</span>
                    </li></a>
                </ul>

            </div>
            <div class="tab-pane" id="2">
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>Bryan McAnulty <span>Today at 3:36pm</span></h5>
                    <p>Check out all the features here! Make sure to click around everywhere so you don't miss anything.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>Ashley Green <span>July 29th, 2012 12:31pm</span></h5>
                    <p>Make sure to check your notifictions by clicking the "3" in the top left corner.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>Catalina Butnaru <span>July 28th, 2012 11:26am</span></h5>
                    <p>Try collapsing and expanding the left and right sidebars using the buttons in the footer.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>Jack Koner <span>July 27th, 2012 2:16pm</span></h5>
                    <p>Also look through the different tabs on each of the sidebars.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>New User <span>July 25th, 2012 3:01pm</span></h5>
                    <p>I need to add a profile image.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>Matt Brink <span>July 24th, 2012 5:02pm</span></h5>
                    <p>Uploaded a new file Build a Web App project.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>Bryan McAnulty <span>July 20th, 2012 1:42pm</span></h5>
                    <p>Added a new comment to the Build a Web App project.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <div class="message-box">
                    <img alt="profile image" src="img/avatar-profile.png" />
                    <h5>New User <span>July 19th, 2012 2:35pm</span></h5>
                    <p>Uploaded a new file to the Client Redesign Project.</p>
                    <a href="#replyModal" data-toggle="modal" class="reply-to"><i class="icon-share-alt icon-white"></i> Reply</a>
                </div>
                <p>Date:</p> <div id="datepicker"></div>
            </div>

        </div>




    </div> <!-- END Layout West -->




	<div class="ui-layout-center">
    <div id="view-holder" class="ui-layout-content">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/organizer/booking_admin/today">Home</a></li>
            <?php foreach($breadcrumber as $key => $val){ ?>
            <li><a href="<?php echo base_url();?><?php echo $val;?>"><?php echo $key;?></a></li>
            <?php } ?>
        </ul>
        <!--<h1 class="message-header" style="background-color:#fff;"><?php echo $page_title;?></h1>-->
