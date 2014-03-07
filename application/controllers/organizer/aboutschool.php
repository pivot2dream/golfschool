<?php

class Aboutschool extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('login_prove_and_common');
		$this->data['is_user_mode'] = $this->login_prove_and_common->is_logged_in_special('o');

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//***the following will be used to extend data passed to views, regardless of the controller function called***
		//***primary functionality will apply to page title, breadcrumb menu, and notifications accross all controllers***
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$this->data['page_title'] = "Precision Golf School";
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'My Calendar' => '#'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	public function index(){
		$data['add_state'] = true;
		$this->load->model('organizer/general_modal');
		$all_news = $this->general_modal->get_news();	
		$data['news_shown'] = $all_news;
 		$this->load->view('organizer/header_org', $data);
 		$this->load->view('organizer/aboutschool', $data);
	    //$this->load->view('organizer/admin_top', $data);
		//$this->load->view('organizer/booking_admin', $data);
		$this->load->view('organizer/footer_org');
	}
}