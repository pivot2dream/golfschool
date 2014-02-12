<?php

class Client_detail extends CI_Controller
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
		$this->data['page_title'] = "Precision Golf School";
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'My Clients' => '#'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function show_clients(){
		$user_id = $this->session->userdata('id_o');
	    $data['user_id'] = $user_id;

	    $data['full_name'] = $this->session->userdata('first_o') . ' ' . $this->session->userdata('last_o');
	    $this->load->model('membership_model');
	    $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
	    $this->load->model('organizer/golf_plans_model');
	    $plan_holder = $this->golf_plans_model->get_all_golf_plans();
	    $data['first_plan'] = $plan_holder[0];
    	$data['golf_plans'] = $plan_holder;

    	$this->load->model('organizer/booking_admin_model');
    	$temp_appointment_id_holder = $plan_holder[0]->ID_auth_dp;
	    $email_holder = $this->booking_admin_model->fetch_email_list($user_id, $temp_appointment_id_holder);
	    $data['email_holder'] = $email_holder;

    	
		//$this->load->model('organizer/booking_admin_model');
		//$this->booking_admin_model->create_new_appointment_model();
		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
	    $this->load->view('organizer/client_detail_view', $data);
	    //$this->load->view('organizer/admin_top', $data);
		//$this->load->view('organizer/booking_admin', $data);
		$this->load->view('organizer/footer_org');

	}

	function get_clients(){
		$this->load->model('organizer/booking_admin_model');
    	$pro = $this->input->post('inst');
    	$appt = $this->input->post('plan');
	    $email_holder = $this->booking_admin_model->fetch_email_list($pro, $appt);
		echo json_encode($email_holder);
		
	}
    
	

}
