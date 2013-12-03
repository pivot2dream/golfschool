<?php

class Create_main_event extends CI_Controller
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
		$this->data['page_title'] = 'Reporting Options';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'Reporting Options' => 'index.php/organizer/create_main_event/members_area'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function update_paid(){
		$this->load->model('organizer/create_main_event_model');
		$this->create_main_event_model->update_paid_model();
	}

	function members_area()
	{   ///////////////////////////////
		$data['page_title'] = 'Reporting Options';
		///////////////////////////////
		if($this->uri->segment(5)){
			$date_held = $this->uri->segment(8) . "/" . $this->uri->segment(9) . "/" . $this->uri->segment(10);
			$date = new DateTime($date_held);
			$date_go_forward = new DateTime($date->format('Y/m/d'));
			$date_end_query = $date_go_forward;
			$date_go_forward = $date_go_forward->format('m/d/Y');
			$data['end_date'] = $date_go_forward;
			////////////////////////////////////////////////////////
			$date_held = $this->uri->segment(5) . "/" . $this->uri->segment(6) . "/" . $this->uri->segment(7);
			$date = new DateTime($date_held);
			$date_go_back = new DateTime($date->format('Y/m/d'));
			$date_start_query = $date_go_back;
			$date_go_back = $date_go_back->format('m/d/Y');
			$data['start_date'] = $date_go_back;

		}else{
				
			$date = new DateTime();

			$date_go_forward = new DateTime($date->format('Y/m/d'));
			$date_end_query = $date_go_forward;
			$date_go_forward = $date_go_forward->format('m/d/Y');
			$data['end_date'] = $date_go_forward;
			///////////////////////////////////////////////////////
			$date_go_back = new DateTime($date->format('Y/m/d'));
			$date_go_back = $date_go_back->modify('-1 month');
			$date_start_query = $date_go_back;
			$date_go_back = $date_go_back->format('m/d/Y');
			$data['start_date'] = $date_go_back;

		}

        $date_end_query = $date_end_query->format('Y-m-d') . ' 22:50:00';
        $date_start_query = $date_start_query->format('Y-m-d') . ' 03:00:00';

        if( $this->uri->segment(4) == "download" ){
        	$download = true;
        } else {
        	$download = false;
        }
		
		$this->load->model('organizer/create_main_event_model');

		$result_for_report = $this->create_main_event_model->query_dates_for_report( $date_start_query , $date_end_query, $download);
		  
		  	$data['result_for_report'] = $result_for_report;
		
		

		

		//////////////////////////////
		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/create_main_event', $data);
		$this->load->view('organizer/footer_org');


	}

	function unset_me() {
		$this->load->model('organizer/create_main_event_model');
		$this->create_main_event_model->unset_model();
		return $this->input->post('data_id');
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
                /////////////////////////////////////////////////////////////////////
                //create the event in the database
                ////////////////////////////////////////////////////////////////////
				$this->load->model('organizer/create_main_event_model');

				if($query_insert_id = $this->create_main_event_model->create_event())
				{
				//print_r($query_insert_id);
					//$data['show_success'] = 'true';
					//$this->load->view('organizer/header_org');
					//$this->load->view('organizer/create_main_event', $data);
		            //$this->load->view('organizer/footer_org');
				}
				else
				{
					echo 'there was a problem creating the event, contact ce-go';
				}
				/////////////////////////////////////////////////////////////////////
				//create the days in the database
                ////////////////////////////////////////////////////////////////////


				if($number_of_days_diff = $this->create_main_event_model->create_days_in_event($query_insert_id))
				{
				$encoded_redirect = $this->login_prove_and_common->encode_common($query_insert_id . '***1');
                ///////////////////////////////////////////////////////////////////////////
                //create an action log that the event was created
                ////////////////////////////////////////////////////////////////////////////
                $this->create_main_event_model->create_log_of_created_event($this->session->userdata('company_o_id') , $this->session->userdata('first_o') . ' '.$this->session->userdata('last_o') .' with '. $this->session->userdata('company_o_name'),$encoded_redirect);

				redirect('organizer/calendar_view/members_area/'.$encoded_redirect);

					//echo $query;
					//$data['show_success'] = 'true';
					//$this->load->view('organizer/header_org');
					//$this->load->view('organizer/create_main_event', $data);
					//$this->load->view('organizer/footer_org');
				}
				else
				{
					echo 'there was a problem creating days in your event, contact ce-go';
				}
			}

	}



}
