<?php

class Contact extends CI_Controller
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
		$this->data['page_title'] = 'Contact Us';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'contact us' => 'index.php/organizer/contact/members_area'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
	{   ///////////////////////////////

		//////////////////////////////
		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/contact', $data);
		$this->load->view('organizer/footer_org');
	}





}
