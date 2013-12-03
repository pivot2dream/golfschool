<?php

class Manage_events extends CI_Controller
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
		$this->data['page_title'] = 'Manage My Events';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'manage events' => 'index.php/organizer/manage_events/members_area'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
	{
		$this->load->model('organizer/manage_events_model');
		$data['events_passed'] = $this->manage_events_model->get_my_events();
		///////////////////////////////
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/manage_events', $data);
		$this->load->view('organizer/footer_org');
	}

	function create_event()
		{
			//$this->load->library('form_validation');

			// field name, error message, validation rules
			$this->form_validation->set_rules('event_name', 'Event Name', 'trim|required');
			$this->form_validation->set_rules('event_desc', 'Event Description', 'trim|required');
			$this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
			$this->form_validation->set_rules('end_date', 'End Date', 'trim|required');
			$this->form_validation->set_rules('event_addy', 'Event Address', 'trim|required');
			$this->form_validation->set_rules('event_zip', 'Event Zip Code', 'trim|required');



			if($this->form_validation->run() == FALSE)
			{   $data['show_success'] = 'false';
				$this->load->view('organizer/header_org');
				$this->load->view('organizer/create_main_event',$data);
				$this->load->view('organizer/footer_org');
			}

			else
			{

				$this->load->model('organizer/create_main_event_model');

				if($query = $this->create_main_event_model->create_event())
				{
				//print_r($query);
					$data['show_success'] = 'true';
					$this->load->view('organizer/header_org');
					$this->load->view('organizer/create_main_event', $data);
		            $this->load->view('organizer/footer_org');
				}
				else
				{
					echo 'there was a problem, contact ce-go';
				}
			}

	}



}
