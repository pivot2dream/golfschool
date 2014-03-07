<?php

class News extends CI_Controller
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
		$this->data['page_title'] = 'Edit Page';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'Edit News and About Pages' => '#'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function update_paid(){
		$this->load->model('organizer/create_main_event_model');
		$this->create_main_event_model->update_paid_model();
	}

	function edit_page()
	{   ///////////////////////////////
		$data['page_title'] = 'Edit Page';
		///////////////////////////////
		$this->load->model('organizer/general_modal');
		$all_news = $this->general_modal->get_news();	
		$data['news_shown'] = $all_news;
		
		//////////////////////////////
		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/edit_news', $data);
		$this->load->view('organizer/footer_org');


	}


	function update_news() {
		$this->load->model('organizer/general_modal');
		$result = $this->general_modal->update_html($this->input->post('html_held'), $this->input->post('what_held'), $this->input->post('id_held'));
		echo $result;
	}




}
