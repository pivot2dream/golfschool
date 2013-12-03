<?php

class Booking_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_prove_and_common');
		$this->login_prove_and_common->is_logged_in('o');

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//***the following will be used to extend data passed to views, regardless of the controller function called***
		//***primary functionality will apply to page title, breadcrumb menu, and notifications accross all controllers***
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$this->data['page_title'] = "Add the foods you can't eat, and we'll offer you choices";
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'My Calendar' => '#'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}
    
	function create_new_appointment(){
	    $this->load->model('organizer/booking_admin_model');
		$this->booking_admin_model->create_new_appointment_model();
	
	}

	function fetch_appointment(){
	    $this->load->model('organizer/booking_admin_model');
		echo $this->booking_admin_model->fetch_appointment_model();
	
	}

	function session_conflict_check(){
		$this->load->model('organizer/booking_admin_model');
		echo $this->booking_admin_model->session_conflict_check();
	}

	function today()
	{	

    $user_id = $this->session->userdata('id_o');
	$data['user_id'] = $user_id;

	$refresh_page="false";

	$this->load->model('organizer/booking_admin_model');

	if($this->input->post('start-time')){
		$this->booking_admin_model->update_static_assets();

	}
	/*
	if(isset($_POST['unset_me'])){
	$unset_at = mysql_real_escape_string($_POST['unset_me']);
	$query_unseter = "DELETE FROM `booking_master`
	WHERE `booking_master`.`ID_auth_bm` ='$unset_at' LIMIT 1";

	 $result_array = mysql_query($query_unseter) or die('Error Adding array to database');

	}

	if(isset($_POST['submitter'])){
	$book_user_name = mysql_real_escape_string($_POST['user_first_name']);
	$book_user_id = mysql_real_escape_string($_POST['user_passed_id']);
	$start_submit = mysql_real_escape_string($_POST['start_submit']);
	$end_submit = mysql_real_escape_string($_POST['end_submit']);
	$end_submit = new DateTime($end_submit);
	$end_submit = $end_submit->modify('-1 second');
	$end_submit=$end_submit->format('Y-m-d H:i:s');

	$select_location_passed = mysql_real_escape_string($_POST['select_location_passed']);

	$booking_trainer_name = mysql_real_escape_string($first_name_captcha . ' ' .$last_name_captcha);
	$booking_notes = mysql_real_escape_string($_POST['notes']);


	$query_3 ="INSERT INTO booking_master (`ID_auth_bm`,`start_bm`,`end_bm`,`trainer_id_bm`,`cust_id_bm`,`trainer_name_bm`,`cust_name_bm`,`notes_bm`,`address_ref_bm`)
					VALUES (NULL,'$start_submit','$end_submit', '$user_id','$book_user_id','$booking_trainer_name','$book_user_name','$booking_notes','$select_location_passed')";


	$result_array = mysql_query($query_3) or die('Error Adding array to database');

	$refresh_page="true";
	}

    
    */
    $result_static_assets = $this->booking_admin_model->get_static_assets();
    $default_start = "";
    $default_end = "";
    $minute_incriment_saved = "";
    $number_of_td_iterations = "";
    foreach($result_static_assets as $static_asset){
    	$default_start = $static_asset->default_start_lessons;	
    	$default_end = $static_asset->default_end_lessons;	
    	$minute_incriment_saved = $static_asset->default_incriment;
    }
    $data['minute_incriment_saved'] = $minute_incriment_saved;
    $start_real_date = new DateTime($default_start);
	$end_real_date = new DateTime($default_end);
	$interval = $start_real_date->diff($end_real_date);
    $data['default_start'] = $default_start;
    $data['default_end'] = $default_end;
    //this populate the two time picker things for start and end time on the admin page
    $data['default_start_format'] = $start_real_date->format('h:i A');
    $data['default_end_format'] = $end_real_date->format('h:i A'); 
    //below calculates the number of minutes between start and end
	$total_minutes = ($interval->h * 60) + $interval->i;
	$number_of_td_iterations = ($total_minutes / $minute_incriment_saved);
    $data['number_of_td_iterations'] = $number_of_td_iterations;
	
	if($this->uri->segment(4)){
	$date_held = $this->uri->segment(4) . "/" . $this->uri->segment(5) . "/" . $this->uri->segment(6);
	$data['last_part_date_url'] = $date_held;
	$date = new DateTime($date_held);
	}else{
	$data['last_part_date_url'] = "";	
	$date = new DateTime();
	}

	$date_go_forward = new DateTime($date->format('Y/m/d'));
	$date_go_forward = $date_go_forward->modify('+1 week');
	$date_go_forward = $date_go_forward->format('Y/m/d');
	$data['date_go_forward'] = $date_go_forward;
	///////////////////////////////////////////////////////
	$date_go_back = new DateTime($date->format('Y/m/d'));
	$date_go_back = $date_go_back->modify('-1 week');
	$date_go_back = $date_go_back->format('Y/m/d');
	$data['date_go_back'] = $date_go_back;

	$day_accord_toggle=$date->format('Ymd');
	$check_if_monday = $date->format('l');
	$date_query = $date->format('Y-m-d') . ' 05:00:00';

	if($check_if_monday!="Monday"){
	$date->modify("last monday");}
	//$date = new DateTime('previous monday');
	//echo $date;
	//now we take the date from the database and subtract 15 minutes
	$start_real_date->modify('-'. $minute_incriment_saved .' minutes');
	$start_hour_min_sec_passed = $start_real_date->format('h:i:s');
	$weekdays = array();
	for($i=0; $i<7; $i++){
	    $weekdays[] = array($date->format('l'),$date->format('m-d-Y'),$date->format('Y-m-d') . ' ' . $start_hour_min_sec_passed);
	    $date->modify('+1 day');
	}
	$data['weekdays'] = $weekdays;

    //end instantiate variables
    //Build the array of booked dates

    $create_start_check = explode(' ',$weekdays[0][2]);
    $first_start_check_part = $create_start_check[0];
    $second_start_check_part = $first_start_check_part . ' 03:00:00';

    $create_start_check = explode(' ',$weekdays[6][2]);
    $first_finish_check_part = $create_start_check[0];
    $second_finish_check_part = $first_finish_check_part . ' 22:50:00';

    //echo $second_finish_check_part;
    //echo $second_start_check_part;
    
    $result_prev_array = $this->booking_admin_model->build_array_booked_dates($second_start_check_part, $second_finish_check_part, $user_id);
    //$result_prev_array = mysql_query("SELECT * FROM `booking_master` WHERE `start_bm` BETWEEN '$second_start_check_part' AND '$second_finish_check_part' AND `trainer_id_bm` ='$user_id'") or die('Error Selecting array to database' . mysql_error());

    $prev_indexed=array();
    foreach($result_prev_array as $row){
    //$prev_indexed[]=array(stripslashes($row['ID_auth_bm']),stripslashes($row['start_bm']),stripslashes($row['end_bm']),stripslashes($row['cust_name_bm']));
    $prev_indexed[]=array($row->ID_auth_bm,$row->start_bm,$row->end_bm,$row->cust_name_bm,$row->appointment_type_flag);

    }
    $data['prev_indexed'] = $prev_indexed;
    //end build the array of booked dates

    $data['date_shown_master'] = new DateTime($weekdays[0][2]);
    $data['date_shown_mon'] = new DateTime($weekdays[0][2]);
    $data['date_shown_tues'] = new DateTime($weekdays[1][2]);
    $data['date_shown_weds'] = new DateTime($weekdays[2][2]);
    $data['date_shown_thurs'] = new DateTime($weekdays[3][2]);
    $data['date_shown_fri'] = new DateTime($weekdays[4][2]);
    $data['date_shown_sat'] = new DateTime($weekdays[5][2]);
    $data['date_shown_sun'] = new DateTime($weekdays[6][2]);

    //////////////////////////////////////////////////////////////////////////
    //start getting all available plans
    //////////////////////////////////////////////////////////////////////////
    $this->load->model('organizer/golf_plans_model');
	$data['golf_plans'] = $this->golf_plans_model->get_all_golf_plans();
	//////////////////////////////////////////////////////////////////////////
    //start getting all available plans
    //////////////////////////////////////////////////////////////////////////    
	
	   


		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
	    //$this->load->view('organizer/admin_top', $data);
		$this->load->view('organizer/booking_admin', $data);
		$this->load->view('organizer/footer_org');
	}

	

	function add_admin()
	{   $data['add_state'] = true;
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		 


		if($this->form_validation->run() == FALSE)
		{   $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
			$data['show_success'] = 'false';
			$this->load->view('organizer/header_org', $data);
	    	$this->load->view('organizer/admin_top', $data); 
			$this->load->view('organizer/signup_form_admin', $data);
			$this->load->view('organizer/footer_org');
		}

		else
		{
			

			if($query = $this->membership_model->create_pro())
			{   $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
				$data['show_success'] = 'true';
				$this->load->view('organizer/header_org', $data);
	    		$this->load->view('organizer/admin_top', $data); 
				$this->load->view('organizer/signup_form_admin', $data);
				$this->load->view('organizer/footer_org');
			}
			else
			{
				$this->load->view('signup_form');
			}
		}	
	}

	function edit_admin()
	{   $data['add_state'] = false;
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		$this->load->model('membership_model');


		if($this->form_validation->run() == FALSE)
		{   $data['add_state'] = true;
			$data['golf_pros'] = $this->membership_model->get_all_golf_pros();
			$data['show_success'] = 'false';
			$this->load->view('organizer/header_org', $data);
	    	$this->load->view('organizer/admin_top', $data); 
			$this->load->view('organizer/signup_form_admin', $data);
			$this->load->view('organizer/footer_org');
		}

		else
		{
			

			if($query = $this->membership_model->edit_pro())
			{   $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
				$data['show_success'] = 'true';
				$this->load->view('organizer/header_org', $data);
	    		$this->load->view('organizer/admin_top', $data); 
				$this->load->view('organizer/signup_form_admin', $data);
				$this->load->view('organizer/footer_org');
			}
			else
			{
				$this->load->view('signup_form');
			}
		}	
	}

	function ask_if_golfer() {
		$this->load->model('organizer/booking_admin_model');
		$query = $this->booking_admin_model->ask_if_golfer_model();
		echo $query; 
		
		//if($query = $this->membership_model->ask_if_golfer_model()){
		//	return 'removal worked';
		//} else {
		//	return 'removal failed';
		//}
	}

	function create_golfer() {
		$this->load->model('organizer/booking_admin_model');
		$query = $this->booking_admin_model->create_golfer_model();
		echo $query; 
		
		//if($query = $this->membership_model->ask_if_golfer_model()){
		//	return 'removal worked';
		//} else {
		//	return 'removal failed';
		//}
	}

}
