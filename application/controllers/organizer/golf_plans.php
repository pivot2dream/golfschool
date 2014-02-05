<?php

class Golf_plans extends CI_Controller
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
			'Manage Golf Plans' => 'index.php/organizer/golf_plans/add_plan'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}
    
    function create_group_plan(){
    	$this->load->model('organizer/golf_plans_model');
    	$query = $this->golf_plans_model->create_plan();
    	echo $query;

    }
	

	function add_plan()
	{   $data['add_state'] = true;
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('plan_name', 'Plan Name', 'trim|required');

		$this->load->model('organizer/golf_plans_model');


		if($this->form_validation->run() == FALSE)
		{   $data['golf_pros'] = $this->golf_plans_model->get_all_golf_plans();
			$data['show_success'] = 'false';
			$this->load->view('organizer/header_org', $data);
	    	//$this->load->view('organizer/admin_top', $data); 
			$this->load->view('organizer/golf_plans', $data);
			$this->load->view('organizer/footer_org');
		}

		else
		{
			

			if($query = $this->golf_plans_model->create_plan())
			{   $data['golf_pros'] = $this->golf_plans_model->get_all_golf_plans();
				$data['show_success'] = 'true';
				$this->load->view('organizer/header_org', $data);
	    		//$this->load->view('organizer/admin_top', $data); 
				$this->load->view('organizer/golf_plans', $data);
				$this->load->view('organizer/footer_org');
			}
			else
			{
				//$this->load->view('signup_form');
			}
		}	
	}

	function edit_plan()
	{   $data['add_state'] = true;
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('plan_name', 'Plan Name', 'trim|required');

		$this->load->model('organizer/golf_plans_model');


		if($this->form_validation->run() == FALSE)
		{   
			$data['golf_pros'] = $this->golf_plans_model->get_all_golf_plans();
			$data['show_success'] = 'false';
			$this->load->view('organizer/header_org', $data);
	    	//$this->load->view('organizer/admin_top', $data); 
			$this->load->view('organizer/golf_plans', $data);
			$this->load->view('organizer/footer_org');
		}

		else
		{
			

			if($query = $this->golf_plans_model->edit_plan())
			{   $data['golf_pros'] = $this->golf_plans_model->get_all_golf_plans();
				$data['show_success'] = 'true';
				$this->load->view('organizer/header_org', $data);
	    		//$this->load->view('organizer/admin_top', $data); 
				$this->load->view('organizer/golf_plans', $data);
				$this->load->view('organizer/footer_org');
			}
			else
			{
				$this->load->view('signup_form');
			}
		}	
	}

	function r_plan() {
		$this->load->model('organizer/golf_plans_model');
		if($query = $this->golf_plans_model->r_plan_model()){
			return 'removal worked';
		} else {
			return 'removal failed';
		}
	}

}
